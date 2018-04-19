$( document ).ready(function() {
    //console.log($('#id-nav-top').prop('scrollHeight'));
    //console.log($('#id-nav-top')[0].scrollHeight);

    $(document).on("scroll",function(){
        if($(document).scrollTop()>100){
            $("#id-nav-top").removeClass("large").addClass("small");
        } else{
            $("#id-nav-top").removeClass("small").addClass("large");
        }
    });
});