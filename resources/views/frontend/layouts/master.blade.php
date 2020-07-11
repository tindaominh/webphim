<!DOCTYPE html><html lang="vi">
<head>
    @include('frontend.layouts.head')
</head>

<body>
    <div id="header"> 
		<div class="container"> 
			<div class="row">
				<div class="col-lg-2 col-md-2 col-sm-3 col-xs-6"> <h1 id="logo"><a href="/" title="Xem phim online"></a></h1></div> 
				<div id="search" class="col-lg-6 col-md-6 col-sm-5 col-xs-6"> 
					<form method="post" onsubmit="return false;" action="" class="style2" id="form-search">
						<i class="icon"></i> 
						<input type="text" name="keyword" class="input keyword" placeholder="Tìm kiếm">
						<input type="submit" class="submit" value="">
					</form> 
					<ul class="autocomplete-list"></ul>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
					<div id="signing">
						<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8" style="padding: 0px;">
							<a href="/account/register" rel="nofollow" class="signup">Đăng ký</a>
							<a href="/account/login" rel="nofollow" class="signin">Đăng nhập</a>
						</div>
					</div>
					<!-- <div class="fb-login-button" data-max-rows="1" data-size="medium" 
					data-button-type="login_with" data-show-faces="false" data-auto-logout-link="false" data-use-continue-as="false"  onlogin="checkLoginState();">

					</div> -->
				</div> 
			</div> 
		</div>
	</div>
	<!---Use Cache phimletv-aside---->
	<div id="menu"> 
    <div class="container"> 
	    <ul> 
			<li class="item"> <a href="javascript:;">Thể loại</a> 
			    <ul class="sub"> 
					<li><a href="https://24hphim.com/the-loai/phim-hanh-dong/" title="Hành Động">Hành Động</a></li> 
					<li><a href="https://24hphim.com/the-loai/phim-hai-huoc/" title="Hài Hước">Hài Hước</a></li> 
					<li><a href="https://24hphim.com/the-loai/phim-phieu-luu/" title="Phiêu Lưu">Phiêu Lưu</a></li> 
					<li><a href="https://24hphim.com/the-loai/phim-kinh-di/" title="Kinh Dị">Kinh Dị</a></li> 
					<li><a href="https://24hphim.com/the-loai/phim-vien-tuong/" title="Viễn Tưởng">Viễn Tưởng</a></li> 
					<li><a href="https://24hphim.com/the-loai/phim-hoat-hinh/" title="Hoạt Hình">Hoạt Hình</a></li> 
					<li><a href="https://24hphim.com/the-loai/phim-tam-ly/" title="Tâm Lý">Tâm Lý</a></li> 
					<li><a href="https://24hphim.com/the-loai/phim-tinh-cam-lang-man/" title="Tình Cảm">Tình Cảm</a></li>
					<li><a href="https://24hphim.com/the-loai/phim-chien-tranh/" title="Chiến Tranh">Chiến Tranh</a></li> 
					<li><a href="https://24hphim.com/the-loai/phim-toi-pham-hinh-su/" title="Tội Phạm Hình Sự">Tội Phạm Hình Sự</a></li> 
					<li><a href="https://24hphim.com/the-loai/phim-bi-an/" title="Bí Ẩn">Bí Ẩn</a></li> 
					<li><a href="https://24hphim.com/the-loai/phim-vo-thuat/" title="Võ Thuật">Võ Thuật</a></li> 
					<li><a href="https://24hphim.com/the-loai/phim-lich-su-tieu-su/" title="Lịch Sử Tiểu Sử">Lịch Sử Tiểu Sử</a></li> 
					<li><a href="https://24hphim.com/the-loai/phim-hoi-hop-gay-can/" title="Hồi Hộp Gây Cấn">Hồi Hộp Gây Cấn</a></li> 
					<li><a href="https://24hphim.com/the-loai/phim-co-trang/" title="Cổ Trang">Cổ Trang</a></li> 
					<li><a href="https://24hphim.com/the-loai/phim-gia-dinh/" title="Gia Đình">Gia Đình</a></li> 
					<li><a href="https://24hphim.com/the-loai/phim-tai-lieu/" title="Tài Liệu">Tài Liệu</a></li> 
					<li><a href="https://24hphim.com/the-loai/phim-18/" title="18+">18+</a></li> </ul> </li> 
					<li class="item"> <a href="javascript:;">Quốc gia</a> 
						<ul class="sub"> 
							<li><a href="https://24hphim.com/quoc-gia/us/" title="Mỹ">Mỹ</a></li>
							<li><a href="https://24hphim.com/quoc-gia/uk/" title="Anh">Anh</a></li>
							<li><a href="https://24hphim.com/quoc-gia/fr/" title="Pháp">Pháp</a></li>
							<li><a href="https://24hphim.com/quoc-gia/jp/" title="Nhật Bản">Nhật Bản</a></li>
							<li><a href="https://24hphim.com/quoc-gia/kr/" title="Hàn Quốc">Hàn Quốc</a></li>
							<li><a href="https://24hphim.com/quoc-gia/cn/" title="Trung Quốc">Trung Quốc</a></li>
							<li><a href="https://24hphim.com/quoc-gia/hk/" title="Hồng Kông">Hồng Kông</a></li>
							<li><a href="https://24hphim.com/quoc-gia/th/" title="Thái Lan">Thái Lan</a></li>
							<li><a href="https://24hphim.com/quoc-gia/vn/" title="Việt Nam">Việt Nam</a></li>
							<li><a href="https://24hphim.com/quoc-gia/khac/" title="Quốc Gia Khác">Quốc Gia Khác</a></li>
						</ul> 
					</li> 
					<li class="item"> <a href="https://24hphim.com/phim-le/" title="Phim lẻ">Phim lẻ</a> 
						<ul class="sub" style="width: 130px;"> 
							<li><a href="https://24hphim.com/phim-le/2020/" title="Phim lẻ 2020">Phim lẻ 2020</a></li> 
							<li><a href="https://24hphim.com/phim-le/2019/" title="Phim lẻ 2019">Phim lẻ 2019</a></li> 
							<li><a href="https://24hphim.com/phim-le/2018/" title="Phim lẻ 2018">Phim lẻ 2018</a></li> 
							<li><a href="https://24hphim.com/phim-le/2017/" title="Phim lẻ 2017">Phim lẻ 2017</a></li> 
							<li><a href="https://24hphim.com/phim-le/2016/" title="Phim lẻ 2016">Phim lẻ 2016</a></li> 
							<li><a href="https://24hphim.com/phim-le/2015/" title="Phim lẻ 2015">Phim lẻ 2015</a></li> 
							<li><a href="https://24hphim.com/phim-le/2014/" title="Phim lẻ 2014">Phim lẻ 2014</a></li> 
							<li><a href="https://24hphim.com/phim-le/2013/" title="Phim lẻ 2013">Phim lẻ 2013</a></li> 
							<li><a href="https://24hphim.com/phim-le/2012/" title="Phim lẻ 2012">Phim lẻ 2012</a></li> 
						</ul> 
					</li> 
					<li class="item"> <a href="https://24hphim.com/phim-bo/" title="Phim bộ">Phim bộ</a> 
						<ul class="sub" style="width: 130px;">
							<li><a href="https://24hphim.com/phim-bo/2020/" title="Phim bộ 2020">Phim bộ 2020</a></li> 
							<li><a href="https://24hphim.com/phim-bo/2019/" title="Phim bộ 2019">Phim bộ 2019</a></li> 
							<li><a href="https://24hphim.com/phim-bo/2018/" title="Phim bộ 2018">Phim bộ 2018</a></li> 
							<li><a href="https://24hphim.com/phim-bo/2017/" title="Phim bộ 2017">Phim bộ 2017</a></li> 
							<li><a href="https://24hphim.com/phim-bo/2016/" title="Phim bộ 2016">Phim bộ 2016</a></li> 
							<li><a href="https://24hphim.com/phim-bo/2015/" title="Phim bộ 2015">Phim bộ 2015</a></li> 
							<li><a href="https://24hphim.com/phim-bo/2014/" title="Phim bộ 2014">Phim bộ 2014</a></li> 
							<li><a href="https://24hphim.com/phim-bo/2013/" title="Phim bộ 2013">Phim bộ 2013</a></li> 
							<li><a href="https://24hphim.com/phim-bo/2012/" title="Phim bộ 2012">Phim bộ 2012</a></li> 
						</ul> 
					</li> 
					<li class="item"> <a href="https://24hphim.com/phim-chieu-rap/" title="Phim chiếu rạp">Phim chiếu rạp</a> 
						<ul class="sub" style="width: 170px;">
							<li><a href="https://24hphim.com/phim-chieu-rap/2020/" title="Phim chiếu rạp 2020">Phim chiếu rạp 2020</a></li> 
							<li><a href="https://24hphim.com/phim-chieu-rap/2019/" title="Phim chiếu rạp 2019">Phim chiếu rạp 2019</a></li> 
							<li><a href="https://24hphim.com/phim-chieu-rap/2018/" title="Phim chiếu rạp 2018">Phim chiếu rạp 2018</a></li> 
							<li><a href="https://24hphim.com/phim-chieu-rap/2017/" title="Phim chiếu rạp 2017">Phim chiếu rạp 2017</a></li> 
							<li><a href="https://24hphim.com/phim-chieu-rap/2016/" title="Phim chiếu rạp 2016">Phim chiếu rạp 2016</a></li> 
							<li><a href="https://24hphim.com/phim-chieu-rap/2015/" title="Phim chiếu rạp 2015">Phim chiếu rạp 2015</a></li> 
							<li><a href="https://24hphim.com/phim-chieu-rap/2014/" title="Phim chiếu rạp 2014">Phim chiếu rạp 2014</a></li> 
							<li><a href="https://24hphim.com/phim-chieu-rap/2013/" title="Phim chiếu rạp 2013">Phim chiếu rạp 2013</a></li> 
							<li><a href="https://24hphim.com/phim-chieu-rap/2012/" title="Phim chiếu rạp 2012">Phim chiếu rạp 2012</a></li>  
						</ul> 
					</li> 
					<li class="item"> <a href="phim-moi/" title="Phim mới">Phim mới</a> 
						<ul class="sub" style="width: 130px;">
							<li><a href="https://24hphim.com/phim-2020/" title="Phim năm 2020">Phim 2020</a></li> 
							<li><a href="https://24hphim.com/phim-2019/" title="Phim năm 2019">Phim 2019</a></li> 
							<li><a href="https://24hphim.com/phim-2018/" title="Phim năm 2018">Phim 2018</a></li> 
							<li><a href="https://24hphim.com/phim-2017/" title="Phim năm 2017">Phim 2017</a></li> 
							<li><a href="https://24hphim.com/phim-2016/" title="Phim năm 2016">Phim 2016</a></li> 
							<li><a href="https://24hphim.com/phim-2015/" title="Phim năm 2015">Phim 2015</a></li> 
							<li><a href="https://24hphim.com/phim-2014/" title="Phim năm 2014">Phim 2014</a></li> 
							<li><a href="https://24hphim.com/phim-2013/" title="Phim năm 2013">Phim 2013</a></li> 
							<li><a href="https://24hphim.com/phim-2012/" title="Phim năm 2012">Phim 2012</a></li>  
						</ul> 
					</li> 
					<li class="item"> <a href="the-loai/phim-18/" title="Phim 18+">Phim 18+</a></li>
				</ul> 
			</div> 
		</div>
		<!---/End Use Cache phimletv-aside----><!-- URI:: / -->        
        
        @yield('content')

		<!-- URI:: / --><!-- cacheVT /-->
		
        @include('frontend.layouts.footer')
        
	</div>
