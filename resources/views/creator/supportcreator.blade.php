<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="{{ asset('style/css/stylesupport.css') }}" >
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans:wght@100;400&family=Salsa&display=swap" rel="stylesheet">
    <title>{{ $creator->name }}</title>
</head>

<body>
    <nav class="navbar fixed-top justify-content-between">
        <div class="logo">
            <img src="{{ asset('style/assets/logo.svg') }}" width="40" height="" class="d-inline-block align-top" alt="">
            <a class="brand" href="#">
             Beli.in
        </a>
        </div>
        <a class="profile" href="#">
            <img src="{{ asset('style/assets/profile.svg') }}" width="40" height="" class="d-inline-block align-top" alt="">
        </a>
    </nav>

    <div class="wrapper">
      
        <div class="main">
		
		<div class="card card-info">
                <div class="post">
                    <div class="avatar profile-avatar">
                        <a href="">
                            <img src="https://picsum.photos/50/50" >
                        </a>
                    </div>
                    <div class="profile-info">
				
                        <div class="large kiri">
                            {{ $creator->name }}
							
                        </div>
                        <div class="handle">
                            <a href="">@ {{ $creator->page_slug }}</a>
							</div>
		
                        <div class="tentang">
						<p>{{ $creator->description }}</p>
						</div>
						<div class="jmlSupporter">
						{{ count($supporters )}} Supporter
						</div>
                       <div class="buttonplace">
					<button class="btn support" onclick="openNav()" type="submit">Support</button>

					@if (Auth::user() != null)
						@if (Auth::user()->id == $creator->id)
							<button class="btn following" ID="followbtn" type="submit" disabled>Follow</button>
						@elseif (App\Models\Follow::where([['follower', Auth::user()->id], ['followed', $creator->id]])->first() != null) 
							<button class="btn following" ID="followbtn" type="submit" disabled>Follow</button>
						@else
							<form method="POST" action="/follow/{{$creator->id }}">
								@csrf
								<button class="btn following" ID="followbtn" type="submit">Follow</button>
							</form>
						@endif
						@else
							<form method="POST" action="/follow/{{$creator->id }}">
								@csrf
								<button class="btn following" ID="followbtn" type="submit">Follow</button>
							</form>
					@endif
					
					</div> 
                    </div>
					
                </div>
		</div>
		</div>
		
		<div class="tengah">
		<div class="mainleft">
		<div class="card-post-karya">
            <div class="post">
               
                <div class="profile-info">
                    
                    <div class="media">
                        <img width="90%" src={{ asset('style/assets/image-post.PNG') }} alt="">
                    </div>
					
					<div class="post-judul">
                        <p>Celengan rindu - Fiersa Besari (Feby Cover) </p>
                    </div>
					<div class="post-text">
					<p>Selamat menikmati:) Mohon support nya ya!</p>
					</div>
                </div>
            </div>

            <hr class="divider">

            <div class="action">
                    <a href="">
                        <svg width="30" height="" viewBox="0 0 45 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M11.9092 3.01641C8.56061 3.4375 5.16803 5.57735 3.14654 8.55079C1.63482 10.7766 0.958067 12.9938 0.958067 15.7523C0.949278 18.7602 1.91607 21.6992 3.8233 24.5438C7.37408 29.8375 12.5772 34.5984 20.3555 39.6859C22.0342 40.7773 22.5704 41.0781 22.834 41.0781C23.0186 41.0781 25.9366 39.1961 27.7032 37.9414C30.542 35.9047 33.8907 33.232 36.0176 31.2898C37.1338 30.2672 38.8038 28.5055 39.7881 27.3109C41.8975 24.75 43.6465 21.4156 44.1739 18.9492C44.3057 18.3305 44.3409 17.8234 44.3409 16.4141C44.3321 14.7984 44.3145 14.5664 44.086 13.6297C42.8292 8.3875 39.2081 4.39141 34.6465 3.20547C33.8995 3.00782 33.6094 2.98203 32.3438 2.97344C31.1221 2.96485 30.7442 2.99922 29.9883 3.1625C27.6504 3.67813 25.5147 4.675 23.3702 6.27344L22.7022 6.77188L22.1397 6.3336C18.8526 3.80703 15.1612 2.6125 11.9092 3.01641ZM33.7588 4.42579C36.545 4.89844 39.1817 6.76328 40.9395 9.4961C41.8008 10.8453 42.5831 12.8563 42.8467 14.4289C43.0665 15.7094 42.9962 17.7547 42.6797 18.9664C41.4317 23.8133 36.668 29.6141 29.5313 34.9852C27.712 36.3516 22.9747 39.5313 22.7549 39.5313C22.6495 39.5313 21.1817 38.5773 19.7315 37.5719C15.4073 34.5555 10.4151 30.3703 7.98932 27.7063C6.06451 25.6008 4.84283 23.8992 3.83209 21.9141C2.67193 19.6367 2.25006 18.0383 2.25006 15.9414C2.25006 14.5492 2.39068 13.6641 2.78619 12.4266C4.09576 8.37032 7.74322 5.14766 11.7774 4.50313C12.7442 4.33985 14.335 4.39141 15.3282 4.59766C17.4376 5.03594 19.5557 6.07578 21.5948 7.67422C22.6407 8.48203 22.9483 8.51641 23.6426 7.86329C24.5567 7.0125 26.1915 5.93829 27.334 5.43985C28.5469 4.90704 29.9971 4.49453 31.1573 4.35703C31.8165 4.2711 33.0909 4.30547 33.7588 4.42579Z" fill="#FF686B"/>
                        </svg> 123
                    </a>
                </div>
            </div>

		</div>
		<div class="mainright">
		<div class="card-post-donasi">
                
					<div class="card-donasi">
					<p class="center">Beliin {{ $creator->name }} </p>
					
				
						<div class="donasi">
							<div class="itemdonasi kopi" id="1">
							</div>
							<div class="itemdonasi donat" id="2">
							</div>
							<div class="itemdonasi boba" id="3">
							</div>
							<div class="itemdonasi teh" id="4">
							</div>
						</div>				
					
					<form class="formdonasi">
					<div class="row">
						<div class="form-info-donasi">
						  <label for="fname">Jumlah</label>
						</div>
						<div class="col-60">
						  <input type="text" id="fname" name="jumlah">
						</div>
					</div>
					<div class="row">
						<div class="form-info-donasi">
						  <label for="fname">Harga</label>
						</div>
						<div class="col-60">
						  <input type="text" id="fname" name="harga" disabled value="harga" >
						</div>
					</div>
					
					</form>
					   
					<div class="buttonbawah">
					<button class="btn supportbesar" onclick="openNav()" type="submit">Support</button>
					</div>
					</div>
					
		</div>
		</div>
		</div>
		

