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
    <title>{{ $post->title }}</title>
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
            <img src="{{ asset('style/assets/profile.svg') }}" width="40" height="" class="d-inline-block align-top"
                alt="">
        </a>
    </nav>

    <div class="wrapper">

        <div class="main">

            <div class="card card-info">
                <div class="profile-info">
                    <br>
                </div>
                <div class="media">
                    @if ($post->image != null)
                        <img width="90%" src='/{{ $post->image }}' alt="">
                    @else
                        <img width="90%" src={{ asset('style/assets/image-post.png') }} alt="">
                    @endif
                </div>
                <div class="large tengah">
                    {{ $post->title }}
                </div>
                <div class="post-text">
                    <p>{!! $post->content !!}</p>
                </div>
            </div>

           
        </div>