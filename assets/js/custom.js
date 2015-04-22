$(document).ready(function(e){

    $(".div_links").click(function(){
        $('.div_form').hide();
        var div_to_show = $(this).attr('data-id');
        $("#"+div_to_show).show();
    });

});
