<?php 
	include_once"lib/function.php";
 ?>
 <!DOCTYPE html>
<html>
<head>
	<title>Projek_chat</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<script type="text/javascript">
		$(function() {
			$('#top a').click(function() {
				var url = $(this).attr('href');
				$('#tampil_aksi').load(url);
				return false;
			});
		});
</script>
</head>
<body>
	<div class="top" id="top">
		<img src="img/search.png" style="width:39px; position:absolute; margin:0.8% 1%;">
		<input type="text" style="width:86%; height:35px;margin:1% 4%;border:none;padding-left:20px;color:#CCCCCC;font-size:18px;">
		<a  href="aksi_log.php" id="aksi_log" class="hover"><img class="img-top" src="img/login_user_profile_account-512.png" style="border:0px solid rgb(87, 82, 72);width:25px;height:25px; margin:2% 0.5%;"><a href="" style="margin:0px -2%;"></a></a>
					<img class="img-top" src="img/maxresdefault (1).jpg" style=""><a href="" style="margin:0px -2%;"></a>
					<div id="tampil_aksi"></div>>		 
	</div>
	<div id="advance">
		<div id="header">
			<div class="bottom">
				<img class="sampul" src="img/maxresdefault (1).jpg" style="">
			</div>
			<img src="img/maxresdefault (1).jpg" style="" class="front-cover">
		</div>
		<div id="menu">
		<div id="icon_tombol">
			<ul><li><a href=""><img src="img/boy-51212.png" style=""><img class="hidden" src="img/boy-5121.png">Profil</a></li>
				<li><a href="" ><img src="img/users-checked-user-icon.png"><img class="hidden" src="img/users-checked-user-icon1.png">Friendship</a></li>
				<li><a href=""><img src="img/kte1386968391114_00001_in-id.png"><img class="hidden" src="img/kte1386968391114_00001_in-id1.png">Massage</a></li>
				<li><a href=""><img src="img/12.png"><img class="hidden" src="img/121.png">Riquest</a></li>
				<li><a href=""><img src="img/faq-icon.png"><img class="hidden" src="img/faq-icon1.png">Info</a></li>
				<li><a href=""><img src="img/gallery_2-512.png"><img class="hidden" src="img/gallery_2-5121.png">Galery</a></li>
				<li><a href="" ><img src="img/earth-23543_6401.png" ><img class="hidden" src="img/earth-23543_640.png">Notice</a></li>
				
			</ul>
		</div>
		<div id="tombol">
			<!-- <ul>
				<li><a href="">Profil</a></li>
				<li><a href="">Profil</a></li>
				<li><a href="">Profil</a></li>
			</ul> -->
		</div>
		</div>
		<div id="content">
			<div class="content_1">
				<img src="img/2016-01-08_150839.jpg" style="">
				<h4 style="float:left;margin:1% 0%;"><a href="" class="name">Krisnanto</a></h4>
				<h4 style="float:right;margin:1% 2%;color:#A2A2A2;font-family:calibri;">12/12/1997 90:19</h4>
				<p class="isi" style="">
				</p>
				<div class="action">
					<h4 class="komen" style=" float:right;margin:29px -19%; width:11%;font-family:calibri;"><a href="" ><em>Komentar</em></a></h4>
				</div>
			</div>
			<div class="content_2">
				<h4 style="padding:7px 3%; width:94%;font-family:calibri;border-bottom:1px solid rgba(162, 162, 162, 0.25);color:#A2A2A2;">Teman aktif</h4>
				<li><img class="friend" src="img/2016-01-08_150839.jpg"><a href="">Galery</a></li>
				<li><img class="friend" src="img/2016-01-08_150839.jpg"><a href="">Galery</a></li>
				<li><img class="friend" src="img/2016-01-08_150839.jpg"><a href="">Galery</a></li>
				<li><img class="friend" src="img/2016-01-08_150839.jpg"><a href="">Galery</a></li>
				<li><img class="friend" src="img/2016-01-08_150839.jpg"><a href="">Galery</a></li>
				<li><img class="friend" src="img/2016-01-08_150839.jpg"><a href="">Galery</a></li>
				
			</div>
		</div>
	</div>
	<div id="footer"></div>
</body>
</html>
