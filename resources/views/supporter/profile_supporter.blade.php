<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('style/css/styles.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans:wght@100;400&family=Salsa&display=swap" rel="stylesheet">
    <title>Profile</title>
</head>

<body>
    <nav class="navbar fixed-top justify-content-between">
        <div class="logo">
            <img src="{{ asset('style/assets/logo.svg') }}" width="" height="" class="d-inline-block align-top" alt="">
            <a class="brand" href="#">
             Beli.in
        </a>
        </div>
        <div class="profile-side">
            <div>
            <a class="profile" href="#">
                @if (Auth::user()->profile_picture != null && file_exists(Auth::user()->profile_picture))
                    <img src='/{{ Auth::user()->profile_picture }}' width="" height="" class="d-inline-block align-top" alt="">
                    
                @else
                    <img src="{{ asset('style/assets/profile.svg') }}" width="" height="" class="d-inline-block align-top" alt="">
                    
                @endif
            </a>
            </div>
            <div class="sidebar-toggle">
                <input type="checkbox">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </nav>

    <div class="wrapper">

        <nav class="sidebar">
            <ul class="list-unstyled components">
                <li class="homepage">
                    <a href="/homepage"><svg width="" height="" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M24.0625 3.70119C23.7792 3.82815 20.7714 6.82619 12.9296 14.7949C7.0312 20.791 2.09956 25.8594 1.98237 26.0547C1.47456 26.8848 1.63081 27.9785 2.35347 28.7012C3.03706 29.3848 4.01362 29.5313 4.89253 29.0918C5.10737 28.9844 8.83784 25.2637 14.1503 19.8535C19.0527 14.8731 23.2519 10.625 23.496 10.4297C24.2187 9.83401 25.0878 9.71682 25.9179 10.1074C26.1523 10.2246 29.4042 13.4668 35.4101 19.5703C42.3925 26.6699 44.6582 28.9258 45.0488 29.1309C45.4882 29.375 45.6347 29.4043 46.1425 29.3653C46.8945 29.3067 47.4804 29.0137 47.8515 28.4961C48.4082 27.7344 48.4668 26.8067 48.0175 26.0645C47.9003 25.8594 44.3359 22.168 40.0976 17.8516C27.7343 5.27346 26.3574 3.89651 25.9277 3.70119C25.4199 3.46682 24.58 3.46682 24.0625 3.70119Z" fill="black"/>
                        <path d="M24.4336 13.3984C24.3066 13.4668 20.6445 17.1484 16.2988 21.5723L8.39844 29.6191V37.6562C8.39844 43.2324 8.42773 45.7617 8.50586 45.9277C8.56445 46.0547 8.73047 46.2305 8.88672 46.3184C9.13086 46.4648 9.69727 46.4844 14.6191 46.4844C19.502 46.4844 20.0977 46.4648 20.3027 46.3281C20.791 45.9863 20.8008 45.8496 20.8008 40.957V36.4062L21.1328 36.0742L21.4648 35.7422H25H28.5352L28.8672 36.0742L29.1992 36.4062V40.957C29.1992 45.8496 29.209 45.9863 29.6973 46.3281C29.9023 46.4648 30.498 46.4844 35.3711 46.4844C39.0723 46.4844 40.8887 46.4551 41.0449 46.377C41.1719 46.3184 41.3477 46.1523 41.4355 45.9961C41.5918 45.7422 41.6016 45.0098 41.6016 37.6758V29.6387L38.7402 26.7578C37.168 25.1758 33.5449 21.5137 30.6934 18.6133C25.6055 13.457 25.498 13.3594 25.0879 13.3105C24.8438 13.291 24.5605 13.3301 24.4336 13.3984Z" fill="black"/>
                    </svg>
                    Homepage</a>
                </li>
                <li class="explore">
                    <a href="/explore">
                        <svg width="" height="" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M26.9532 4.70702C23.9454 5.21484 20.6836 6.89453 18.4571 9.10156C13.6133 13.8672 12.3243 21.3867 15.3321 27.3437L16.0547 28.7695L10.6837 34.1601C7.73443 37.1289 5.17584 39.8242 5.00006 40.1758C4.60943 40.9375 4.5899 42.6172 4.96099 43.3203C5.27349 43.9258 6.1524 44.7656 6.7774 45.0976C7.4024 45.4101 9.10162 45.3515 9.82428 45C10.1758 44.8242 12.8711 42.2656 15.8399 39.3164L21.2305 33.9453L22.6563 34.668C24.9415 35.8203 26.6407 36.1914 29.5899 36.1914C32.5782 36.1914 34.2383 35.8203 36.6407 34.6094C40.7422 32.5586 43.6719 28.9648 44.961 24.4922C45.5274 22.4609 45.586 18.5547 45.0391 16.6016C42.793 8.41796 35.0977 3.35937 26.9532 4.70702ZM32.4024 9.39453C34.8633 9.99999 37.4024 11.7773 38.8868 13.9648C42.0118 18.5351 41.4649 24.5312 37.5782 28.3984C35.4493 30.5469 32.6368 31.6992 29.5899 31.6992C24.4727 31.6992 20.1172 28.3789 18.6329 23.3398C18.1836 21.7773 18.1836 19.043 18.6329 17.4805C20.1758 12.2461 24.961 8.74999 30.1563 9.10156C30.8985 9.14062 31.8946 9.27734 32.4024 9.39453Z" fill="black"/>
                        <path d="M30.3516 11.8945C29.7852 12.1484 29.1016 13.0469 29.1016 13.5547C29.1016 14.4531 29.8047 15.1758 30.9766 15.5273C32.5 15.9766 33.9258 17.3828 34.5312 19.1016C34.9805 20.293 35.6055 20.8984 36.4062 20.8984C37.4805 20.8984 38.418 19.6289 38.1836 18.4961C37.4805 15.1758 32.5195 10.9961 30.3516 11.8945Z" fill="black"/>
                        </svg> Explore
                    </a>
                </li>
                <li class="logout">
                    <a href="/logout">
                        <svg width="" height="" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0)">
                        <path d="M9.61735 3.5621C4.58164 6.01852 2.2296 7.14053 2.02552 7.17865C1.62246 7.26035 1.32144 7.43464 1.02042 7.756C0.678579 8.12637 0.489804 8.44227 0.30613 8.94336C-0.0204004 9.8366 7.81198e-06 8.85621 7.81198e-06 25C7.81198e-06 41.1438 -0.0204004 40.1634 0.30613 41.0566C0.663273 42.037 1.27042 42.6634 2.03062 42.8214C2.2194 42.8595 4.85715 44.1176 9.64286 46.4434L16.9643 50L17.2092 49.9455C17.9235 49.7821 18.5306 49.1449 18.8776 48.1917C19.2041 47.2876 19.1837 49.0033 19.1837 25C19.1837 1.00218 19.2041 2.71242 18.8776 1.80828C18.602 1.04576 18.148 0.468414 17.6276 0.212423C17.0102 -0.0925882 17.7551 -0.403046 9.61735 3.5621ZM14.148 21.0131C15.7602 21.6394 16.4541 23.6057 15.648 25.2451C15.5561 25.4248 15.3469 25.719 15.1786 25.8987C14.0918 27.0588 12.352 27.0588 11.2551 25.8987C10.7092 25.3268 10.4439 24.6242 10.449 23.78C10.4592 22.4346 11.2551 21.3235 12.5 20.9368C12.8571 20.8224 13.7806 20.866 14.148 21.0131Z" fill="black"/>
                        <path d="M23.2654 6.34534V8.33336H28.3164H33.3674V11.9826V15.6318H35.0052H36.6378L36.6225 11.6939C36.6021 7.82683 36.6021 7.75602 36.4899 7.33118C36.1735 6.12203 35.4797 5.16887 34.5664 4.68957C33.9286 4.35188 34.046 4.35733 28.4082 4.35733H23.2654V6.34534Z" fill="black"/>
                        <path d="M39.0308 15.2668V18.0283H32.7297H26.4287L26.4389 24.2483L26.4542 30.4738L32.7399 30.4901L39.0308 30.501L39.041 33.0119L39.0563 35.5228L44.4644 29.8474C47.4389 26.7265 49.9032 24.1394 49.9389 24.1067C49.99 24.0522 49.1277 23.1154 45.5257 19.33C43.0614 16.7429 40.592 14.1503 40.041 13.5675L39.0308 12.5054V15.2668Z" fill="black"/>
                        <path d="M33.4031 32.2821C33.3827 32.2985 33.3674 34.4227 33.3674 36.9935V41.6667H28.3164H23.2654V43.6547V45.6427H28.4082C32.6633 45.6427 33.6072 45.6264 33.8878 45.561C35.1072 45.2887 36.1225 44.1503 36.495 42.6471L36.6072 42.1841V37.2277V32.2712L35.0205 32.2549C34.148 32.2495 33.4236 32.2604 33.4031 32.2821Z" fill="black"/>
                        </g>
                        <defs>
                        <clipPath id="clip0">
                        <rect width="50" height="50" fill="white"/>
                        </clipPath>
                        </defs>
                        </svg> Logout
                    </a>
                </li>
            </ul>
        </nav>

        <div class="main">

            <div class="card page-user">
                <div class="page-user-header">
                    <h1>Akun Saya</h1>
                    <ul>
                        <li class="active"><a href="/my-account">Edit Profil</a></li>
                        <li><a href="/my-account/following">Following</a></li>
                    </ul>
                </div>

                <hr>

                <form method="POST" enctype="multipart/form-data" action="/my-account/edit/supporter">
                    @csrf
                    @method('PATCH')
                    <div class="form-group profile-image ">
                        <div class="profile-images">
                            @if ($user->profile_picture != null)
                                <img src='/{{ $user->profile_picture }}' id="upload-img">
                                
                            @else 
                                <img src="{{ asset('style/assets/profile.svg') }}" id="upload-img">
                            @endif
                        </div>
                        <div class="custom-file">
                            <label for="fileupload">Unggah Foto</label>
                            <input type="file" id="fileupload" name="image" value="{{ $user->profile_picture }}" placeholder="{{ asset('style/assets/profile.svg') }}">
                        </div>
                    </div>

                    <h3>Nama</h3>
                    <div class="form-group">
                        <input name="name" type="text" class="form-control" id="exampleInputUsername1" aria-describedby="unameHelp" placeholder="Masukkan Username" value="{{ $user->name }}" required>
                    </div>
                    
                    <button type="submit" class="">Simpan</button>
                </form>
            </div>

        </div>


    </div>

    <script src="{{ asset('style/js/sidebar.js') }}"></script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script>
        $(function() {
            $("#fileupload").change(function(event) {
                var x = URL.createObjectURL(event.target.files[0]);
                $("#upload-img").attr("src", x);
                console.log(event);
            });
        })
    </script>

</body>

</html>