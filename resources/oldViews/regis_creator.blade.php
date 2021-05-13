<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="public/style/css/styledraft.css" rel="stylesheet" >
<title>Sign Up Beli.in</title>
<link rel="shortcut icon" type="image/x-icon" href="public/style/assets/iconOnly.ico" />
</head>

<body>
  <div class="atas">

    <div class="judul1" onclick="openCity(event, 'beranda')" id="defaultOpen"><img class="namaatas" src="public/style/assets/LogoIcon.png"> </div>
    
</div>

<div class="isi">
<div class="tempatstep">
<div class="container">
      <ul class="progressbar">
          <li  class="step1 active" id="defaultOpen" >Memilih Kreator</li>
          <li  class="step2 kondisi" >Buat Link</li>
          <li  class="step3 kondisi" >Pembayaran</li>
         
  </ul>
  </div>
  </div>

	<div class="panel" id="step1">

		<div class="kotaklink">
				<div class="spasi40"></div>
					<span class="judulatas">Buat Link Anda</span>	
					<div class="spasi20"></div>
					<span class="subjudul">Buat link untuk halaman anda <br>agar mudah dibagikan</span><br>
				<div class="oval">
					<div class="text">
					<span class="ico"></span>beli.in/<input type="text" placeholder="yourname"></input>
					</div>
				</div>
			<div class="button" onclick="openCity2(event, 'step2')"> Continue</div>
		</div>
		</div>

		<div class="panel" id="step2">
			
		<div class="kotakpaypal">
			<div class="spasi40"></div>
					<span class="judulatas">Metode Pembayaran</span>	
					<div class="spasi20"></div>
					<span class="subjudul2">Pilih metode pembayaran untuk menerima donasi <br>dari supporter</span><br>
				<div class="buttonpay">
					<div class="textpaypal">
					<span class="ovo"></span>OVO
					</div>
				</div>
				<div class="buttonpay">
					<div class="textpaypal">
					<span class="gopay"></span>GOPAY
					</div>
				</div>
				<div class="buttonpay">
					<div class="textpaypal">
					<span class="dana"></span>DANA
					</div>
				</div>
			<div class="button" onclick="openCity3(event, 'step3')"> Next</div>
		</div>
		</div>
	
    <div class="panel" id="step3">
      <div class="kotaklink">
      <div class="spasi40"></div>
      <div class="spasi40"></div>
      <div class="spasi40"></div>
      <span class="judulatas">Pendaftaran Berhasil!</span>
      <div class="spasi40"></div>
      <div class="spasi40"></div>
      <div class="button" onclick="openCity(event,'profil')"> Ke Halaman Saya</div>
    </div>
    </div>
		
</div>


<script>
  // tombol mengganti isi konten
function openCity1(evt, cityName) {
  var i, panel, tombolatas;
  panel = document.getElementsByClassName("panel");
  for (i = 0; i < panel.length; i++) {
    panel[i].style.display = "none";
  }
  tombolatas = document.getElementsByClassName("step1");
  for (i = 0; i < tombolatas.length; i++) {
    tombolatas[i].className = tombolatas[i].className.replace(" kondisi", " active");
  }
  tombolatas = document.getElementsByClassName("step2");
  for (i = 0; i < tombolatas.length; i++) {
    tombolatas[i].className = tombolatas[i].className.replace(" active", " kondisi");
  }
   tombolatas = document.getElementsByClassName("step3");
  for (i = 0; i < tombolatas.length; i++) {
    tombolatas[i].className = tombolatas[i].className.replace(" active", " kondisi");
  }
  document.getElementById(cityName).style.display = "block";
  document.getElementById(step2).addclass = " active";
  this.classList.toggle("active");
}



</script>
<script>
  // tombol mengganti isi konten
function openCity2(evt, cityName) {
  var i, panel, step3;
  panel = document.getElementsByClassName("panel");
  for (i = 0; i < panel.length; i++) {
    panel[i].style.display = "none";
  }
  tombolatas = document.getElementsByClassName("step1");
  for (i = 0; i < tombolatas.length; i++) {
    tombolatas[i].className = tombolatas[i].className.replace(" kondisi", " active");
  }
  tombolatas = document.getElementsByClassName("step2");
  for (i = 0; i < tombolatas.length; i++) {
    tombolatas[i].className = tombolatas[i].className.replace(" kondisi", " active");
  }
   tombolatas = document.getElementsByClassName("step3");
  for (i = 0; i < tombolatas.length; i++) {
    tombolatas[i].className = tombolatas[i].className.replace(" active", " kondisi");
  }
  document.getElementById(cityName).style.display = "block";
  document.getElementById(step2).addclass = " active";
  this.classList.toggle("active");
}



</script>
<script>
  // tombol mengganti isi konten
function openCity3(evt, cityName) {
  var i, panel, step3;
  panel = document.getElementsByClassName("panel");
  for (i = 0; i < panel.length; i++) {
    panel[i].style.display = "none";
  }
  tombolatas = document.getElementsByClassName("step1");
  for (i = 0; i < tombolatas.length; i++) {
    tombolatas[i].className = tombolatas[i].className.replace(" kondisi", " active");
  }
  tombolatas = document.getElementsByClassName("step2");
  for (i = 0; i < tombolatas.length; i++) {
    tombolatas[i].className = tombolatas[i].className.replace(" kondisi", " active");
  }
   tombolatas = document.getElementsByClassName("step3");
  for (i = 0; i < tombolatas.length; i++) {
    tombolatas[i].className = tombolatas[i].className.replace(" kondisi", " active");
  }
  document.getElementById(cityName).style.display = "block";
  document.getElementById(step2).addclass = " active";
  this.classList.toggle("active");
}


//Auto buka yang default
document.getElementById("defaultOpen").click();


</script>