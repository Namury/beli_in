<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="{{ asset('style/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('style/css/pagescroll.css') }}" />
    <link rel="icon" type="image/x-icon" href="{{ asset('style/assets/iconOnly.ico') }}"/>
    <title>Signup Beli.in</title>
    
</head>

<body>
    <div class="atas">
        <a href="/"><div class="judul1" id="defaultOpen">
            <img class="namaatas" src="{{ asset('style/assets/LogoIcon.png') }}">
        </div></a>
    </div>

    <div class="panel selainmap" id="register">
        <div id="formContent">
            <div id="formregister">
                <div class="formplace">
                    <div class="judul">
                        Daftar Supporter
                    </div>
                    <div class="input">
                        <form method="POST" action="/register/supporter">
                            @csrf
                            <span class="forminfo">Name </span><br>
                            <input type="text" id="Name" name="name">
                            <span class="forminfo">Email </span><br>
                            <input type="email" id="password" name="email">
                            <span class="forminfo">Password </span><br>
                            <input type="password" id="password" name="password">
                            <div class="spasi"></div>
                            <input type="submit" value="Daftar">
                        </form>
                        <h4>Sudah mempunyai akun ? <br> <a href="/login"> Masuk</a></h4>
                    </div>
                </div>
            </div>
</body>

</html>