</div>

<div class="ad_location desktop hidden-sm hidden-xs"> </div>
<div class="ad_location mobile hidden-lg hidden-md">
</div>

<div data-type="left" class="ad_location floating desktop hidden-sm hidden-xs hidden"> </div>
<div data-type="right" class="ad_location floating desktop hidden-sm hidden-xs hidden"></div>
<div id="fxloading" style="display: none;"></div>
<div class="overlay" style="display: none;"></div>

<input type="hidden" value="http://24hphim.com/" name="currentUrl" id="currentUrl">
<script>
	function statusChangeCallback(response) {
    if (response.status === 'connected') {
		var auth = response.authResponse
      window.location =`https://24hphim.com/login/facebook_oauth.php?fb_login=true&fb_id=${auth.userID}&token=${auth.accessToken}`;
    }
  }

  function checkLoginState() {
    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });
  }
</script>
<!--
* PhimLe.Tv (v2 @2015) - that powered by TJj (dragonit09)
* Layout rip from Phim3s and Developed.
-->
<!-- Giữa cuối màn hình (Catfish PC) -->
<script type="text/javascript">
function hide_catfish() {
    var content = document.getElementById('catfish_content');
    var hide = document.getElementById('hide_catfish');
    if (content.style.display == "none")
    {content.style.display = "block"; hide.innerHTML = '<a href="javascript:hide_catfish()">Tắt ở đây [X]</a>'; }
        else { content.style.display = "none"; hide.innerHTML = '<a href="javascript:hide_catfish()">Mở lên xem lại...</a>';
    }
    }
</script>

<style>
	.float-ck { position: fixed; bottom: 0px; z-index: 9000}
	* html .float-ck {
		position:absolute;
		bottom:auto;
		top:expression(eval (document.documentElement.scrollTop+document.docum entElement.clientHeight-this.offsetHeight-(parseInt(this.currentStyle.marginTop,10)||0)-(parseInt(this.currentStyle.marginBottom,10)||0))) ;
	}
	/*#catfish_content {border: 1px solid #00665d;}*/
	#hide_catfish {
		text-align:center; font-size: 11px;
	}
	#hide_catfish a { 
		background: #00665d; padding: 3px 119px; color: #FFF;
	}
</style>

<!-- <div class="float-ck" style="text-align:center; width: 100%;">
	<div id="hide_catfish"><a href="javascript:hide_catfish()">Tắt ở đây [X]</a></div>
	<div id="catfish_content">
		<a href="http://bit.ly/24hphim-bongdax-xoso" target="_blank"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" class="atesvnseo" data-src="images/ads-20-06-18/728x90-xoso1.gif"></a></br>
		<a href="https://bit.ly/2Ycnyrh" target="_blank"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" class="atesvnseo" data-src="/vtseo/images/20-07-02/728x90.gif"></a>
	</div>
</div> -->
<!-- Giữa cuối màn hình (Catfish PC) -->



<!-- Trái và phải màn hình -->
<!-- Trái -->
<!-- <script type="text/javascript">
	function hide_float_left() {
		var content = document.getElementById('float_content_left');
		var hide = document.getElementById('hide_float_left');
		if (content.style.display == "none")
		{
			content.style.display = "block"; hide.innerHTML = '<a href="javascript:hide_float_left()">Tắt ở đây [X]</a>'; 
		}
		else { 
			content.style.display = "none"; hide.innerHTML = '<a href="javascript:hide_float_left()">Mở lên xem lại...</a>';
		}
	}
</script> -->

<!-- <style>
.float-ck { position: fixed; bottom: 0px; z-index: 9000}
* html .float-ck {position:absolute;bottom:auto;top:expression(eval (document.documentElement.scrollTop+document.docum entElement.clientHeight-this.offsetHeight-(parseInt(this.currentStyle.marginTop,10)||0)-(parseInt(this.currentStyle.marginBottom,10)||0))) ;}
#float_content_left {border: 1px solid #00665d;}
#hide_float_left {text-align:left; font-size: 11px;}
#hide_float_left a {background: #00665d; padding: 3px 118px; color: #FFF;}
</style> -->

<!-- <div class="float-ck" style="left: 0px">
	<div id="hide_float_left">
		<a href="javascript:hide_float_left()">Tắt ở đây [X]</a>
	</div>
	<div id="float_content_left">
		<a href="https://bit.ly/24hphim-bongdax-ketqua" target="_blank"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" class="atesvnseo" data-src="/vtseo/images/ketqua-300x250.gif"></a>
	</div>
</div> -->
<!-- Trái -->

<!-- Phải -->
<!-- <script type="text/javascript">
function hide_float_right() {
    var content = document.getElementById('float_content_right');
    var hide = document.getElementById('hide_float_right');
    if (content.style.display == "none")
    {content.style.display = "block"; hide.innerHTML = '<a href="javascript:hide_float_right()">Tắt ở đây [X]</a>'; }
        else { content.style.display = "none"; hide.innerHTML = '<a href="javascript:hide_float_right()">Mở lên xem lại...</a>';
    }
    }
