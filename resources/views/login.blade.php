<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('style/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('style/css/pagescroll.css') }}" />
    <link rel="icon" type="image/x-icon" href="{{ asset('style/assets/iconOnly.ico') }}"/>
    <title>Login Beli.in</title>
</head>

<body>
    <div class="atas">
        <a href="/"><div class="judul1" id="defaultOpen">
            <img class="namaatas" src="{{ asset('style/assets/LogoIcon.png') }}">
        </div></a>
    </div>
    <div class="panel selainmap" id="login">
        <div id="formContent">
            <div id="formlogin">
                <div class="formplace">
                    <div class="judul">
                        Masuk
                    </div>
                    <div class="input">
                        <form method="POST" action="/login">
                            @csrf
                            <span class="forminfo">E-mail </span><br>
                            <input type="text" id="Name" name="email">
                            <span class="forminfo">Password </span><br>
                            <input type="password" id="password" name="password">
                            <div class="spasi"></div>
                            <input type="submit" value="Masuk">
                        </form>
                    </div>
                    <h4>Belum mempunyai akun? <br> <a href="register"> Daftar </a></h4>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
