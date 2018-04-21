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
            $("#btn-call-menu-mobile").toggle(
                function () {
                    $(this).addClass("selected");
                }, function () {
                    $(this).removeClass("selected");
                }
            );
        }
    );
});