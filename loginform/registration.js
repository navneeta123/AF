$(document).ready(function() {
    $(".registration").hide();
    $(".login").hide();
    $(".btnregistration").click(function() {
        $(".registration").toggle();
    });
        $(".btnlogin").click(function() {
            $(".login").toggle();
          
    });
});