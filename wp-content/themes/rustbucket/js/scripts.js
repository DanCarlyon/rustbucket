$(document).ready(function(){
    if($('body').hasClass('bbpress')) {
        $('form').find('#bbp_search').attr('placeholder','Search').css('padding-left','10px');
     };

});