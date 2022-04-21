<!DOCTYPE html>
<html>
<head>
	<title>ハノイの名物料理</title>
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
				<img src="images/logo.png" class="logo" width="100%" height="60%">
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
					<a href="https://licolicotravel.com/ngongarden/">
						<img src="images/img_adsnhahang.png" width="200hw" height="150vw" class="ads"/>
					</a>
					<a href="https://taikirung.com/hanoi_chopsticks/">
						<img src="images/img_adsnhahang1.png" width="200hw" height="150vw" class="ads"/>
					</a>
					<a href="https://licolicotravel.com/ngongarden/">
						<img src="images/img_adsnhahang.png" width="200hw" height="150vw" class="ads"/>
					</a>
					<a href="https://taikirung.com/hanoi_chopsticks/">
						<img src="images/img_adsnhahang1.png" width="200hw" height="150vw" class="ads"/>
					</a>
					<a href="https://licolicotravel.com/ngongarden/">
						<img src="images/img_adsnhahang.png" width="200hw" height="150vw" class="ads"/>
					</a>
				</marquee>
				<br><br>
			</div>
			<div class="container">
				<span class="type6"><b>ハノイの名物料理</b></span>
				<br><br>
			</div>
			<div class="container" style="margin-top: 2px;">	
				<span class="col-md-4 col-xs-12">
					<span class="type7"><b>ブンチャーハノイ</b></span><br><br>
					<span class="type8">
						ベトナム料理は、フォー（pho）が有名ですが、北部のハノイでフォーと同じくらいに好まれている麺料理がブンチャー（Bun Cha）。これは、ベトナム風のつけ麵。ハノイ発祥の料理です。
						豚肉や肉だんごが入った甘辛いタレに、ブンと呼ばれる米麺や香草と一緒に混ぜ、豪快に食べるのがブンチャーの食べ方。ハノイに観光旅行に行ったなら、ぜひとも食べてみたい名物料理です。
					</span><br><br>
					<span class="type8"><b>名店:</b></span><br>
					<span class="type8">
						<a href="https://goo.gl/maps/kEHaL9gmcYbAC8Vd8">Ngoc Xuan Restaurant</a>: 朝7時〜16時30分 <br>
						<a href="https://goo.gl/maps/RmwUDd2MZAge4ZB68">Bun Cha Ta Hanoi</a>: 朝8時〜夜10時 <br>
						<a href="https://goo.gl/maps/N8ZZdpUnB5K2A44q7"> Bún Chả Tuyết</a>: 朝8時〜午後4時 <br>
					</span>
					<br><br>
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
			<div class="container">
				<div id="pho" class="col-md-7 col-xs-12 carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#pho" data-slide-to="0" class="active"></li>
						<li data-target="#pho" data-slide-to="1"></li>
						<li data-target="#pho" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner">
						<div class="item active">
							<img src="images/img_pho.png" style="width:100%; height: 30vw">
						</div>

						<div class="item">
							<img src="images/img_pho2.png" style="width:100%; height: 30vw">
						</div>

						<div class="item">
							<img src="images/img_pho3.png" style="width:100%; height: 30vw">
						</div>
					</div>
					<a class="left carousel-control" href="#pho" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left"></span>
					</a>
					<a class="right carousel-control" href="#pho" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right"></span>
					</a>
				</div>
				<span class="col-md-1"></span>
				<span class="col-md-4 col-xs-12 ">
					<span class="type7"><b>フォー</b></span><br><br>
					<span class="type8">
						続いてはベトナムの麺料理をご紹介。不動の人気メニューが「フォー」（Pho）。牛肉入りの「フォー・ボー」（Pho Bo）、鶏肉が入った「フォー・ガー」（Pho Ga）は定番の料理。どこでも食べることができます。約４万ドン（約200円）。
					</span><br><br>
					<span class="type8"><b>名店:</b></span><br>
					<span class="type8">
						<a href="https://g.page/Phothinloduc?share">フォーティン</a>: 朝6時〜夜8時30分 <br>
						<a href="https://goo.gl/maps/ibbkHeSvsmr6ZSE99">フォーザーチュエン</a>: 朝6時～夜8時半<br>
						<a href="https://goo.gl/maps/nPjAs1aSVHzyYnNq7">Mai Anh</a>: 朝5時～午後4時<br>
						<a href="https://goo.gl/maps/u2qfpfKczvYTtxUt8">フォーボー・リークオックスー</a>: 朝7時～夜10時（なくなり次第終了）<br>
					</span>
					<br><br>
				</span>
			</div>
			<br><br>
			<div class="container" style="margin-top: 2px;">	
				<span class="col-md-4 col-xs-12">
					<span class="type7"><b>チャーカー</b></span><br><br>
					<span class="type8">
						ハノイで外せないグルメが鍋料理のチャーカー（Cha Ca）。
						チャーカーの仕上げは、ハーブディルやネギをたっぷり加え、ブンと一緒に甘辛いつゆで食べます。白身魚はクセがなく、脂がのっています。ピーナッツの食感やマムトム（エビの発酵調味料）の濃厚さが相まって、とてもおいしい。
					</span><br><br>
					<span class="type8"><b>名店:</b></span><br>
					<span class="type8">
						<a href="https://goo.gl/maps/RBVuvtoSb76wwR4c8">チャーカーラヴォン</a>: 朝7時〜夜9時 <br>
						<a href="https://goo.gl/maps/ksQpLJnUSs7Tv22x6">チャーカーキンキー</a>: 朝10時半〜夜10時 <br>
						<a href="https://goo.gl/maps/B944socPkQVDyHGXA">キングチャーカー</a>: 朝9時〜〜夜10時 <br>
					</span>
					<br><br>
				</span>
				<span class="col-md-1"></span>
				<div id="chaca" class="col-md-7 col-xs-12 carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#chaca" data-slide-to="0" class="active"></li>
						<li data-target="#chaca" data-slide-to="1"></li>
						<li data-target="#chaca" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner">
						<div class="item active">
							<img src="images/img_chaca.png" style="width:100%; height: 30vw">
						</div>

						<div class="item">
							<img src="images/img_chaca2.png" style="width:100%; height: 30vw">
						</div>

						<div class="item">
							<img src="images/img_chaca3.png" style="width:100%; height: 30vw">
						</div>
					</div>
					<a class="left carousel-control" href="#chaca" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left"></span>
					</a>
					<a class="right carousel-control" href="#chaca" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right"></span>
					</a>
				</div>
			</div>
			<br><br>
			<div class="container">
				<div id="banhxeo" class="col-md-7 col-xs-12 carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#banhxeo" data-slide-to="0" class="active"></li>
						<li data-target="#banhxeo" data-slide-to="1"></li>
						<li data-target="#banhxeo" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner">
						<div class="item active">
							<img src="images/img_banhxeo.png" style="width:100%; height: 30vw">
						</div>

						<div class="item">
							<img src="images/img_banhxeo2.png" style="width:100%; height: 30vw">
						</div>

						<div class="item">
							<img src="images/img_banhxeo3.png" style="width:100%; height: 30vw">
						</div>
					</div>
					<a class="left carousel-control" href="#banhxeo" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left"></span>
					</a>
					<a class="right carousel-control" href="#banhxeo" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right"></span>
					</a>
				</div>
				<span class="col-md-1"></span>
				<span class="col-md-4 col-xs-12">
					<span class="type7"><b>バインセオ</b></span><br><br>
					<span class="type8">
						おいしい生春巻きが食べられるレストランが「クアンアンゴン」（Quan An Ngon）。ベトナム人に人気の有名店で、ベトナム全国の郷土料理を食べることができます。生春巻き（Goi Cuon）のエビは、ぷりぷりした食感。ピーナッツ入りの濃厚な甘ダレもたまらない。生春巻きは１本が２万ドン（約100円）。
					</span><br><br>
					<span class="type8"><b>名店:</b></span><br>
					<span class="type8">
						<a href="https://goo.gl/maps/F4KYCrBbzkjXC6U67">バインセオゾン</a>: 朝10時〜夜9時 <br>
						<a href="https://goo.gl/maps/B944socPkQVDyHGXA">Banh Xeo 7 Toi</a>: 朝7時半〜〜夜9時半 <br>
						<a href="https://goo.gl/maps/qstJgbkytEeRyozs9">Qun An Ngon</a>: 朝8時半〜夜10時 <br>
					</span>
					<br><br>
				</span>
			</div>
			<br><br>
			<div class="container" style="margin-top: 2px;">	
				<span class="col-md-4 col-xs-12 center">
					<span class="type7"><b>バインミー</b></span><br><br>
					<span class="type8">
						フランスパンのサンドイッチが「バインミー」（Banh Mi）。屋台の定番メニューです。ハノイ旧市街のカフェ「安南パーラー」では、ベトナムコーヒーやマンゴープリンがセットになった“バインミーセット”（写真）が女性観光客に人気。料金は９万ドン（約430円）。
					</span><br><br>
				</span>
				<span class="col-md-1"></span>
				<div id="banhmi" class="col-md-7 col-xs-12 carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#banhmi" data-slide-to="0" class="active"></li>
						<li data-target="#banhmi" data-slide-to="1"></li>
						<li data-target="#banhmi" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner">
						<div class="item active">
							<img src="images/img_banhmi.png" style="width:100%; height: 30vw">
						</div>

						<div class="item">
							<img src="images/img_banhmi2.png" style="width:100%; height: 30vw">
						</div>

						<div class="item">
							<img src="images/img_banhmi3.png" style="width:100%; height: 30vw">
						</div>
					</div>
					<a class="left carousel-control" href="#banhmi" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left"></span>
					</a>
					<a class="right carousel-control" href="#banhmi" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right"></span>
					</a>
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