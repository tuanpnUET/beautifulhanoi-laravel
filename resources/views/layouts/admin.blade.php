<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script language="javascript" src="../../../js/app.js"></script>
    <link rel="stylesheet" type="text/css" href="../../../css/app.css">
</head>
<body>
	<div>
		<header>
			<div style="position: relative">  
				<img src="../../../images/logo.png" class="logo" width="100%" height="60%">
				<div class="centered"><p style='color: white; font-size: 6vw;'>美しいハノイ</p></div>
			</div>
		</header>
        @guest
            @if (Route::has('login'))
            <p style="font-size: 16px; padding-left: 20%; padding-top: 50px;">すでにアカウントをお持ちの場合は<a href="{{ route('login') }}" style="color: red">ログイン</a>ください。</p><br>
            @endif
            @if (Route::has('register'))
            <p style="font-size: 16px; padding-left: 20%">アカウントを持っていない方は<a href="{{ route('register') }}" style="color: red">こちらへ</a>。</p>
            @endif
        @else
        <div class="bg_menu">
            <a style="text-decoration: unset;" class="type5 hov myTab" href='<?php echo route('destination.index') ?>'>観光地の管理</a>
            <a style="text-decoration: unset;" class="type5 hov myTab" href='<?php echo route('category.index') ?>'>カテゴリーの管理</a>
            <a style="text-decoration: unset;" class="type5 hov myTab" href='<?php echo route('festival.index') ?>'>お祭りの管理</a>
            <a style="text-decoration: unset;" class="type5 hov myTab" href='<?php echo route('food.index') ?>'>料理の管理</a>
            <a style="text-decoration: unset;" class="type5 hov myTab" href='<?php echo route('vehicle.index') ?>'>車両の管理</a>
        </div>
        <br>
        <div class="container">
            <div>
                <p style="color: black; font-size: 16px;">Welcome {{ Auth::user()->name }}!</p>
                <button type="button" class="btn btn-default btn-sm" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="btn btn-info btn-lg">
                   <span class="glyphicon glyphicon-log-out"></span>ログアウト
               </button>
               <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
        </div><br>
        <div class="container" style="display: flex; align-content: center;">
            @yield('content-dashboard') 
        </div>
        @endguest
    <br><br><hr>
    <footer class="container">
     <div class="col-md-4 col-xs-12 bg type14" >
        <img src="../../../images/logo_hanoi.png" style="width: 100%; height: 100%;"><br><br><br>
    </div>
    <div class="col-md-4 col-xs-12 bg type15" >
        <span style="font-size: 17px;"><b>サポート＆お問い合わせ</b></span><br><br>
        <div>
           <a href="#"><img src="../../../images/ic_fb.png"></a>
           <a href="#"><img src="../../../images/ic_tw.png"></a>
           <a href="#"><img src="../../../images/ic_gg.png"></a>
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
</body>
</html>