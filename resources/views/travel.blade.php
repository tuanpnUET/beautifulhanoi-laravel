<!DOCTYPE html>
<html>
<head>
	<title>ハノイの観光</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script language="javascript" src="../js/app.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/app.css">
</head>
<body>
	<button onclick="topFunction()" id="topBtn">トップ</button>
	<div>
		<header>
			<div style="position: relative; color: white; font-size: 6vw;"> 
				<img src="../images/logo.png" class="logo" width="100%" height="60%">
				<div class="centered"><p>美しいハノイ</p></div>
			</div>
			<div class="bg_menu">
                <a style="text-decoration: unset;" class="type5 hov myTab" href="index">ホーム</a>
				<a style="text-decoration: unset;" class="type5 hov myTab" href="travel">観光地</a>
				<a style="text-decoration: unset;" class="type5 hov myTab" href="food">名物料理</a>
				<a style="text-decoration: unset;" class="type5 hov myTab" href="festival">お祭り</a>
				<a style="text-decoration: unset;" class="type5 hov myTab" href="transport">交通</a>
				<a style="text-decoration: unset;" class="type5 hov myTab" href="{{ route('login') }}">管理者</a>
			</div>
		</header>
		<br><br>
		<div>
			<div class="container">
				<marquee width="100%" direction="left" height="150px" >
					<a href="https://vietcam-oh.com/hanoi/">
						<img src="images/img_adsdulich.png" width="200hw" height="150vw" class="ads"/>
					</a>
					<a href="https://vietcam-oh.com/hanoi/">
						<img src="images/img_adsdulich1.png" width="200hw" height="150vw" class="ads"/>
					</a>
					<a href="https://vietcam-oh.com/hanoi/">
						<img src="images/img_adsdulich2.png" width="200hw" height="150vw" class="ads"/>
					</a>
					<a href="https://vietcam-oh.com/hanoi/">
						<img src="images/img_adsdulich3.png" width="200hw" height="150vw" class="ads"/>
					</a>
					<a href="https://vietcam-oh.com/hanoi/">
						<img src="images/img_adsdulich4.png" width="200hw" height="150vw" class="ads"/>
					</a>
				</marquee>
				<br><br>
			</div>
			<div class="container" style="margin-top: 2px;">	
				<span class="col-md-4 col-xs-12">
					<span class="type7"><b>ホアンキエム湖｜玉山祠</b></span><br><br>
					<span class="type8">
						ハノイ市街の中心にある湖。湖畔は遊歩道になっていて、 市民の憩いの場 となっています。ホアンキエム湖に浮かぶ社、玉山祠へは橋を渡っていく事ができます。玉山祠には、13世紀に武将として活躍したチャン・フン・ダオや「三国志」の名将関羽など、文、武、医の神が祀られています。
					</span><br><br>
					<span class="type8"><b>住所:</b></span><br>
					<span class="type8"><a href="https://goo.gl/maps/8GPRo3EL88Xfaqqp8">Đinh Tiên Hoàng, Hàng Trống, Hoàn Kiếm, Hà Nội</a></span><br><br>
					<span class="type8"><b>営業中:</b></span><br>
					<span class="type8">24 時間営業</span><br><br>
				</span>
				<span class="col-md-1"></span>
				<div id="thaprua" class="col-md-7 col-xs-12 carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#thaprua" data-slide-to="0" class="active"></li>
						<li data-target="#thaprua" data-slide-to="1"></li>
						<li data-target="#thaprua" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner">
						<div class="item active">
							<img src="images/img_thaprua.png" style="width:100%; height: 30vw">
						</div>

						<div class="item">
							<img src="images/img_thaprua2.png" style="width:100%; height: 30vw">
						</div>

						<div class="item">
							<img src="images/img_thaprua3.png" style="width:100%; height: 30vw">
						</div>
					</div>
					<a class="left carousel-control" href="#thaprua" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left"></span>
					</a>
					<a class="right carousel-control" href="#thaprua" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right"></span>
					</a>
				</div>
			</div>
		</div>
		<br><br>
		<div class="container">
			<div id="hotay" class="col-md-7 col-xs-12 carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#hotay" data-slide-to="0" class="active"></li>
					<li data-target="#hotay" data-slide-to="1"></li>
					<li data-target="#hotay" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="item active">
						<img src="images/img_hotay.png" style="width:100%; height: 30vw">
					</div>

					<div class="item">
						<img src="images/img_hotay2.png" style="width:100%; height: 30vw">
					</div>

					<div class="item">
						<img src="images/img_hotay3.png" style="width:100%; height: 30vw">
					</div>
				</div>
				<a class="left carousel-control" href="#hotay" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
				</a>
				<a class="right carousel-control" href="#hotay" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
				</a>
			</div>
			<span class="col-md-1"></span>
			<span class="col-md-4 col-xs-12">
				<span class="type7"><b>タイ湖</b></span><br><br>
				<span class="type8">
					ハノイ中心部の北部に位置し、 静かにゆったり過ごしたい時におすすめ のエリア。ハノイの中でも最も美しい湖として愛されているタイ湖周辺には、洗練された高級ホテルやお洒落なショップが点在しています。美しい蓮池でアオザイなどの衣装をレンタルして写真が撮れるスポットも人気を集めています。
				</span><br><br>
				<span class="type8"><b>住所:</b></span><br>
				<span class="type8"><a href="https://goo.gl/maps/u5FB1HqL1iv3xgbKA">52 Đặng Thai Mai, Quảng An, Tây Hồ, Hà Nội, ベトナム</a></span><br><br>
				<span class="type8"><b>営業中:</b></span><br>
				<span class="type8">24 時間営業</span><br><br>
			</span>
		</div>
		<br><br>
		<div class="container" style="margin-top: 2px;">	
			<span class="col-md-4 col-xs-12">
				<span class="type7"><b>ハノイのホーチミン廟</b></span><br><br>
				<span class="type8">
					ハノイのホーチミン廟はハノイに来たら欠かせない観光スポットです。ベトナム建国の祖、ホー・チ・ミン氏のお墓があります。
				</span><br><br>
				<span class="type8"><b>住所:</b></span><br>
				<span class="type8"><a href="https://goo.gl/maps/m8yZGdccGNb2irhS6">19 P. Ngọc Hà, Đội Cấn, Ba Đình, Hà Nội</a></span><br><br>
				<span class="type8"><b>営業中:</b></span><br>
				<span class="type8">8時00分～11時30分、14時00分～16時00分</span><br><br>
			</span>
			<span class="col-md-1"></span>
			<div id="langbac" class="col-md-7 col-xs-12 carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#langbac" data-slide-to="0" class="active"></li>
					<li data-target="#langbac" data-slide-to="1"></li>
					<li data-target="#langbac" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="item active">
						<img src="images/img_langbac.png" style="width:100%; height: 30vw">
					</div>

					<div class="item">
						<img src="images/img_langbac2.png" style="width:100%; height: 30vw">
					</div>

					<div class="item">
						<img src="images/img_langbac3.png" style="width:100%; height: 30vw">
					</div>
				</div>
				<a class="left carousel-control" href="#hotay" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
				</a>
				<a class="right carousel-control" href="#hotay" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
				</a>
			</div>
		</div>
		<br><br>
		<div class="container">
			<div id="phoco" class="col-md-7 col-xs-12 carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#hotay" data-slide-to="0" class="active"></li>
					<li data-target="#hotay" data-slide-to="1"></li>
					<li data-target="#hotay" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="item active">
						<img src="images/img_phoco.png" style="width:100%; height: 30vw">
					</div>

					<div class="item">
						<img src="images/img_phoco2.png" style="width:100%; height: 30vw">
					</div>

					<div class="item">
						<img src="images/img_phoco3.png" style="width:100%; height: 30vw">
					</div>
				</div>
				<a class="left carousel-control" href="#phoco" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
				</a>
				<a class="right carousel-control" href="#phoco" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
				</a>
			</div>
			<span class="col-md-1"></span>
			<span class="col-md-4 col-xs-12">
				<span class="type7"><b>旧市街</b></span><br><br>
				<span class="type8">
					ホアンキエム湖の北側に広がる旧市街エリアは、 古き良きベトナムの街並みを散策できる人気の観光スポット 。籠、銀細工、仏具など職人が集まるエリアでもあり、良質なシルク製品などベトナムらしい雑貨を販売する店が軒を連ねています。安くておいしいローカルフードの食べ歩きも醍醐味です。
				</span><br><br>
				<span class="type8"><b>住所:</b></span><br>
				<span class="type8"><a href="https://g.page/hanoioldquarter?share">Hàng Đào, Hoàn Kiếm, Hà Nội</a></span><br><br>
				<span class="type8"><b>営業中:</b></span><br>
				<span class="type8">24 時間営業</span><br><br>
			</span>
		</div>
		<br><br>
		<div class="container" style="margin-top: 2px;">	
			<span class="col-md-4 col-xs-12">
				<span class="type7"><b>大教会周辺</b></span><br><br>
				<span class="type8">
					ホアンキエム湖の西に建つハノイ大教会の周辺にはフランス統治時代に建てられたコロニアル建築の博物館やホテルが多数集まっています。 お洒落な雑貨屋 が立ち並ぶニャトー通りやニューチャン通りなどは 女子旅のショッピング に最適のスポット。散策の休憩には、コロニアル建築の レストランやカフェ で優雅な一時を満喫しましょう。
				</span><br><br>
				<span class="type8"><b>住所:</b></span><br>
				<span class="type8"><a href="https://goo.gl/maps/UitQoakz4ZZKyBCW7">40 Nhà Chung, Hàng Trống, Hoàn Kiếm, Hà Nội</a></span><br><br>
				<span class="type8"><b>営業中:</b></span><br>
				<span class="type8">8時00分～11時00分,14時00分～17時00分</span><br><br>
			</span>
			<span class="col-md-1"></span>
			<div id="nhatho" class="col-md-7 col-xs-12 carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#nhatho" data-slide-to="0" class="active"></li>
					<li data-target="#nhatho" data-slide-to="1"></li>
					<li data-target="#nhatho" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="item active">
						<img src="images/img_nhatho.png" style="width:100%; height: 30vw">
					</div>

					<div class="item">
						<img src="images/img_nhatho2.png" style="width:100%; height: 30vw">
					</div>

					<div class="item">
						<img src="images/img_nhatho3.png" style="width:100%; height: 30vw">
					</div>
				</div>
				<a class="left carousel-control" href="#nhatho" data-slide="prev">
					<span class="glyphicon glyphicon-chevron-left"></span>
				</a>
				<a class="right carousel-control" href="#nhatho" data-slide="next">
					<span class="glyphicon glyphicon-chevron-right"></span>
				</a>
			</div>
		</div>
	</div>
	</div><br><hr>
	<footer class="container">
		<div class="col-md-4 col-xs-12 bg type14" >
			<img src="images/logo_hanoi.png" style="width: 100%; height: 100%;"><br><br><br>
		</div>
		<div class="col-md-4 col-xs-12 bg type15" >
			<span style="font-size: 17px;"><b>サポート＆お問い合わせ</b></span><br><br>
			<div>
				<a href="#"><img src="images/ic_fb.png"></a>
				<a href="#"><img src="images/ic_tw.png"></a>
				<a href="#"><img src="images/ic_gg.png"></a>
			</div>
		</div>
		<div class="col-md-4 col-xs-12 type16">
			<span style="font-size: 17px;"><b><center>現住所</center></b></span>
			<span style="font-size: 16px;font-family: Calibri;padding-top: 7px; padding-bottom: 7px;">20 Ho Tung Mau, Cau Giay District, Ha Noi</span><br>
			<br>
			<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d3723.869840539301!2d105.77870663677062!3d21.037893389714146!3m2!1i1024!2i768!4f13.1!5e0!3m2!1svi!2s!4v1637650623408!5m2!1svi!2s" class="col-md-12 col-xs-12" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
		</div>
		<div class="lastbg">
			<center>DESIGNED BY @TUANPN.TB NO COPY RIGHT</center>
		</div>
	</footer>
	</div>
	<script type="text/javascript">
		var mybutton = document.getElementById("topBtn");
		window.onscroll = function() {scrollFunction()};
		function scrollFunction() {
			if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
				mybutton.style.display = "block";
			} else {
				mybutton.style.display = "none";
			}
		}

		function topFunction() {
			document.body.scrollTop = 0;
			document.documentElement.scrollTop = 0;
		}
	</script>
</body>
</html>