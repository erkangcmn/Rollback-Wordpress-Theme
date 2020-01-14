

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
 
