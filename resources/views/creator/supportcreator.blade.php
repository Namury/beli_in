<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('style/css/stylesupport.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans:wght@100;400&family=Salsa&display=swap"
        rel="stylesheet">
    <title>{{ $creator->name }}</title>
</head>

<body>
    <nav class="navbar fixed-top justify-content-between">
        <div class="logo">
            <img src="{{ asset('style/assets/logo.svg') }}" width="40" height="" class="d-inline-block align-top"
                alt="">
            <a class="brand" href="/">
                Beli.in
            </a>
        </div>
        <a class="profile" href="/my-account">
            @if (Auth::user()->profile_picture != null)
                <img src='/{{ Auth::user()->profile_picture }}' width="" height="" class="d-inline-block align-top" alt="">
                
            @else
                <img src="{{ asset('style/assets/profile.svg') }}" width="" height="" class="d-inline-block align-top" alt="">
                
            @endif
        </a>
    </nav>

    <div class="wrapper">

        <div class="main">

            <div class="card card-info">
                <div class="post">
                    <div class="avatar profile-avatar">
                        <a href="">
                            @if ($creator->profile_picture != null)
                                <img src='/{{ $creator->profile_picture }}' width="" height="" class="d-inline-block align-top" alt="">
                                
                            @else
                                <img src="{{ asset('style/assets/profile.svg') }}" width="" height="" class="d-inline-block align-top" alt="">
                                
                            @endif
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
                            {{ count($supporters) }} Supporter
                        </div>
                        <div class="buttonplace">
                            <button class="btn support" onclick="openNav()" type="submit">Support</button>

                            @if (Auth::user() != null)
                                @if (Auth::user()->id == $creator->id)
                                    <button class="btn following" ID="followbtn" type="submit" disabled>Follow</button>
                                @elseif (App\Models\Follow::where([['follower', Auth::user()->id], ['followed',
                                    $creator->id]])->first() != null)
                                    <button class="btn following" ID="followbtn" type="submit" disabled>Follow</button>
                                @else
                                    <form method="POST" action="/follow/{{ $creator->id }}">
                                        @csrf
                                        <button class="btn following" ID="followbtn" type="submit">Follow</button>
                                    </form>
                                @endif
                            @else
                                <form method="POST" action="/follow/{{ $creator->id }}">
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
                @foreach ($posts as $post)
                    <div class="card-post-karya">

                        <div class="post">

                            <div class="profile-info">

                                <div class="media">
                                       
                                    @if ($post->image != null)
                                        <img width="90%" src='/{{ $post->image }}' alt="">
                                    @else
                                        <img width="90%" src={{ asset('style/assets/image-post.PNG') }} alt="">
                                    @endif
                                </div>

                                <div class="post-judul">
                                    <p>{{ $post->title }}</p>
                                </div>
                                <div class="post-text">
                                    <p>{!! $post->content !!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
            <div class="mainright">
                <div class="card-post-donasi">

                    <div class="card-donasi">
                        <p class="center">Beliin {{ $creator->name }} </p>

                        {{-- <div class="donasi">
							<div class="itemdonasi kopi" id="1">
							</div>
							<div class="itemdonasi donat" id="2">
							</div>
							<div class="itemdonasi boba" id="3">
							</div>
							<div class="itemdonasi teh" id="4">
							</div>
						</div> --}}

                        <form class="formdonasi" method="POST" action="/{{ $creator->page_slug }}/order">
                            @csrf
                            @foreach ($creator->items as $item)
                                <div class="row">
                                    <div class="col-60">
                                        @php
                                            $bg = ['teh', 'kopi', 'donat', 'boba'];
                                            $i = rand(0, count($bg) - 1);
                                            $selected_bg = "$bg[$i]";
                                        @endphp
                                        <div class="itemdonasi @php echo $selected_bg @endphp" id="1"></div>

                                    </div>u
                                    <div class="col-60">
                                        <label for="fname">{{ $item->name }}</label><br>
                                        <label for="fname">Rp. {{ $item->price }}</label>
                                    </div>
                                </div>
                            @endforeach
                            {{-- <div class="row">
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
					</div> --}}

                        </form>

                        <div class="buttonbawah">
                            <button class="btn supportbesar" onclick="openNav()" type="submit" target="_blank">Support</button>
                        </div>
                    </div>

                </div>
            </div>
        </div>


        <div id="myNav" class="overlay">
            <div class="card-overlay">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <div class="overlay-content">
                    <div class="card-overlay">
                        <h3 class="center">Kamu Beliin {{ $creator->name }} </h3>

                        <div class="formdonasi">
                            <div class="row">
                            </div>
                            {{-- <div class="donasi">
							<div class="itemdonasi kopi" id="1">
							
							</div>
							<div class="itemdonasi donat" id="2">
							</div>
							<div class="itemdonasi boba" id="3">
							</div>
							<div class="itemdonasi teh" id="4">
							</div>
						</div> --}}

                            <form class="formdonasi" method="POST" action="/{{ $creator->page_slug }}/order">
                                @csrf
                                @foreach ($creator->items as $item)
                                    <div class="row">
                                        <div class="col-60">
                                            <div class="itemdonasi @php echo $selected_bg @endphp" id="1"></div>
                                        </div>u
                                        <div class="col-60">
                                            <label for="fname">{{ $item->name }}</label><br>
                                            <label for="fname">Rp. {{ $item->price }}</label>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-info-donasi">
                                            <label for="fname">Jumlah</label>
                                        </div>
                                        <div class="col-60">
                                            <input type="number" id="fname" name="amount{{ $item->id }}" value=0
                                                required>
                                        </div>
                                    </div>
                                @endforeach
                                <input class="btn supportmedium" type="submit">
                            </form>
                            {{-- <div class="row">
							<div class="form-info-donasi">
							<label for="fname">Harga</label>
							</div>
							<div class="col-60">
							<input type="text" id="fname" name="harga" disabled value="harga" required>
							</div>
						</div> --}}
                            {{-- <p> Pilih metode Pembayaran </p>
							<button class="metode ovo">
							OVO
							</button>
							<button class="metode gopay">
							Go-Pay
							</button>
							<button class="metode dana">
							Dana
							</button> --}}
                            {{-- <button class="btn supportmedium" onclick="openNavSukses()" type="submit">Support</button> --}}



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
            $('#followbtn').click(function() {
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
