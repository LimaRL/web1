$(document).ready(function () {
    if ($(document).width() > 480) {
        $(document).on("scroll", function () {
            if ($(document).scrollTop() > 100) {
                $("#id-nav-top").removeClass("large").addClass("small");
            } else {
                $("#id-nav-top").removeClass("small").addClass("large");
            }

        });
    } else {
        $("#id-nav-top").removeClass("large").addClass("nav-mobile");
    }

    $("#btn-call-menu-mobile").click(
        function() {
            $("#btn-call-menu-mobile").fadeOut();
            $(".menu-mobile").fadeIn();
            setTimeout(
                $(".menu-mobile ul").animate({"left":"0px"}, "slow"), 
                5000);
            $("body").css("overflow-y", "hidden");
        }
    );

    $("#btn-close-menu-mobile").click(
        function() {
            closeMenuMobile();
        }
    );

    $(".menu-mobile .menu-top-item a").click(
        function(){
        closeMenuMobile();
        }
    );

    var closeMenuMobile = function(){
        $(".menu-mobile ul").animate({"left":"-480px"}, "slow"), 
            setTimeout(
        $(".menu-mobile").fadeOut(),
        5000);
        $("#btn-call-menu-mobile").fadeIn();
        $("body").css("overflow-y", "auto");
    }
              
});