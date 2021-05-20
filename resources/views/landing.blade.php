<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('style/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('style/css/pagescroll.css') }}" />
    <link rel="icon" type="image/x-icon" href="{{ asset('style/assets/iconOnly.ico') }}" />
</head>

<body>
    <title>Beli.in</title>
    <div class="atas">

        <a href="/"><div class="judul1" onclick="openCity(event, 'beranda')" id="defaultOpen">
            <img class="namaatas" src="{{ asset('style/assets/LogoIcon.png') }}">
        </div></a>
        <a href="/register"><div class="tombolatas masuk"> Daftar </div></a>
        <a href="/login"><div class="tombolatas login"> Masuk </div></a>

    </div>
    <button href></button>
    <div class="panel latarmap" id="beranda">
        <div id="pagescroll">
            <div class="section pertama">
                <div class="tablatar">
                    Dapatkan Penghasilan dari Hasil<br>
                    Kreatifitasmu
                </div>
                <div class="minitablatar">
                    Cara mudah dan gratis mendapatkan donasi<br>
                    langsung dari penggemarmu !
                </div>
                <a href="/register"><div class="mulai">
                    Mulai
                </div></a>
                <!--
   <div class="tablatarbawah">
    <div class="roundpanel"> 
     <div class="kiri">
     beli.in/<Span class="tosca">yourname</span> 
     </div>
     <div class="kanan" onclick="openCity(event, 'register')">
     Mulai
     </div>
    </div>
   </div> //-->





            </div>
            <div class="section kedua">
                <div class="tengahatas">
                </div>
                <div class="tablatar">
                    Tentang
                </div>

                <div class="minitablatar">
                    Aplikasi yang menyediakan wadah bagi para kreator Indonesia untuk <br>
                    memposting karya mereka di platform ini sekaligus menjadi jembatan para <br>
                    kreator dengan para penggemar/supporter. Melalui aplikasi ini, penggemar bisa<br>
                    beli.in sesuatu (kopi/teh/makanan minuman lainnya) kepada kreator favoritnya. <br>
                    Beliin sesuatu disini maksudnya adalah sebagai bentuk donasi.
                </div>


            </div>
            <div class="section ketiga">
                <div class="tengahatas">
                </div>
                <div class="tablatar3">
                    Kreator
                </div>

                <div class="minitablatar3">
                    Buat akun sebagai kreator posting karya-karya<br>
                    terbaikmu, dan penggemarmu akan men-support<br>
                    kamu dengan beli.in makanan/minuman sebagai <br>
                    bentuk donasi!
                </div>

            </div>
            <div class="section keempat">
                <div class="tengahatas">
                </div>
                <div class="tablatar4">
                    Supporter
                </div>

                <div class="minitablatar4">
                    Buat akun sebagai supporter, nikmati karya-karya<br>
                    kreator favoritmu, dan support mereka dengan<br>
                    beli.in makanan/minuman sebagai bentuk<br>
                    dukunganmu!
                </div>
            </div>

            <div class="section footer">
                <div class="tablatarfooter">
                    -Oke Team Project PPL 2021-
                </div>

                <div class="minitablatarfooter">
                    Aplikasi ini dibuat untuk memenuhi tugas mata kuliah PPL <br>
                    Adapun divisi perbagiannya adalah : <br>
                    <table class="tableteam">
                        <tr>
                            <td><img class="team" src={{ asset('style/assets/sarah.PNG') }}></td>
                            <td><img class="team" src={{ asset('style/assets/Sheila.PNG') }}></td>
                            <td><img class="team" src={{ asset('style/assets/Raissa.PNG') }}></td>
                            <td><img class="team" src={{ asset('style/assets/yosua.jpg') }}></td>
                            <td><img class="team" src={{ asset('style/assets/nazmi.jpg') }}></td>
                        </tr>
                        <tr>
                            <td>Sarah</td>
                            <td>Sheila</td>
                            <td>Raissa</td>
                            <td>Yoshua</td>
                            <td>Nazmi</td>
                        </tr>
                        <tr>
                            <td>Project Manager</td>
                            <td>UI/UX Designer</td>
                            <td>Front End</td>
                            <td>Front End</td>
                            <td>Back End</td>
                        </tr>
                    </table>
                </div>

            </div>
        </div>
    </div>



    <!-- Login-->
    <!--
 <div class="panel selainmap" id="login">
  
   <div id="formContent">

    
     
    <div id="formlogin">
     <div class="formplace">
     <div class="judul">
      Masuk
     </div>
     
     <div class="input">
     
     <form>
       <span class="forminfo">E-mail </span><br>
       <input type="text" id="Name" name="Name" >
       <span class="forminfo">Password </span><br>
       <input type="password" id="password" name="login" >
       <div class="spasi"></div>
       <input type="submit" value="Masuk">
      </form>
     </div>
     
     <h4>Belum mempunyai akun? <br>  <a onclick="openCity(event, 'register')"> Daftar </a></h4>
     
    </div>
  </div>
  </div>
  </div>
  <div class="panel selainmap" id="register">
   
   <div id="formContent">

    
     
    <div id="formregister">
     <div class="formplace">
     <div class="judul">
      Daftar	
     </div>
     <div class="input">
     <form action="opsisignup.html">
 <span class="forminfo">E-mail </span><br>
 <input type="text" id="Name" name="Name" >
  <span class="forminfo">Password </span><br>
      <input type="password" id="password" name="login" >
 <div class="spasi"></div>
      <input type="submit"  value="Daftar" href="opsilogin">
    </form>
 
     <h4>Sudah mempunyai akun ? <br> <a onclick="openCity(event, 'login')"> Masuk</a></h4>
    
    </div>
    </div>
  </div>
  </div>
  </div>

 -->
    <!-- akhir login-->


    <script src={{ asset('style/js/pagescroll.js') }}></script>
    <script>
        new PageScroll('#pagescroll', {
            // Options goes here
        })

    </script>
    <!--
  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-46156385-1', 'cssscript.com');
  ga('send', 'pageview');

</script>

<script>
  // tombol mengganti isi konten
function openCity(evt, cityName) {
  var i, panel, tombolatas;
  panel = document.getElementsByClassName("panel");
  for (i = 0; i < panel.length; i++) {
    panel[i].style.display = "none";
  }
  tombolatas = document.getElementsByClassName("tombolatas");
  for (i = 0; i < tombolatas.length; i++) {
    tombolatas[i].className = tombolatas[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
  this.classList.toggle("active");
}

//Auto buka yang default
document.getElementById("defaultOpen").click();


</script>
-->
</body>

</html>
