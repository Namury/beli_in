<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
    <ul>
        @if (Auth::user() != null)
            <li>Hello {{ Auth::user()->name }}</li>
            @if (Auth::user()->isCreator())
                <li><a href="/dashboard">Dashboard</a></li>
                <li><a href="#">Explore</a></li>
                <li><a href="#">My Post</a></li>
                <li><a href="#">Supporters</a></li>
                <li><a href="#">Pengaturan</a></li>
                
            @else
                <li><a href="/homepage">Homepage</a></li>
                <li><a href="#">Explore</a></li>
            @endif
            <li><a href="/logout">Logout</a></li>
        @else
            <li><a href="/login">Login</a></li>
            <li><a href="/register/creator">Register Creator</a></li>
            <li><a href="/register/supporter">Register Supporter</a></li>
            <li><a href="/">Landing</a></li>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </ul>

    @yield('content')

    <br><footer>- Oke Team Project PPL 2021 -</footer>
</body>
</html>