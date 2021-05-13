@extends('layout.app')

@section('content')
    <h1>Landing Page Placeholder</h1>
    <ul>
        <li>Dapatkan penghasilan dari hasil kreativitasmu</li>
        Cara mudah dan gratis mendapatkan donasi langsung dari penggemarmu!
        <form method="GET" action="/register">
            @csrf
            beli.in/
            <input type="text" placeholder="namamu" name="page_name">
            <input type="submit" value="Mulai">
        </form>
        <li>Tentang</li>
        Aplikasi yang menyediakan wadah bagi para kretor indonesia untuk memposting karya mereka di platform ini sekaligus menjadi jembatan para kreator dengan penggemar/supporter. melalui aplikasi ini, pneggemar bisa beli.in sesuatu (kopi/teh/makanan minuman lainnya) kepada kreator favoritnya. beliin sesuatu disini maksudnya adalah sebagai bentuk donasi
        <li>Kreator</li>
        Buat akun sebagai kreator, posting karya-karya terbaikmu, dan penggemarmu akan men-support kamu dengan beli.in makanan/minuman sebagai bentuk donasi!
        <button><a href="/register/creator">Daftar Kreator</a></button>
        <li>Supporter</li>
        Buat akun sebagai supporter, nikmati karya-karya kreator favoritmu, dan support mereka dengan beli.in makanan/minuman sebagai bentuk dukunganmu!
        <button><a href="/register/supporter">Daftar Supporter</a></button>
    </ul>
   
@endsection