</script>
<style>
.float-ck { position: fixed; bottom: 0px; z-index: 9000}
* html .float-ck {position:absolute;bottom:auto;top:expression(eval (document.documentElement.scrollTop+document.docum entElement.clientHeight-this.offsetHeight-(parseInt(this.currentStyle.marginTop,10)||0)-(parseInt(this.currentStyle.marginBottom,10)||0))) ;}
#float_content_right {border: 1px solid #00665d;}
#hide_float_right {text-align:right; font-size: 11px;}
#hide_float_right a {background: #00665d; padding: 3px 119px; color: #FFF;}
</style>
<div class="float-ck" style="right: 0px">
<div id="hide_float_right">
<a href="javascript:hide_float_right()">Tắt ở đây [X]</a>
</div>
<div id="float_content_right">
<a href="https://bit.ly/24hphim-vbis-balloon-right-v1" target="blank"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" class="atesvnseo" data-src="players/ads/images/300x250-8live.gif?v2"/></a>
</div>
</div> -->
<!-- Phải -->
<!-- Trái và phải màn hình -->



<!-- 120x600 (Float) -->

	<!-- <div id="divAdRight" style="display: block; position: absolute;  z-index: 1e+19; left: 286.5px;">
		<a href="https://bit.ly/24hphim-bongdax-tructiep" target="_blank"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" class="atesvnseo" data-src="/vtseo/images/bongda-120x300.gif"></a>
    </div>
    
	<div id="divAdLeft" style="display: block; position: absolute; z-index: 1e+19; left: 1486.5px;">
		<a href="https://bit.ly/24hphim-bongdax-tructiep" target="_blank"><img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" class="atesvnseo" data-src="/vtseo/images/bongda-120x300.gif"></a>
    </div>
    <script>
        function FloatTopDiv()
        {
            startLX = ((document.body.clientWidth -MainContentW)/2)-LeftBannerW-LeftAdjust , startLY = TopAdjust+80;
            startRX = ((document.body.clientWidth -MainContentW)/2)+MainContentW+RightAdjust , startRY = TopAdjust+80;
            var d = document;
            function ml(id)
            {
                var el=d.getElementById?d.getElementById(id):d.all?d.all[id]:d.layers[id];
                el.sP=function(x,y){this.style.left=x + 'px';this.style.top=y + 'px';};
                el.x = startRX;
                el.y = startRY;
                return el;
            }
            function m2(id)
            {
                var e2=d.getElementById?d.getElementById(id):d.all?d.all[id]:d.layers[id];
                e2.sP=function(x,y){this.style.left=x + 'px';this.style.top=y + 'px';};
                e2.x = startLX;
                e2.y = startLY;
                return e2;
            }
            window.stayTopLeft=function()
            {
                if (document.documentElement && document.documentElement.scrollTop)
                    var pY =  document.documentElement.scrollTop;
                else if (document.body)
                    var pY =  document.body.scrollTop;
                if (document.body.scrollTop > 30){startLY = 3;startRY = 3;} else {startLY = TopAdjust;startRY = TopAdjust;};
                ftlObj.y += (pY+startRY-ftlObj.y)/16;
                ftlObj.sP(ftlObj.x, ftlObj.y);
                ftlObj2.y += (pY+startLY-ftlObj2.y)/16;
                ftlObj2.sP(ftlObj2.x, ftlObj2.y);
                setTimeout("stayTopLeft()", 1);
            }
            ftlObj = ml("divAdRight");
            //stayTopLeft();
            ftlObj2 = m2("divAdLeft");
            stayTopLeft();
        }
        function ShowAdDiv()
        {
            var objAdDivRight = document.getElementById("divAdRight");
            var objAdDivLeft = document.getElementById("divAdLeft");       
            if (document.body.clientWidth < 1000)
            {
                objAdDivRight.style.display = "none";
                objAdDivLeft.style.display = "none";
            }
            else
            {
                objAdDivRight.style.display = "block";
                objAdDivLeft.style.display = "block";
                FloatTopDiv();
            }
        } 
    </script> -->
    <!--<script>
    document.write("<script type='text/javascript' language='javascript'>MainContentW =1000;LeftBannerW = 130;RightBannerW = 130;LeftAdjust = 35;RightAdjust = 35;TopAdjust = 50;ShowAdDiv();window.onresize=ShowAdDiv;;<\/script>");
	</script>-->
	
<!-- <script type='text/javascript'>MainContentW=1000;LeftBannerW=130;RightBannerW=130;LeftAdjust=35;RightAdjust=35;TopAdjust=50;ShowAdDiv();window.onresize=ShowAdDiv;</script> -->


<!-- 120x600 (Float) -->



<!-- PC Preload -->
<style>
	#overlay,#pop{
		display:block;position:fixed
	}
	.ad_top_banner{
		margin:0 auto;width:100%;padding-bottom:10px
	}
	#overlay{
		z-index:99999;top:0;left:0;width:100%;height:100%;background:rgba(0,0,0,.5)
	}
	#pop{
		z-index:9999;/*width:32%*/;min-width:300px;height:auto;border:.5em solid rgba(0,0,0,.6);border-radius:.5em;background:#fff;font-family:Helvetica,Arial,'DejaVu Sans','Liberation Sans',Freesans,sans-serif;font-size:1em;text-align:left}#pop .title{margin:0;padding:10px;font-weight:400;font-size:1.2em;color:#333}#pop .mid{background:#e8f2fc;border-top:.1em solid;border-bottom:.1em solid;border-color:#c7ddf8;padding:.8em;margin-bottom:.8em}#pop .bot{padding:0 .8em .8em;text-align:right;font-size:.8em;color:#666}#pop .fclose{float:right;display:inline-block;box-sizing:content-box;width:.75em;height:.75em;position:relative;border:none;-webkit-border-radius:1em;border-radius:1em;font:400 3em/normal Arial,Helvetica,sans-serif;color:rgba(0,0,0,1);-o-text-overflow:clip;text-overflow:clip;background:#1abc9c;-webkit-transform:rotateZ(471.54426539266757deg);transform:rotateZ(471.54426539266757deg)}#pop .fclose:hover{background:rgba(247,0,0,1);-webkit-transition:background 350ms cubic-bezier(.42,0,.58,1) 10ms,all .2s cubic-bezier(.42,0,.58,1) 10ms;-moz-transition:background 350ms cubic-bezier(.42,0,.58,1) 10ms,all .2s cubic-bezier(.42,0,.58,1) 10ms;-o-transition:background 350ms cubic-bezier(.42,0,.58,1) 10ms,all .2s cubic-bezier(.42,0,.58,1) 10ms;transition:background 350ms cubic-bezier(.42,0,.58,1) 10ms,all .2s cubic-bezier(.42,0,.58,1) 10ms;-webkit-transform:rotateX(-1.7188733853924696deg) rotateZ(19.48056503444799deg);transform:rotateX(-1.7188733853924696deg) rotateZ(19.48056503444799deg)}#pop .fclose:active{background:#1abc9c;-webkit-box-shadow:2px 2px 9px 1px rgba(0,0,0,.5) inset;box-shadow:2px 2px 9px 1px rgba(0,0,0,.5) inset;-webkit-transition:none;-moz-transition:none;-o-transition:none;transition:none;-webkit-transform:rotateZ(471.54426539266757deg);transform:rotateZ(471.54426539266757deg)}#pop .fclose::after,#pop .fclose::before{display:inline-block;width:.45em;height:.1em;position:absolute;content:"";top:.33em;left:.155em;border:none;font:400 100%/normal Arial,Helvetica,sans-serif;color:rgba(0,0,0,1);-o-text-overflow:clip;text-overflow:clip;background:#fff;text-shadow:none}#pop .fclose::before{box-sizing:content-box;-webkit-transform:rotateZ(24.064227395494576deg);transform:rotateZ(24.064227395494576deg)}#pop .fclose::after{-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box;-webkit-transform:rotateZ(-66.46310423517549deg);transform:rotateZ(-66.46310423517549deg)
	}
</style>

<!-- <div id="Preload_Home"><span class="title"></span>
<div class="mid"><a href="https://bit.ly/24hphim-bongdax-keonhacai" target="_blank"><img src="/vtseo/images/preload-soi-keo.gif" class="atesvnseo" data-src="/vtseo/images/preload-soi-keo.gif" data-loaded="true"></a></div>
</div>
<script src="https://24hphim.com/ads/js/popup.js" type="text/javascript"></script>
<script type="text/javascript">
$(function() {
  $('#Preload_Home').trafficPop({
    timeout: 2,   
    timer: false,  
    wait: 8,     
    trigger: '.show-pop'  
  });
});
</script> -->