<div id="myNav" class="overlay" >
<div class="card-overlay" >
  <a href="javascript:void(0)"  class="closebtn" onclick="closeNav()" >&times;</a>
  <div class="overlay-content">
    <div class="card-overlay">
					<h3 class="center">Kamu Beliin {{ $creator->name }} </h3>
					
					<div class="formdonasi">
					<div class="row">
					</div>
					<div class="donasi">
						<div class="itemdonasi kopi" id="1">
						
						</div>
						<div class="itemdonasi donat" id="2">
						</div>
						<div class="itemdonasi boba" id="3">
						</div>
						<div class="itemdonasi teh" id="4">
						</div>
					</div>				
				
				<form class="formdonasi">
				<div class="row">
					<div class="form-info-donasi">
					  <label for="fname">Jumlah</label>
					</div>
					<div class="col-60">
					  <input type="text" id="fname" name="jumlah">
					</div>
				</div>
				<div class="row">
					<div class="form-info-donasi">
					  <label for="fname">Harga</label>
					</div>
					<div class="col-60">
					  <input type="text" id="fname" name="harga" disabled value="harga" >
					</div>
				</div>
					<p> Pilih metode Pembayaran </p>
					<button class="metode ovo">
					OVO
					</button>
					<button class="metode gopay">
					Go-Pay
					</button>
					<button class="metode dana">
					Dana
					</button>
					<button class="btn supportmedium" onclick="openNavSukses()" type="submit">Support</button>
					
					
					</div>
  </div>
</div>
</div>	
</div>

<div id="myNavSukses" class="overlay">
<div class="card-overlay">

  <div class="overlay-content">
    <div class="card-overlay">
					<p class="center">Terimakasih Sheila ! </p>
					<p class="center">Kamu sudah Beli.In Feby Putri Seharga 20.000</p>
				
					
					
					
				
					<button class="btn supportmedium" onclick="closeNav()" type="submit">Kembali</button>
					
					
					
  </div>
</div>
</div>	
</div>
		<script>
$('#followbtn').click(function(){
   $(this).toggleClass('active');
});
</script>

<script>
function openNav() {
  document.getElementById("myNav").style.display = "block";
}

function closeNav() {
  document.getElementById("myNav").style.display = "none";
  document.getElementById("myNavSukses").style.display = "none";
}

function openNavSukses() {
  document.getElementById("myNav").style.display = "none";
  document.getElementById("myNavSukses").style.display = "block";
}
</script>