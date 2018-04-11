
$(function () {
    $(document).ready(function (e) {
        $(".maps .block-map").click(function () {
            $(this).hide();
        });

        $(".maps").mouseenter(function () {
            $(".maps .block-map").show();
        });

    });


});

  /* SEARCH ACTION */
  $(document).on('click', '#search-box', function(){
    $('.search-box').css('display', 'flex');
    $("#search").focus();
  });

  $(document).on('click', '#close-search', function(){
    $('.search-box').removeAttr('style');
  });

  $(window).scroll(function() {
    
    if($(this).scrollTop() < 600) {
      $('#btn-top').fadeOut();
    }

    if($(this).scrollTop() > 600){
      $('#btn-top').fadeIn();
    }
    
  });


(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v2.6&appId=238034926269899";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));