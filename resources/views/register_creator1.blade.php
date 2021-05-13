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
        <div class="judul1" onclick="openCity(event, 'beranda')" id="defaultOpen">
            <img class="namaatas" src="{{ asset('style/assets/LogoIcon.png') }}">
        </div>
    </div>

    <div class="panel selainmap" id="register">
        <div id="formContent">
            <div id="formregister">
                <div class="formplacecreator">
                    <div class="judul">
                        Daftar Creator
                    </div>
                    <div class="input">
                        <form method="POST" action="/register/creator">
                            @csrf
                            <span class="forminfo">Name </span><br>
                            <input type="text" id="Name" name="name" required>
                            <span class="forminfo">Email </span><br>
                            <input type="email" id="email" name="email" required>
                            <span class="forminfo">Password </span><br>
                            <input type="password" id="password" name="password" required>
                            <span class="forminfo">Expertise </span><br><br>
                            <select name="user_type_id" id="user_type_id" required>
                                <option disabled selected> - select one - </option>
                                @foreach ($user_types as $user_type)
                                    <option value="{{ $user_type->id }}">{{ $user_type->name }}</option>
                                @endforeach
                            </select><br>
                            <span class="forminfo">Page Name </span><br>
                            @if ($page_name != null)
                                <input type="text" name="page_name" value="{{ $page_name }}" required><br>
                            @else
                                <input type="text" name="page_name" required><br>
                            @endif
                            <span class="forminfo">Description </span><br>
                            <textarea name="description" cols="30" rows="5" required></textarea><br>
                            <div class="spasi"></div>
                            <input type="submit" value="Daftar">
                        </form>
                        <h4>Sudah mempunyai akun ? <br> <a href="/login"> Masuk</a></h4>
                    </div>
                </div>
            </div>
</body>

</html>
