<?php 
function wp_link_pages( $args = '' ) {
    global $page, $numpages, $multipage, $more;
 
    $defaults = array(
        'before'           => '<p class="post-nav-links">' . __( 'Pages:', 'rollback-wordpress-theme' ),
        'after'            => '</p>',
        'link_before'      => '',
        'link_after'       => '',
        'aria_current'     => 'page',
        'next_or_number'   => 'number',
        'separator'        => ' ',
        'nextpagelink'     => __( 'Next page', 'rollback-wordpress-theme' ),
        'previouspagelink' => __( 'Previous page', 'rollback-wordpress-theme' ),
        'pagelink'         => '%',
        'echo'             => 1,
    );
 
    $parsed_args = wp_parse_args( $args, $defaults );
 
    /**
     * Filters the arguments used in retrieving page links for paginated posts.
     *
     * @since 3.0.0
     *
     * @param array $parsed_args An array of arguments for page links for paginated posts.
     */
    $parsed_args = apply_filters( 'wp_link_pages_args', $parsed_args );
 
    $output = '';
    if ( $multipage ) {
        if ( 'number' == $parsed_args['next_or_number'] ) {
            $output .= $parsed_args['before'];
            for ( $i = 1; $i <= $numpages; $i++ ) {
                $link = $parsed_args['link_before'] . str_replace( '%', $i, $parsed_args['pagelink'] ) . $parsed_args['link_after'];
                if ( $i != $page || ! $more && 1 == $page ) {
                    $link = _wp_link_page( $i ) . $link . '</a>';
                } elseif ( $i === $page ) {
                    $link = '<span class="post-page-numbers current" aria-current="' . esc_attr( $parsed_args['aria_current'] ) . '">' . $link . '</span>';
                }
                /**
                 * Filters the HTML output of individual page number links.
                 *
                 * @since 3.6.0
                 *
                 * @param string $link The page number HTML output.
                 * @param int    $i    Page number for paginated posts' page links.
                 */
                $link = apply_filters( 'wp_link_pages_link', $link, $i );
 
                // Use the custom links separator beginning with the second link.
                $output .= ( 1 === $i ) ? ' ' : $parsed_args['separator'];
                $output .= $link;
            }
            $output .= $parsed_args['after'];
        } elseif ( $more ) {
            $output .= $parsed_args['before'];
            $prev    = $page - 1;
            if ( $prev > 0 ) {
                $link = _wp_link_page( $prev ) . $parsed_args['link_before'] . $parsed_args['previouspagelink'] . $parsed_args['link_after'] . '</a>';
 
                /** This filter is documented in wp-includes/post-template.php */
                $output .= apply_filters( 'wp_link_pages_link', $link, $prev );
            }
            $next = $page + 1;
            if ( $next <= $numpages ) {
                if ( $prev ) {
                    $output .= $parsed_args['separator'];
                }
                $link = _wp_link_page( $next ) . $parsed_args['link_before'] . $parsed_args['nextpagelink'] . $parsed_args['link_after'] . '</a>';
 
                /** This filter is documented in wp-includes/post-template.php */
                $output .= apply_filters( 'wp_link_pages_link', $link, $next );
            }
            $output .= $parsed_args['after'];
        }
    }
 
    /**
     * Filters the HTML output of page links for paginated posts.
     *
     * @since 3.6.0
     *
     * @param string $output HTML output of paginated posts' page links.
     * @param array  $args   An array of arguments.
     */
    $html = apply_filters( 'wp_link_pages', $output, $args );
 
    if ( $parsed_args['echo'] ) {
        echo $html;
    }
    return $html;
}
?>