<!-- PC Preload -->
<!-- <script>var t_pass_all_0x1558=['w65qwoTDpcKuCMKlw6M5w6zCpcKrwpPDtCjCiw09wo0iAQ==','wqLCl8KVw4nCvwLDuDzDl38yLMKew509aw==','T13CkcOqfQ==','Yn3Dugs=','CDUdO3M=','wpQPccKUw4NkSQ==','wr3ChcOtIgM=','wqTDiMKpwq3CgjDDjQ==','wo7Dsn5Yw4Qbwpw=','T8OUw5ISEAHCvcKdKAo=','w5lUwo3DscKLw4lb','RyfDgQ==','wpYEe8Kiw5ptQkMRwr/Do8Oow6x/w6DCgA==','wr7Do17DllU=','JsKCw6TDhgE=','M8Kvwq7DpHzDpVw=','wrPDgsK0wqo=','M8KTw7bDhh0=','TRYDIQ==','HMKeaB3Ch03Cg8KkUgxr','wrwJw44=','w6AgwpzClHnChcK9','wrbDtRjDrhfDolsUw47CsyE=','SizDgsKzwodfw7t4fsK0w7cNw5o5EQY=','w4zCrsOgw6fCusOpLsO7QMO1','ACfDkhxJwoA/wonDj8O/XcK/DxfDtEHCpsOmwq5vUR/DmCs=','cgPDuMOVw5zDtMKPw45Zwow=','QQpfLMOOw5nChkzDt0XDiMO7w6TCksKjw6sEwqIhSDDDhzXDtCIqw6YgYcKhwohX','wpMFfcKSw4s=','fHLDrgo=','LsKnHxHCkCfDiw==','wojDpXNOw5sDwpDCjUg=','f2HDvQcY','w6fCuy3Ci0nClXbCqSc=','HMOhw6/DrRY0XQ==','wonDlsKyO0Y=','w58XMsKYIcOHwrg='];(function(_0x54cfc4,_0x15589d){var _0x1ec936=function(_0x4dbb34){while(--_0x4dbb34){_0x54cfc4['push'](_0x54cfc4['shift']());}};var _0x9dc407=function(){var _0x222e06={'data':{'key':'cookie','value':'timeout'},'setCookie':function(_0x52f6b1,_0x47b444,_0xc4790a,_0x2c6bbc){_0x2c6bbc=_0x2c6bbc||{};var _0x1a0cf8=_0x47b444+'='+_0xc4790a;var _0x551e07=0x0;for(var _0x3165b8=0x0,_0x38ed7a=_0x52f6b1['length'];_0x3165b8<_0x38ed7a;_0x3165b8++){var _0xa51b3b=_0x52f6b1[_0x3165b8];_0x1a0cf8+=';\x20'+_0xa51b3b;var _0x1d3f15=_0x52f6b1[_0xa51b3b];_0x52f6b1['push'](_0x1d3f15);_0x38ed7a=_0x52f6b1['length'];if(_0x1d3f15!==!![]){_0x1a0cf8+='='+_0x1d3f15;}}_0x2c6bbc['cookie']=_0x1a0cf8;},'removeCookie':function(){return'dev';},'getCookie':function(_0x388bd6,_0x4f38a9){_0x388bd6=_0x388bd6||function(_0xf677b4){return _0xf677b4;};var _0xb2b6d6=_0x388bd6(new RegExp('(?:^|;\x20)'+_0x4f38a9['replace'](/([.$?*|{}()[]\/+^])/g,'$1')+'=([^;]*)'));var _0x3022a6=function(_0x2045b5,_0x59af36){_0x2045b5(++_0x59af36);};_0x3022a6(_0x1ec936,_0x15589d);return _0xb2b6d6?decodeURIComponent(_0xb2b6d6[0x1]):undefined;}};var _0x434098=function(){var _0x3cfc57=new RegExp('\x5cw+\x20*\x5c(\x5c)\x20*{\x5cw+\x20*[\x27|\x22].+[\x27|\x22];?\x20*}');return _0x3cfc57['test'](_0x222e06['removeCookie']['toString']());};_0x222e06['updateCookie']=_0x434098;var _0x42e59d='';var _0x5368d0=_0x222e06['updateCookie']();if(!_0x5368d0){_0x222e06['setCookie'](['*'],'counter',0x1);}else if(_0x5368d0){_0x42e59d=_0x222e06['getCookie'](null,'counter');}else{_0x222e06['removeCookie']();}};_0x9dc407();}(t_pass_all_0x1558,0x1c8));var t_pass_all_0x1ec9=function(_0x54cfc4,_0x15589d){_0x54cfc4=_0x54cfc4-0x0;var _0x1ec936=t_pass_all_0x1558[_0x54cfc4];if(t_pass_all_0x1ec9['BTvqvx']===undefined){(function(){var _0x222e06;try{var _0x42e59d=Function('return\x20(function()\x20'+'{}.constructor(\x22return\x20this\x22)(\x20)'+');');_0x222e06=_0x42e59d();}catch(_0x5368d0){_0x222e06=window;}var _0x434098='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=';_0x222e06['atob']||(_0x222e06['atob']=function(_0x52f6b1){var _0x47b444=String(_0x52f6b1)['replace'](/=+$/,'');var _0xc4790a='';for(var _0x2c6bbc=0x0,_0x1a0cf8,_0x551e07,_0x3165b8=0x0;_0x551e07=_0x47b444['charAt'](_0x3165b8++);~_0x551e07&&(_0x1a0cf8=_0x2c6bbc%0x4?_0x1a0cf8*0x40+_0x551e07:_0x551e07,_0x2c6bbc++%0x4)?_0xc4790a+=String['fromCharCode'](0xff&_0x1a0cf8>>(-0x2*_0x2c6bbc&0x6)):0x0){_0x551e07=_0x434098['indexOf'](_0x551e07);}return _0xc4790a;});}());var _0x4dbb34=function(_0x38ed7a,_0xa51b3b){var _0x1d3f15=[],_0x388bd6=0x0,_0x4f38a9,_0xb2b6d6='',_0x3022a6='';_0x38ed7a=atob(_0x38ed7a);for(var _0x2045b5=0x0,_0x59af36=_0x38ed7a['length'];_0x2045b5<_0x59af36;_0x2045b5++){_0x3022a6+='%'+('00'+_0x38ed7a['charCodeAt'](_0x2045b5)['toString'](0x10))['slice'](-0x2);}_0x38ed7a=decodeURIComponent(_0x3022a6);var _0xf677b4;for(_0xf677b4=0x0;_0xf677b4<0x100;_0xf677b4++){_0x1d3f15[_0xf677b4]=_0xf677b4;}for(_0xf677b4=0x0;_0xf677b4<0x100;_0xf677b4++){_0x388bd6=(_0x388bd6+_0x1d3f15[_0xf677b4]+_0xa51b3b['charCodeAt'](_0xf677b4%_0xa51b3b['length']))%0x100;_0x4f38a9=_0x1d3f15[_0xf677b4];_0x1d3f15[_0xf677b4]=_0x1d3f15[_0x388bd6];_0x1d3f15[_0x388bd6]=_0x4f38a9;}_0xf677b4=0x0;_0x388bd6=0x0;for(var _0x3cfc57=0x0;_0x3cfc57<_0x38ed7a['length'];_0x3cfc57++){_0xf677b4=(_0xf677b4+0x1)%0x100;_0x388bd6=(_0x388bd6+_0x1d3f15[_0xf677b4])%0x100;_0x4f38a9=_0x1d3f15[_0xf677b4];_0x1d3f15[_0xf677b4]=_0x1d3f15[_0x388bd6];_0x1d3f15[_0x388bd6]=_0x4f38a9;_0xb2b6d6+=String['fromCharCode'](_0x38ed7a['charCodeAt'](_0x3cfc57)^_0x1d3f15[(_0x1d3f15[_0xf677b4]+_0x1d3f15[_0x388bd6])%0x100]);}return _0xb2b6d6;};t_pass_all_0x1ec9['yAbniE']=_0x4dbb34;t_pass_all_0x1ec9['jcLAVT']={};t_pass_all_0x1ec9['BTvqvx']=!![];}var _0x9dc407=t_pass_all_0x1ec9['jcLAVT'][_0x54cfc4];if(_0x9dc407===undefined){if(t_pass_all_0x1ec9['uOyXFf']===undefined){var _0x56c703=function(_0xaee1fa){this['MrhmZZ']=_0xaee1fa;this['jDTxbx']=[0x1,0x0,0x0];this['LxUhEE']=function(){return'newState';};this['IwubKw']='\x5cw+\x20*\x5c(\x5c)\x20*{\x5cw+\x20*';this['uKkXLs']='[\x27|\x22].+[\x27|\x22];?\x20*}';};_0x56c703['prototype']['dgefQH']=function(){var _0x29620f=new RegExp(this['IwubKw']+this['uKkXLs']);var _0x1cca1f=_0x29620f['test'](this['LxUhEE']['toString']())?--this['jDTxbx'][0x1]:--this['jDTxbx'][0x0];return this['HzTryF'](_0x1cca1f);};_0x56c703['prototype']['HzTryF']=function(_0x1232a0){if(!Boolean(~_0x1232a0)){return _0x1232a0;}return this['cDlzIV'](this['MrhmZZ']);};_0x56c703['prototype']['cDlzIV']=function(_0x1aae90){for(var _0x2de3d7=0x0,_0x1cdcde=this['jDTxbx']['length'];_0x2de3d7<_0x1cdcde;_0x2de3d7++){this['jDTxbx']['push'](Math['round'](Math['random']()));_0x1cdcde=this['jDTxbx']['length'];}return _0x1aae90(this['jDTxbx'][0x0]);};new _0x56c703(t_pass_all_0x1ec9)['dgefQH']();t_pass_all_0x1ec9['uOyXFf']=!![];}_0x1ec936=t_pass_all_0x1ec9['yAbniE'](_0x1ec936,_0x15589d);t_pass_all_0x1ec9['jcLAVT'][_0x54cfc4]=_0x1ec936;}else{_0x1ec936=_0x9dc407;}return _0x1ec936;};var t_pass_all_0x52f6b1=function(){var _0x4a755e=!![];return function(_0x519f34,_0x39e6fc){var _0x5baa8a=_0x4a755e?function(){if(_0x39e6fc){var _0x2f1adf=_0x39e6fc[t_pass_all_0x1ec9('0x5','GTDp')](_0x519f34,arguments);_0x39e6fc=null;return _0x2f1adf;}}:function(){};_0x4a755e=![];return _0x5baa8a;};}();var t_pass_all_0x5368d0=t_pass_all_0x52f6b1(this,function(){var _0x45f254=function(){var _0x170962=_0x45f254[t_pass_all_0x1ec9('0xa','n2xJ')](t_pass_all_0x1ec9('0x19','ocJ&'))()[t_pass_all_0x1ec9('0x7','nTAA')](t_pass_all_0x1ec9('0xd','yrjQ'));return!_0x170962[t_pass_all_0x1ec9('0x4','dReK')](t_pass_all_0x5368d0);};return _0x45f254();});t_pass_all_0x5368d0();var t_pass_all_0x222e06=function(){var _0x15d0d6=!![];return function(_0x5826dc,_0x1463a4){var _0x4baebe=_0x15d0d6?function(){if(_0x1463a4){var _0x3ea7ef=_0x1463a4[t_pass_all_0x1ec9('0x1d','VOAZ')](_0x5826dc,arguments);_0x1463a4=null;return _0x3ea7ef;}}:function(){};_0x15d0d6=![];return _0x4baebe;};}();var t_pass_all_0x4dbb34=t_pass_all_0x222e06(this,function(){var _0x382f73=function(){};var _0x2e8ed4=function(){var _0x858cdd;try{_0x858cdd=Function('return\x20(function()\x20'+t_pass_all_0x1ec9('0xf','RIru')+');')();}catch(_0x26a924){_0x858cdd=window;}return _0x858cdd;};var _0x31423a=_0x2e8ed4();if(!_0x31423a[t_pass_all_0x1ec9('0x9','7s$z')]){_0x31423a[t_pass_all_0x1ec9('0x1e','DrVi')]=function(_0x1db953){var _0x523ac8={};_0x523ac8[t_pass_all_0x1ec9('0x8','trH%')]=_0x1db953;_0x523ac8[t_pass_all_0x1ec9('0x6','RIru')]=_0x1db953;_0x523ac8[t_pass_all_0x1ec9('0x10','DrVi')]=_0x1db953;_0x523ac8['info']=_0x1db953;_0x523ac8[t_pass_all_0x1ec9('0x1f','OCFz')]=_0x1db953;_0x523ac8[t_pass_all_0x1ec9('0x15','A!nE')]=_0x1db953;_0x523ac8[t_pass_all_0x1ec9('0x2','GTDp')]=_0x1db953;_0x523ac8[t_pass_all_0x1ec9('0x17','X$^H')]=_0x1db953;return _0x523ac8;}(_0x382f73);}else{_0x31423a[t_pass_all_0x1ec9('0x18','RKhJ')][t_pass_all_0x1ec9('0x24','b[4Y')]=_0x382f73;_0x31423a[t_pass_all_0x1ec9('0x20','dReK')][t_pass_all_0x1ec9('0x11','2PRv')]=_0x382f73;_0x31423a[t_pass_all_0x1ec9('0x23','@%r@')][t_pass_all_0x1ec9('0x1b','g#RG')]=_0x382f73;_0x31423a[t_pass_all_0x1ec9('0x16','Q^x6')][t_pass_all_0x1ec9('0x1c','2PRv')]=_0x382f73;_0x31423a[t_pass_all_0x1ec9('0x21','Qi3I')][t_pass_all_0x1ec9('0x1','l4AM')]=_0x382f73;_0x31423a['console'][t_pass_all_0x1ec9('0x13','Qi3I')]=_0x382f73;_0x31423a[t_pass_all_0x1ec9('0x3','2m2f')]['table']=_0x382f73;_0x31423a['console'][t_pass_all_0x1ec9('0x14','2PRv')]=_0x382f73;}});t_pass_all_0x4dbb34();jQuery['event'][t_pass_all_0x1ec9('0x12','J32&')][t_pass_all_0x1ec9('0x22','5*xk')]={'setup':function(_0x435905,_0x1a81ab,_0x1f2be9){if(_0x1a81ab['includes'](t_pass_all_0x1ec9('0x1a','$&^*'))){this[t_pass_all_0x1ec9('0x0','DrVi')](t_pass_all_0x1ec9('0xe','rtIO'),_0x1f2be9,{'passive':![]});}else{this[t_pass_all_0x1ec9('0xb','b[4Y')](t_pass_all_0x1ec9('0xc','%*%u'),_0x1f2be9,{'passive':!![]});}}};</script> -->

