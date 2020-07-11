;(function ( $, window, document, undefined ) {
  $.fn.trafficPop = function(options) {
    var defaults = {
      timeout: 3,           
      timer: true,          
      wait: 10,             
      trigger: '.show-pop'  
    };
    
    var options = $.extend(defaults, options),
      content = $(this).html(),
      bot = '',
      timer
    $(this).remove();
    
    setTimeout(c, (options.timeout * 1000));
    $(options.trigger).on('click', function(e) {
      c(false);
    });
    function c(check) {
      if((($.cookie('vhome') === undefined || $.cookie('vhome') !== '1') || check === false) && $('#overlay').length === 0) {
        
        function pos() {
          var l = ($('#overlay').width() - $('#pop').width()) / 2;
          var t = ($('#overlay').height() - $('#pop').height()) / 2;
          $('#pop').css({'left':l+'px','top':t+'px'});
        }
        function close() {
          o.remove();
          p.remove();
          $.cookie('vhome', 1);
          clearInterval(timer);
        }
        if(options.timer && options.timer !== undefined) {
          bot = '<div class="bot">hoặc chờ <span id="pop-time">'+options.wait+'</span> giây</div>';
        }
        $('body').prepend('<div id="overlay"><div id="pop">'+content+bot+'</div></div>');
        var o = $('#overlay'), p = $('#pop');
        pos();
        $(window).resize(function() {
          pos();
        });
        if(options.timer && options.timer !== undefined) {
          var seconds = options.wait;
          timer = setInterval(function() {
            $('#pop-time', $('#pop')).text(seconds);
            if (seconds == 0) {
              close();
            }
            seconds--;
          }, 1000);
        } else {
          $('.title', p).append('<a href="#" class="fclose"></a>');
          $(document).keyup(function(e) {
            if (e.keyCode == 27) { close(); }
          });
          o.on('click', function() {
            close();
          });
          p.on('click', function(e) {
            e.stopPropagation();
          });
          $('.fclose', p).on('click', function(e) {
            e.preventDefault();
            close();
          });
        }
      }
    }
  };
})(jQuery, window, document);

(function(factory){if(typeof define==='function'&&define.amd){define(['jquery'],factory)}else{factory(jQuery)}}(function($){var pluses=/\+/g;function raw(s){return s}function decoded(s){return decodeURIComponent(s.replace(pluses,' '))}function converted(s){if(s.indexOf('"')===0){s=s.slice(1,-1).replace(/\\"/g,'"').replace(/\\\\/g,'\\')}try{return config.json?JSON.parse(s):s}catch(er){}}var config=$.cookie=function(key,value,options){if(value!==undefined){options=$.extend({},config.defaults,options);if(typeof options.expires==='number'){var days=options.expires,t=options.expires=new Date();t.setDate(t.getDate()+days)}value=config.json?JSON.stringify(value):String(value);return(document.cookie=[config.raw?key:encodeURIComponent(key),'=',config.raw?value:encodeURIComponent(value),options.expires?'; expires='+options.expires.toUTCString():'',options.path?'; path='+options.path:'',options.domain?'; domain='+options.domain:'',options.secure?'; secure':''].join(''))}var decode=config.raw?raw:decoded;var cookies=document.cookie.split('; ');var result=key?undefined:{};for(var i=0,l=cookies.length;i<l;i++){var parts=cookies[i].split('=');var name=decode(parts.shift());var cookie=decode(parts.join('='));if(key&&key===name){result=converted(cookie);break}if(!key){result[name]=converted(cookie)}}return result};config.defaults={};$.removeCookie=function(key,options){if($.cookie(key)!==undefined){$.cookie(key,'',$.extend(options,{expires:-1}));return true}return false}}));