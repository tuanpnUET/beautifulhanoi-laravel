<!DOCTYPE html>
<html>
<head>
	<title>ホーム</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script language="javascript" src="js/app.js"></script>
	<link rel="stylesheet" type="text/css" href="css/app.css">
</head>
<body>
	<div class="loader-wrapper">
		<div class="title">
			<div class="title-inner">
				<div class="adj">
					<div class="adj-inner">美しい</div>
				</div>
				<div class="hanoi">
					<div class="hanoi-inner">ハノイ</div>
				</div>
			</div>
		</div>
		<div class="image">
			<img src='../images/logo_hanoi2.png' alt=''>
		</div>
	</div>
	<button onclick="topFunction()" id="topBtn">トップ</button>
	<div>
		<header>
			<div style="position: relative; color: white; font-size: 6vw;"> 
				<img src="../../images/logo.png" class="logo" width="100%" height="60%">
				<div class="centered"><p>美しいハノイ</p></div>
			</div>
			<div class="bg_menu">
				<a style="text-decoration: unset;" class="type5 hov myTab" href="index">ホーム</a>
				<a style="text-decoration: unset;" class="type5 hov myTab" href="travel">観光地</a>
				<a style="text-decoration: unset;" class="type5 hov myTab" href="food">名物料理</a>
				<a style="text-decoration: unset;" class="type5 hov myTab" href="festival">お祭り</a>
				<a style="text-decoration: unset;" class="type5 hov myTab" href="transport">交通</a>
			</div>
		</header>
		<br><br>
		<div style="align-items: center; text-align: center;">
			<div class="container">
				<iframe class="col-md-12 col-xs-12 iframe" src="https://www.youtube.com/embed/74dgLjjXABk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen  controls autoplay style="margin-bottom: 20px"></iframe>
				<span class="type6"><b>ベトナムの首都ハノイ</b></span><br>
				<span class="type8">ベトナムの首都ハノイは、商業の中心地ホーチミンに次ぐベトナム第2の大都市。歴史や文化を大切に守ってきた街並みは、どこかノスタルジックで訪れる人を惹きつけてやみません。</span>
				<br>
			</div>
		</div>
		<br><br>
		<div >
			<div class="container" style="margin-top: 2px;">	
				<span class="col-md-4 col-xs-12">
					<span class="type6"><b>ハノイの観光スポット</b></span><br>
					<span class="type7">ホアンキエム湖｜玉山祠</span><br><br>
					<span class="type8">
						ハノイ市街の中心にある湖。湖畔は遊歩道になっていて、 市民の憩いの場 となっています。ホアンキエム湖に浮かぶ社、玉山祠へは橋を渡っていく事ができます。玉山祠には、13世紀に武将として活躍したチャン・フン・ダオや「三国志」の名将関羽など、文、武、医の神が祀られています。
					</span><br><br>
					<a href="travel.html" class="type9">もっと見る</a>
				</span>
				<span class="col-md-1"></span>
				<div id="thaprua1" class="col-md-7 col-xs-12 carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#thaprua1" data-slide-to="0" class="active"></li>
						<li data-target="#thaprua1" data-slide-to="1"></li>
						<li data-target="#thaprua1" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner">
						<div class="item active">
							<img src="../../images/img_thaprua.png" style="width:100%; height: 30vw" onClick="window.open(this.src)">
						</div>

						<div class="item">
							<img src="../../images/img_thaprua2.png" style="width:100%; height: 30vw">
						</div>

						<div class="item">
							<img src="../../images/img_thaprua3.png" style="width:100%; height: 30vw">
						</div>
					</div>
					<a class="left carousel-control" href="#thaprua1" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left"></span>
					</a>
					<a class="right carousel-control" href="#thaprua1" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right"></span>
					</a>
				</div>
			</div>
			<br><br>
			<div class="container">
				<div id="xichlo" class="col-md-7 col-xs-12 carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#xichlo" data-slide-to="0" class="active"></li>
						<li data-target="#xichlo" data-slide-to="1"></li>
						<li data-target="#xichlo" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner">
						<div class="item active">
							<img src="../../images/img_xichlo.png" style="width:100%; height: 30vw">
						</div>

						<div class="item">
							<img src="../../images/img_xichlo2.png" style="width:100%; height: 30vw">
						</div>

						<div class="item">
							<img src="../../images/img_xichlo3.png" style="width:100%; height: 30vw">
						</div>
					</div>
					<a class="left carousel-control" href="#xichlo" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left"></span>
					</a>
					<a class="right carousel-control" href="#xichlo" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right"></span>
					</a>
				</div>
				<span class="col-md-1"></span>
				<span class="col-md-4 col-xs-12">
					<span class="type6"><b>交通</b></span><br>
					<span class="type7">シクロ</span><br><br>
					<span class="type8">
						以前はベトナム庶民の一般的な交通手段でしたが、現在はあまり使われなくなってきています。あくまで風情を味わう観光の一つと考えるのが良いでしょう。
					</span><br><br>
					<a href="transport.html" class="type9">もっと見る</a>
				</span>
			</div>
			<br><br>
			<div class="container">
				<span class="col-md-4 col-xs-12">
					<span class="type6"><b>名物料理</b></span><br>
					<span class="type7">ブンチャーハノイ</span><br><br>
					<span class="type8">
						料理の名前にハノイとついているように、こちらはブンを使ったハノイ料理。ブンチャーのみの店名、料理名の場合もありますが、出てくるものは同じです。これは、いわばつけ麺。ブンを酢とヌクマムベースのスープにつけて食べます。具はつくね肉や野菜、かき揚げが定番。おいしいブンチャーを出す食堂は、昼時になると現地人で満席になります。彼らも大好きな料理なんですね。
					</span><br><br>
					<a href="food.html" class="type9">もっと見る</a>
				</span>
				<span class="col-md-1"></span>
				<div id="buncha" class="col-md-7 col-xs-12 carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#buncha" data-slide-to="0" class="active"></li>
						<li data-target="#buncha" data-slide-to="1"></li>
						<li data-target="#buncha" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner">
						<div class="item active">
							<img src="images/img_buncha.png" style="width:100%; height: 30vw">
						</div>

						<div class="item">
							<img src="images/img_buncha2.png" style="width:100%; height: 30vw">
						</div>

						<div class="item">
							<img src="images/img_buncha3.png" style="width:100%; height: 30vw">
						</div>
					</div>
					<a class="left carousel-control" href="#buncha" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left"></span>
					</a>
					<a class="right carousel-control" href="#buncha" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right"></span>
					</a>
				</div>
			</div>
			<br><br>
			<div class="container" style="margin-top: 2px;">
				<div id="battrang" class="col-md-7 col-xs-12 carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#battrang" data-slide-to="0" class="active"></li>
						<li data-target="#battrang" data-slide-to="1"></li>
						<li data-target="#battrang" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner">
						<div class="item active">
							<img src="images/img_battrang.png" style="width:100%; height: 30vw">
						</div>

						<div class="item">
							<img src="images/img_battrang2.png" style="width:100%; height: 30vw">
						</div>

						<div class="item">
							<img src="images/img_battrang3.png" style="width:100%; height: 30vw">
						</div>
					</div>
					<a class="left carousel-control" href="#battrang" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left"></span>
					</a>
					<a class="right carousel-control" href="#battrang" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right"></span>
					</a>
				</div>	
				<span class="col-md-1"></span>
				<span class="col-md-4 col-xs-12">
					<span class="type6"><b>お祭り</b></span><br>
					<span class="type7"><b>バッチャンのお祭り</b></span><br><br>
					<span class="type8">
						祭りでは、伝統的な陶器村の技術と芸術性をたたえて、職人らが作ったバッチャン陶器の作品150点が展示された。
						また、今回はシルクで有名なバンフック村のほか、フンサの織物村、サキエウの線香村、ダシの鍛造村、春雨作りが有名なクダ村、アンズオン（ハイフォン）の刺しゅう村などが参加した。
						それぞれの作品が提供されたほか、各地の独特の音楽や舞踊なども披露され、各村が手工芸と観光の両面をアピールした。
					</span><br><br>
					<a href="festival.html" class="type9">もっと見る</a>
				</span>	
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