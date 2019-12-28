

$(document).ready(function(){
    $(".govde_resim").hover(function(){
      $(this).parent().parent().children(".test").css({
        "-webkit-user-select": "none", 
        "-webkit-touch-callout": "none", 
        "-moz-user-select": "none", 
        "-ms-user-select": "none", 
        "user-select":"none",
        "visibility" : "visible",
        "transition" : ".3s linear",
        "opacity" : "1",
        "top" : "25px",
        "background-color":"rgba(0, 0, 0, 0.2)", 
        "padding":"2px",
        "padding-left":"4px",
        "padding-right":"4px",
        "color":"white"})
      }, function(){
      $(this).parent().parent().children(".test").css({
        "-webkit-user-select": "none", 
        "-webkit-touch-callout": "none", 
        "-moz-user-select": "none", 
        "-ms-user-select": "none", 
        "user-select":"none",
        "visibility" : "hidden", 
        "transition" : ".3s linear", 
        "opacity" : "0",
         "top" : "25px",

        })
        
    });
  });

  $(document).ready(function(){
    $(".govde_resim_buyuk").hover(function(){
      $(this).parent().parent().children(".test").css({
        "-webkit-user-select": "none", 
        "-webkit-touch-callout": "none", 
        "-moz-user-select": "none", 
        "-ms-user-select": "none", 
        "user-select":"none",
        "visibility" : "visible",
        "transition" : ".3s linear",
        "opacity" : "1",
        "top" : "25px",
        "background-color":"rgba(0, 0, 0, 0.2)", 
        "padding":"2px",
        "padding-left":"4px",
        "padding-right":"4px",
        "color":"white"})
      }, function(){
      $(this).parent().parent().children(".test").css({
        "-webkit-user-select": "none", 
        "-webkit-touch-callout": "none", 
        "-moz-user-select": "none", 
        "-ms-user-select": "none", 
        "user-select":"none",
        "visibility" : "hidden", 
        "transition" : ".3s linear", 
        "opacity" : "0",
         "top" : "25px",

        })
        
    });
  });

  $(document).ready(function(){
    $(".search__wrapper").click(function(){
      $(this).children(".search__icon").css({
        "position": "absolute",
        "top": "0",
        "right":"0",
        "height":"32px !important",
        "width":"40px !important",
        "background-color":"white",
        "color":"rgb(36, 33, 33)",
        "font-size":"1.35em",
        "text-align":"center",
        "border-color":"transparent",
        "border-radius":"50%",
        "pointer-events":"none",
        "display":"inline-block",
        "transition":"background-color 0.2s ease-in-out"})
      }, function(){
        $(this).children(".search__icon").css({
          "position": "absolute",
          "top": "0",
          "right":"0",
          "height":"32px !important",
          "width":"40px !important",
          "background-color":"white",
          "color":"rgb(36, 33, 33)",
          "font-size":"1.35em",
          "text-align":"center",
          "border-color":"transparent",
          "border-radius":"50%",
          "pointer-events":"none",
          "display":"inline-block",
          "transition":"background-color 0.2s ease-in-out"})
    });
  });
 