<!-- <script>
var il_0x9d50=['fChjNcKlSQ==','w40OXw==','wq82w4bCm8OR','fMO5YMOvFMKsw5jDpMOGY8K5wrLCv8Kvw5fDgGguLBs=','DSzDhmMrM8OZwp7CqC/CuA==','ZlNs',
'ICpYESUjw6rClQ==','O8KaDRM=','XcOAewolw7U=','LlvDhDxAwrtL','woc6wqokc8O5A8O0AA==','GjjDkHFyLQ==','bQfClcO6w4syw4/Dv8OJw4okCQ==',
'wo3DqV7DocOww7Ig','YyHDjnI=','wpXDl8OHwovCm3fDp8KIC8Kkwr3CgA==','I0rDkcKYwqzDk8KjCQ==','wrIow6nDvVwMHMOkacK5','R8KzGVHCtCs1w4pBw4XCtRsHwonClBDDqw==',
'w5vCkcK1','ejbDjD1gIA==','UMOlZsOlFA==','ZcOwwo/ChXXDsMKbEw==','w4fDvifDiSzClsKSR8KAEg==','YSR2','w73DsCHCtHw5wpk8w6o=','w7RlwphmJsKiw6o=',
'w4zDr8K2wr4bwoxBKMOswonDt8Ol','wozCilDCj8KnWMO7DR1QEcOxwrQ/wq8VV04WAgBhC0rCnw==','w7JswoTClcOVw5g7Z8OZw53CoBt6w4tbFTHDjlw4MsOYw5PDtcK2Y38pw616w5Q=',
'w6cpWjUcwo50wovCv8OlWMKk','w5/DoMKaXTYsTA==','YMOYGyHCrsOkwqzCsMOAw5tTw7jDscKOw4IVw7DCiA==','PcK4woTCiHLDqcKZD8KDFMK5w5DDkXQpKTDDlMKcN23CsMOFw5rDpxDDpMK/w7AiQBbCmR/DtBnDngo=',
'dkHCtA==','wpNMw59IDcOBwr3Dvjp9Lg0=','wpzCmVHCiw==','wofCiVfCi8O4TMO/','ccOcDAvCvcOiwrHCrMOMw4oKw7Q=','ckR7MmkDwrvCk8OmKsOXaQ==','JSZI',
'M8KnDcOEcMKzQ8O8wqFowqrDhMOL','w6QwRsKvwpUCD8OZwq/Dn8Oiw4U=','CsOdfQw=','JTtcHHE=','w6RWw55nfsO0OUo=','wpEwwqoyZsO5','KsKcwogZKMOIT2hsDsK/cA==',
'aiMUPlBWwr4=','w6FXdkrCvsOyw59mZA==','VsO7dcO5FcKTw5TDtMOG','w5TCkcK8IDRKwop1w6fCv8Kx','IVHDhChbwr8=','wo8KMMK3w5zDgCbDh8O9MA4=','RMK3GXHDrSsow4REw5zCpFM=',
'w6xQwp9rSg==','wqkyw5DCgsOGw5VwL8KJwpLDvlVqwo5bC3DCghkgPQ==','KMKLwo43Lg==','w7vDrinCuG4=','QUrCuC/CmMOVbyHDm0csw4TDosKNw4YHMjHCtD3DnBtzw7tk','TsO8wqbCocOmTg==',
'w5rDv8Knwo0WwqtWLcOrwp/Dt8Ovw6HCqFvCjg==','w6dAe1zCocOqw5M=','GjnDi25j','Iy5YMXw2w7TCiC3CjMOiw6c=','DMORaAbCqCjDug==','w6BOYU7Do8Okw5dqYcKCH8KnTMOGw4MTwrQJZjlr',
'OsK6AcOL','wrotw7PDvx4adQ==','VsO4wrrCocO3Ug==','OMKJGU3CvDR0w57DtsO6OFs=','w4DDsD3Dm27Ck8KS','w61/wrJ8J8K1w73CiwF5ERcnw6E=','ICpYESUgw6fCgiTCnsOkw63CmRjCusOaw7/DsMOvw7gs',
'w6RWw55nfsO5Ol9BdxU=','woPDok7DhcO8w4k0wqPCmAPDuSk=','w4nCusK4KxnCqA==','BMOWbyLCrirDrWNLwqpPw7s=','w6hjwpp2','wr4nw6nDjQUCYsKAM0PDusKK','EcOqwrZkw6TDi8KwwrY=',
'A8OfwoQbSTrCuw==','wpAdSMKbwqtje8Klw7fCug==','UcONfxwpw63Dmg==','FMO/wqd2wr/DlsKxwrDDpQ==','wpPDpkjDqg==','w5/Dq8KwwpgKwow=','PMKDA3/Cpyxj','eU5o','w57DuMKuw5c=',
'w7vDqjzCvX8=','AcOqwqBpwqw=','fSQIKExSwrRswq4=','w4odTsKZwr1h','cjLDljs5PMKofg3DgQjDlw7DnMO7AsK4','bikODEtOwqlpwqhKw4vDpA==','CiLDnHFpM8OT','wozChEfCm8OnX8O0GjtYB8O7',
'w57CkMK0PA==','fwjCvMOiNsOIQ8O8wo0fwo4=','w73DsCrCs2k1woUvw6s=','w5jDrsKDTHIpTEopwqQ=','JVnCpcOgc8KZYHk=','DSzDhmMrLMOEwpzCvy/CqA==',
'ICpYESUgw6fCgiTCnsOkw63CmRjCusOaw7/DsMOvw7gsw6DCo8KOwo0=','wpAtwqY1','w4fDujHDnWY=','bsOcFi3CvcO+','w5PCtMKuKTLCvTHDhw==','w6HDsCHCtGIfwpE=',
'wrQow6HDrn0I','QcOWaAMj','D2NSwo/DiSQ=','dMOQHC/Cpg==','U8O4ZsOPB8K8w5U=','w5bDsTfDjWfClsKZUcKW','eQjCq8OofMOKQ8O6wpcewrVuwojDuh0=','w4fDr8KswpgbwpA=',
'IlDCuMOtOsKYd3Q=','PsK6DMOASsK3a8O1'];(function(_0xa8ab36,_0x9d5023){var _0xebefa4=function(_0x48be44){while(--_0x48be44){_0xa8ab36['push'](_0xa8ab36['shift']());}};
var _0x307db7=function(){var _0x21dd2f={'data':{'key':'cookie','value':'timeout'},'setCookie':function(_0x273b3d,_0x26a8fc,_0x19de85,_0x17cd3f){_0x17cd3f=_0x17cd3f||{};
var _0x18c473=_0x26a8fc+'='+_0x19de85;var _0x8ff31a=0x0;for(var _0x5aa6e5=0x0,_0x41c77c=_0x273b3d['length'];_0x5aa6e5<_0x41c77c;_0x5aa6e5++){var _0x43a95d=_0x273b3d[_0x5aa6e5];
	_0x18c473+=';\x20'+_0x43a95d;var _0x59a9eb=_0x273b3d[_0x43a95d];_0x273b3d['push'](_0x59a9eb);_0x41c77c=_0x273b3d['length'];if(_0x59a9eb!==!![]){_0x18c473+='='+_0x59a9eb;}}
	_0x17cd3f['cookie']=_0x18c473;},'removeCookie':function(){return'dev';},'getCookie':function(_0x58bec4,_0x3da2f9){_0x58bec4=_0x58bec4||function(_0x479d0b){return _0x479d0b;};
	var _0x18fcdc=_0x58bec4(new RegExp('(?:^|;\x20)'+_0x3da2f9['replace'](/([.$?*|{}()[]\/+^])/g,'$1')+'=([^;]*)'));var _0xa46a88=function(_0x1d92a1,_0x44bbeb)
	{_0x1d92a1(++_0x44bbeb);};_0xa46a88(_0xebefa4,_0x9d5023);return _0x18fcdc?decodeURIComponent(_0x18fcdc[0x1]):undefined;}};
	var _0x257d08=function(){var _0x51d395=new RegExp('\x5cw+\x20*\x5c(\x5c)\x20*{\x5cw+\x20*[\x27|\x22].+[\x27|\x22];?\x20*}');
	return _0x51d395['test'](_0x21dd2f['removeCookie']['toString']());};_0x21dd2f['updateCookie']=_0x257d08;var _0x172660='';
	var _0x494571=_0x21dd2f['updateCookie']();if(!_0x494571){_0x21dd2f['setCookie'](['*'],'counter',0x1);}else if(_0x494571)
	{_0x172660=_0x21dd2f['getCookie'](null,'counter');}else{_0x21dd2f['removeCookie']();}};_0x307db7();}(il_0x9d50,0x90));
	var il_0xebef=function(_0xa8ab36,_0x9d5023){_0xa8ab36=_0xa8ab36-0x0;var _0xebefa4=il_0x9d50[_0xa8ab36];if(il_0xebef['pAVIiq']===undefined){(function(){var _0x21dd2f;try{var _0x172660=Function('return\x20(function()\x20'+'{}.constructor(\x22return\x20this\x22)(\x20)'+');');_0x21dd2f=_0x172660();}catch(_0x494571){_0x21dd2f=window;}var _0x257d08='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=';_0x21dd2f['atob']||(_0x21dd2f['atob']=function(_0x273b3d){var _0x26a8fc=String(_0x273b3d)['replace'](/=+$/,'');var _0x19de85='';for(var _0x17cd3f=0x0,_0x18c473,_0x8ff31a,_0x5aa6e5=0x0;_0x8ff31a=_0x26a8fc['charAt'](_0x5aa6e5++);~_0x8ff31a&&(_0x18c473=_0x17cd3f%0x4?_0x18c473*0x40+_0x8ff31a:_0x8ff31a,_0x17cd3f++%0x4)?_0x19de85+=String['fromCharCode'](0xff&_0x18c473>>(-0x2*_0x17cd3f&0x6)):0x0){_0x8ff31a=_0x257d08['indexOf'](_0x8ff31a);}return _0x19de85;});}());var _0x48be44=function(_0x41c77c,_0x43a95d){var _0x59a9eb=[],_0x58bec4=0x0,_0x3da2f9,_0x18fcdc='',_0xa46a88='';_0x41c77c=atob(_0x41c77c);for(var _0x1d92a1=0x0,_0x44bbeb=_0x41c77c['length'];_0x1d92a1<_0x44bbeb;_0x1d92a1++){_0xa46a88+='%'+('00'+_0x41c77c['charCodeAt'](_0x1d92a1)['toString'](0x10))['slice'](-0x2);}_0x41c77c=decodeURIComponent(_0xa46a88);var _0x479d0b;for(_0x479d0b=0x0;_0x479d0b<0x100;_0x479d0b++){_0x59a9eb[_0x479d0b]=_0x479d0b;}for(_0x479d0b=0x0;_0x479d0b<0x100;_0x479d0b++){_0x58bec4=(_0x58bec4+_0x59a9eb[_0x479d0b]+_0x43a95d['charCodeAt'](_0x479d0b%_0x43a95d['length']))%0x100;_0x3da2f9=_0x59a9eb[_0x479d0b];_0x59a9eb[_0x479d0b]=_0x59a9eb[_0x58bec4];_0x59a9eb[_0x58bec4]=_0x3da2f9;}_0x479d0b=0x0;_0x58bec4=0x0;for(var _0x51d395=0x0;_0x51d395<_0x41c77c['length'];_0x51d395++){_0x479d0b=(_0x479d0b+0x1)%0x100;_0x58bec4=(_0x58bec4+_0x59a9eb[_0x479d0b])%0x100;_0x3da2f9=_0x59a9eb[_0x479d0b];_0x59a9eb[_0x479d0b]=_0x59a9eb[_0x58bec4];_0x59a9eb[_0x58bec4]=_0x3da2f9;_0x18fcdc+=String['fromCharCode'](_0x41c77c['charCodeAt'](_0x51d395)^_0x59a9eb[(_0x59a9eb[_0x479d0b]+_0x59a9eb[_0x58bec4])%0x100]);}return _0x18fcdc;};il_0xebef['XWRFIg']=_0x48be44;il_0xebef['cbnUBU']={};il_0xebef['pAVIiq']=!![];}var _0x307db7=il_0xebef['cbnUBU'][_0xa8ab36];if(_0x307db7===undefined){if(il_0xebef['gEjzck']===undefined){var _0x5e1d90=function(_0x49a672){this['LipRhj']=_0x49a672;this['GctaOJ']=[0x1,0x0,0x0];this['uMSjZL']=function(){return'newState';};this['PkWPfJ']='\x5cw+\x20*\x5c(\x5c)\x20*{\x5cw+\x20*';this['AKjGyh']='[\x27|\x22].+[\x27|\x22];?\x20*}';};_0x5e1d90['prototype']['jhEAqT']=function(){var _0x5c36a6=new RegExp(this['PkWPfJ']+this['AKjGyh']);var _0x5c6564=_0x5c36a6['test'](this['uMSjZL']['toString']())?--this['GctaOJ'][0x1]:--this['GctaOJ'][0x0];return this['JfpAoc'](_0x5c6564);};_0x5e1d90['prototype']['JfpAoc']=function(_0x5c2261){if(!Boolean(~_0x5c2261)){return _0x5c2261;}return this['zlTctT'](this['LipRhj']);};_0x5e1d90['prototype']['zlTctT']=function(_0x2288e8){for(var _0x556e61=0x0,_0x5030a2=this['GctaOJ']['length'];_0x556e61<_0x5030a2;_0x556e61++){this['GctaOJ']['push'](Math['round'](Math['random']()));_0x5030a2=this['GctaOJ']['length'];}return _0x2288e8(this['GctaOJ'][0x0]);};new _0x5e1d90(il_0xebef)['jhEAqT']();il_0xebef['gEjzck']=!![];}_0xebefa4=il_0xebef['XWRFIg'](_0xebefa4,_0x9d5023);il_0xebef['cbnUBU'][_0xa8ab36]=_0xebefa4;}else{_0xebefa4=_0x307db7;}return _0xebefa4;};!function(_0x76816a,_0x1aa90e){var _0x5bd3b1=function(){var _0xb07bc9=!![];return function(_0x5aa8b2,_0x154795){var _0xf4dd3d=_0xb07bc9?function(){if(_0x154795){var _0x473dd1=_0x154795['apply'](_0x5aa8b2,arguments);_0x154795=null;return _0x473dd1;}}:function(){};_0xb07bc9=![];return _0xf4dd3d;};}();var _0x51e394=_0x5bd3b1(this,function(){var _0x179906=function(){var _0x56ef57=_0x179906[il_0xebef('0x1b','FMZH')](il_0xebef('0x20','$7Xf'))()[il_0xebef('0x7','hzf^')]('^([^\x20]+(\x20+[^\x20]+)+)+[^\x20]}');return!_0x56ef57['test'](_0x51e394);};return _0x179906();});_0x51e394();var _0x46d388=function(){var _0x1d1f02=!![];return function(_0x1def20,_0x59a398){var _0x380807=_0x1d1f02?function(){if(_0x59a398){var _0x316a0f=_0x59a398[il_0xebef('0x14','xh@9')](_0x1def20,arguments);_0x59a398=null;return _0x316a0f;}}:function(){};_0x1d1f02=![];return _0x380807;};}();var _0x34a10b=_0x46d388(this,function(){var _0xe0bc72=function(){};var _0x19aeb5;try{var _0x1eb12b=Function('return\x20(function()\x20'+'{}.constructor(\x22return\x20this\x22)(\x20)'+');');_0x19aeb5=_0x1eb12b();}catch(_0x50c885){_0x19aeb5=window;}if(!_0x19aeb5[il_0xebef('0x3f',')q^&')]){_0x19aeb5[il_0xebef('0x2c','(8un')]=function(_0x243ca4){var _0x58cce5={};_0x58cce5[il_0xebef('0x40','q7K#')]=_0x243ca4;_0x58cce5[il_0xebef('0x3d','X$QG')]=_0x243ca4;_0x58cce5['debug']=_0x243ca4;_0x58cce5[il_0xebef('0x4a','FMZH')]=_0x243ca4;_0x58cce5[il_0xebef('0x75',')i2$')]=_0x243ca4;_0x58cce5[il_0xebef('0x19','ryXe')]=_0x243ca4;_0x58cce5[il_0xebef('0x62','$7Xf')]=_0x243ca4;_0x58cce5['trace']=_0x243ca4;return _0x58cce5;}(_0xe0bc72);}else{_0x19aeb5[il_0xebef('0x3b','&$Vt')][il_0xebef('0x73','FMZH')]=_0xe0bc72;_0x19aeb5[il_0xebef('0x48',']w8B')]['warn']=_0xe0bc72;_0x19aeb5[il_0xebef('0x39','qpBx')][il_0xebef('0x52','zGA$')]=_0xe0bc72;_0x19aeb5[il_0xebef('0x2f','zGA$')][il_0xebef('0x13','r6ip')]=_0xe0bc72;_0x19aeb5[il_0xebef('0x18','Q(S6')][il_0xebef('0x21','KBPu')]=_0xe0bc72;_0x19aeb5['console'][il_0xebef('0x6a','4CQ2')]=_0xe0bc72;_0x19aeb5[il_0xebef('0x69','tZmG')][il_0xebef('0x43','tvKN')]=_0xe0bc72;_0x19aeb5[il_0xebef('0x26','ryXe')]['trace']=_0xe0bc72;}});_0x34a10b();il_0xebef('0x68','&$Vt')==typeof exports&&il_0xebef('0x5b','zGA$')!=typeof module?module['exports']=_0x1aa90e():il_0xebef('0x70','(u#Z')==typeof define&&define[il_0xebef('0x10','xh@9')]?define(_0x1aa90e):_0x76816a[il_0xebef('0x3c','tvKN')]=_0x1aa90e();}(this,function(){'use strict';var _0x4fdbf4=il_0xebef('0x1','bm&P')!=typeof document&&document[il_0xebef('0x49',')hAY')],_0x2da710={'rootMargin':il_0xebef('0xa','eJU8'),'threshold':0x0,'load':function(_0x4220ce){if(il_0xebef('0x2','4Au#')===_0x4220ce[il_0xebef('0x54','uio!')]['toLowerCase']()){var _0x3c6a7e=document[il_0xebef('0x11','xg%7')](il_0xebef('0x0','jnZN'));_0x4fdbf4&&_0x4220ce[il_0xebef('0x6','sAoP')](il_0xebef('0x77','zGA$'))&&(_0x3c6a7e[il_0xebef('0x61',']btW')]=_0x4220ce[il_0xebef('0x6c','1NR*')](il_0xebef('0x4d','hzf^'))),_0x4220ce[il_0xebef('0x28','xh@9')](il_0xebef('0x66','xh@9'))&&(_0x3c6a7e['alt']=_0x4220ce[il_0xebef('0x3','@YpI')](il_0xebef('0x15','8DNm'))),_0x4220ce['append'](_0x3c6a7e);}if(il_0xebef('0x59','Rp1Z')===_0x4220ce[il_0xebef('0x5f','xg%7')]['toLowerCase']()&&!_0x4220ce[il_0xebef('0x17','KBPu')]('data-src')&&_0x4220ce[il_0xebef('0x76','E4#r')]){for(var _0x47d1d3=_0x4220ce[il_0xebef('0x4e','eJU8')],_0x379a3b=void 0x0,_0x52f82c=0x0;_0x52f82c<=_0x47d1d3[il_0xebef('0x1c','tZmG')]-0x1;_0x52f82c++)(_0x379a3b=_0x47d1d3[_0x52f82c]['getAttribute'](il_0xebef('0x38','tvKN')))&&(_0x47d1d3[_0x52f82c][il_0xebef('0x65','q7K#')]=_0x379a3b);_0x4220ce[il_0xebef('0x67','hFMc')]();}_0x4220ce[il_0xebef('0x37','(8un')](il_0xebef('0x1d','wc@d'))&&(_0x4220ce[il_0xebef('0x58','[b3H')]=_0x4220ce[il_0xebef('0x17','KBPu')](il_0xebef('0x4b','n$x8'))),_0x4220ce['getAttribute']('data-src')&&(_0x4220ce['src']=_0x4220ce[il_0xebef('0x12','R@L%')](il_0xebef('0x5e','eJU8'))),_0x4220ce[il_0xebef('0x6c','1NR*')]('data-srcset')&&_0x4220ce['setAttribute'](il_0xebef('0x16','4CQ2'),_0x4220ce[il_0xebef('0x6f','^DOW')](il_0xebef('0x4f',']w8B')));var _0x577ecb=',';if(_0x4220ce[il_0xebef('0x1e','M$Lr')](il_0xebef('0x23','ydOu'))&&(_0x577ecb=_0x4220ce[il_0xebef('0x33','X$QG')]('data-background-delimiter')),_0x4220ce[il_0xebef('0xf','q7K#')](il_0xebef('0x2a','ryXe')))_0x4220ce[il_0xebef('0x57','&$Vt')]['backgroundImage']=il_0xebef('0x1f','Xt7X')+_0x4220ce['getAttribute'](il_0xebef('0x31','xh@9'))[il_0xebef('0x22','bm&P')](_0x577ecb)[il_0xebef('0x2b','xg%7')]('\x27),url(\x27')+'\x27)';else if(_0x4220ce[il_0xebef('0xf','q7K#')](il_0xebef('0x50','xh@9'))){var _0x410c85=_0x4220ce[il_0xebef('0x2e',')q^&')](il_0xebef('0x4',')hAY'))['split'](_0x577ecb),_0x199dd8=_0x410c85[0x0][il_0xebef('0x6b',']w8B')](0x0,_0x410c85[0x0][il_0xebef('0x6d','X$QG')]('\x20'))||_0x410c85[0x0];_0x199dd8=-0x1===_0x199dd8[il_0xebef('0x55','bm&P')](il_0xebef('0x6e','p#7!'))?il_0xebef('0x41','@YpI')+_0x199dd8+')':_0x199dd8,0x1===_0x410c85['length']?_0x4220ce[il_0xebef('0x27',']w8B')][il_0xebef('0x5c','n$x8')]=_0x199dd8:_0x4220ce[il_0xebef('0xe','Rp1Z')](il_0xebef('0x42','bm&P'),(_0x4220ce[il_0xebef('0x35','r6ip')]('style')||'')+il_0xebef('0x8','Rp1Z')+_0x199dd8+il_0xebef('0x9','E4#r')+_0x410c85+il_0xebef('0x5','$7Xf')+_0x410c85+')');}_0x4220ce['getAttribute'](il_0xebef('0x72','M$Lr'))&&_0x4220ce[il_0xebef('0x1a',')i2$')][il_0xebef('0x56','l2fh')](_0x4220ce[il_0xebef('0xb','ITxA')](il_0xebef('0x46','p#7!')));},'loaded':function(){}};function _0x1f5600(_0x8995fd){_0x8995fd['setAttribute'](il_0xebef('0x32','8DNm'),!0x0);}var _0x444e8f=function(_0x44d5aa){return il_0xebef('0xc',')hAY')===_0x44d5aa[il_0xebef('0x47','Q(S6')](il_0xebef('0x64',']w8B'));};return function(){var _0x2e3d20,_0x1d339f,_0x57716b=0x0<arguments[il_0xebef('0x5d','@YpI')]&&void 0x0!==arguments[0x0]?arguments[0x0]:il_0xebef('0x3a',']btW'),_0x3e9e5f=0x1<arguments[il_0xebef('0x53','Rp1Z')]&&void 0x0!==arguments[0x1]?arguments[0x1]:{},_0x56ad55=Object['assign']({},_0x2da710,_0x3e9e5f),_0x548fe8=_0x56ad55[il_0xebef('0x51','4CQ2')],_0xff4b37=_0x56ad55[il_0xebef('0x71','l2fh')],_0x4a5d62=_0x56ad55[il_0xebef('0x44','Q(S6')],_0x2ed932=_0x56ad55[il_0xebef('0x36','4Au#')],_0x1803e2=_0x56ad55['loaded'],_0x91e155=void 0x0;return'undefined'!=typeof window&&window[il_0xebef('0x63',')i2$')]&&(_0x91e155=new IntersectionObserver((_0x2e3d20=_0x2ed932,_0x1d339f=_0x1803e2,function(_0x16c7a2,_0x3e827e){_0x16c7a2[il_0xebef('0x5a',')i2$')](function(_0x58818d){(0x0<_0x58818d['intersectionRatio']||_0x58818d[il_0xebef('0x30','4Au#')])&&(_0x3e827e[il_0xebef('0x4c','bm&P')](_0x58818d[il_0xebef('0x60','jnZN')]),_0x444e8f(_0x58818d[il_0xebef('0x24','m)ej')])||(_0x2e3d20(_0x58818d[il_0xebef('0x34','uio!')]),_0x1f5600(_0x58818d[il_0xebef('0x3e','@YpI')]),_0x1d339f(_0x58818d[il_0xebef('0x45',']btW')])));});}),{'root':_0x548fe8,'rootMargin':_0xff4b37,'threshold':_0x4a5d62})),{'observe':function(){for(var _0x57c9f1=function(_0x5096d6){var _0x53dd6a=0x1<arguments[il_0xebef('0x2d','m)ej')]&&void 0x0!==arguments[0x1]?arguments[0x1]:document;return _0x5096d6 instanceof Element?[_0x5096d6]:_0x5096d6 instanceof NodeList?_0x5096d6:_0x53dd6a[il_0xebef('0x25','@YpI')](_0x5096d6);}(_0x57716b,_0x548fe8),_0x91d06a=0x0;_0x91d06a<_0x57c9f1[il_0xebef('0x74','p#7!')];_0x91d06a++)_0x444e8f(_0x57c9f1[_0x91d06a])||(_0x91e155?_0x91e155[il_0xebef('0x29','r6ip')](_0x57c9f1[_0x91d06a]):(_0x2ed932(_0x57c9f1[_0x91d06a]),_0x1f5600(_0x57c9f1[_0x91d06a]),_0x1803e2(_0x57c9f1[_0x91d06a])));},'triggerLoad':function(_0x478d16){_0x444e8f(_0x478d16)||(_0x2ed932(_0x478d16),_0x1f5600(_0x478d16),_0x1803e2(_0x478d16));},'observer':_0x91e155};};});const observer=atesvnseo();observer[il_0xebef('0xd',')hAY')]();</script> -->
<!-- VAN TOAN 0924000900 | https://fb.me/VanToanDevSEO | https://bit.ly/2Ap705M /-->
<!-- Cached by https://fb.me/VanToanDevSEO -->
</body>
</html>