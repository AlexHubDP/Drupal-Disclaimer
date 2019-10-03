(function ($, Drupal, Bootstrap, Attributes) {
  'use strict';

    function setCookie(cname, cvalue, exdays) {
      var d = new Date();
      d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
      var expires = "expires="+d.toUTCString();
      document.cookie = cname + "=" + cvalue + ";" + expires + ";path=" + window.location.pathname;
    }

    function getCookie(cname) {
      var name = cname + "=";
      var ca = document.cookie.split(';');
      for(var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
          c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
          return c.substring(name.length, c.length);
        }
      }
      return "";
    }

    $(window).on('load',function(){
      if ($('#node-id-value').attr('data-node-id') != getCookie('disc_accepted')){
        $('#exampleModal').modal({backdrop: 'static', keyboard: false});
      }
    });
    
    $(document).on('click', '#acceptBtn', function () {
      setCookie('disc_accepted', $('#node-id-value').attr('data-node-id'), 365);
      $('#exampleModal').modal('hide');
    });
    
    $(document).on('click', '#declineBtn', function () {
      window.location = '/'
    });
    
})(window.jQuery, window.Drupal, window.Drupal.bootstrap, window.Attributes);
