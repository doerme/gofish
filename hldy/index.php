<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>欢乐钓鱼</title>
    <meta name="flexible" content="initial-dpr=2,maximum-dpr=3" />
    <script>
      !function(a,b){function c(){var b=f.getBoundingClientRect().width;b/i>540&&(b=540*i);var c=b/10;f.style.fontSize=c+"px",k.rem=a.rem=c}var d,e=a.document,f=e.documentElement,g=e.querySelector('meta[name="viewport"]'),h=e.querySelector('meta[name="flexible"]'),i=0,j=0,k=b.flexible||(b.flexible={});if(g){console.warn("将根据已有的meta标签来设置缩放比例");var l=g.getAttribute("content").match(/initial\-scale=([\d\.]+)/);l&&(j=parseFloat(l[1]),i=parseInt(1/j))}else if(h){var m=h.getAttribute("content");if(m){var n=m.match(/initial\-dpr=([\d\.]+)/),o=m.match(/maximum\-dpr=([\d\.]+)/);n&&(i=parseFloat(n[1]),j=parseFloat((1/i).toFixed(2))),o&&(i=parseFloat(o[1]),j=parseFloat((1/i).toFixed(2)))}}if(!i&&!j){var p=(a.navigator.appVersion.match(/android/gi),a.navigator.appVersion.match(/iphone/gi)),q=a.devicePixelRatio;i=p?q>=3&&(!i||i>=3)?3:q>=2&&(!i||i>=2)?2:1:1,j=1/i}if(f.setAttribute("data-dpr",i),!g)if(g=e.createElement("meta"),g.setAttribute("name","viewport"),g.setAttribute("content","initial-scale="+j+", maximum-scale="+j+", minimum-scale="+j+", user-scalable=no"),f.firstElementChild)f.firstElementChild.appendChild(g);else{var r=e.createElement("div");r.appendChild(g),e.write(r.innerHTML)}a.addEventListener("resize",function(){clearTimeout(d),d=setTimeout(c,300)},!1),a.addEventListener("pageshow",function(a){a.persisted&&(clearTimeout(d),d=setTimeout(c,300))},!1),"complete"===e.readyState?e.body.style.fontSize=12*i+"px":e.addEventListener("DOMContentLoaded",function(){e.body.style.fontSize=12*i+"px"},!1),c(),k.dpr=a.dpr=i,k.refreshRem=c,k.rem2px=function(a){var b=parseFloat(a)*this.rem;return"string"==typeof a&&a.match(/rem$/)&&(b+="px"),b},k.px2rem=function(a){var b=parseFloat(a)/this.rem;return"string"==typeof a&&a.match(/px$/)&&(b+="rem"),b}}(window,window.lib||(window.lib={}));
    </script>
    <script src="/mex/fish/js/sound.js?v=102"></script>
    <script>
      var soundID = "Thunder";
      function loadSound () {
        createjs.Sound.registerSound("/mex/fish/coin_music.wav", soundID);
      }
    </script>
  <link href="/mex/fish/css/app.css?v=84" rel="stylesheet"></head>
  <style>
    .page-main {
      -webkit-transform: translate3d(0, 0, 0);
      -moz-transform: translate3d(0, 0, 0);
      -ms-transform: translate3d(0, 0, 0);
      transform: translate3d(0, 0, 0);
    }
  </style>
  <body class="" onload="loadSound();">
    <img src="/mex/fish/img/logo.png" style="display:none;" alt="">
    <div class="loading-page">
      <div class="loading-bg">
        <p></p>   
      </div>     
    </div>
    <div id="app"></div>
    <div style="display:none;">
      <img src="/mex/fish/img/yu-5-3.png" >
      <img src="/mex/fish/img/baoxiang.png" >            
      <img src="/mex/fish/img/chugan.png" >              
      <img src="/mex/fish/img/num-6.png" >               
      <img src="/mex/fish/img/yu-2-2.png" >              
      <img src="/mex/fish/img/yu-6-2.png" >              
      <img src="/mex/fish/img/yu-8-3.png" >
      <img src="/mex/fish/img/bg-2.png" >
      <img src="/mex/fish/img/dialog-box.png" >          
      <img src="/mex/fish/img/num-8.png" >              
      <img src="/mex/fish/img/yu-3.png" >                
      <img src="/mex/fish/img/yu-6-3.png" >              
      <img src="/mex/fish/img/yu-8.png" >
      <img src="/mex/fish/img/bg.png" >                  
      <img src="/mex/fish/img/guanxian-1.png" >          
      <img src="/mex/fish/img/num-9.png" >               
      <img src="/mex/fish/img/yu-4-2.png" >              
      <img src="/mex/fish/img/yu-6.png" >
      <img src="/mex/fish/img/bizhikuang.png" >          
      <img src="/mex/fish/img/loading-bg.png" >          
      <img src="/mex/fish/img/rule-butn.png" >          
      <img src="/mex/fish/img/yu-4.png" >                
      <img src="/mex/fish/img/yu-7-2.png" >
      <img src="/mex/fish/img/butn-rule-home.png" >      
      <img src="/mex/fish/img/muban.png" >               
      <img src="/mex/fish/img/rule.jpg" >                
      <img src="/mex/fish/img/yu-5-2.png" >              
      <img src="/mex/fish/img/yu-7-3.png" >
      <img src="/mex/fish/img/butn-tuoguan.png" >        
      <img src="/mex/fish/img/num-0.png" >               
      <img src="/mex/fish/img/tuoguan.png" >             
      <img src="/mex/fish/img/yu-5-3.png" >              
      <img src="/mex/fish/img/yu-7.png" >
      <img src="/mex/fish/img/chugan-bg.png" >           
      <img src="/mex/fish/img/num-3.png" >               
      <img src="/mex/fish/img/yu-1-2.png" >              
      <img src="/mex/fish/img/yu-5.png" >                
      <img src="/mex/fish/img/yu-8-2.png" >
    </div>
    <!-- built files will be auto injected -->
  <!-- <script type="text/javascript" src="/caishen/js/zepto.min.js?v=111"></script>
  <script type="text/javascript" src="/caishen/js/caishen.js?v=129"></script> -->
  <script src="//cbd.tcpan.com/cdn/caishen/js/zepto.min.js"></script>
  <script src="//zjshop.tcpan.com/mex/caishen/caishen.js"></script>
  <script type="text/javascript" src="/mex/fish/js/vendor.js?v=135"></script>
  <script type="text/javascript" src="/mex/fish/js/app.js?v=135"></script>  
  </body>
</html>
