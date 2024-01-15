@extends('layout.master')

@section('title', 'About')

@section('content')
    <div class="container mt-5 card">
        <h1 class="card-title">About Us</h1>
        <div class="card-body">
            <p class="card-text">We are a company dedicated to providing the best technological solutions for our clients. Our team is composed of experienced professionals in various fields of technology.</p>
            <p class="card-text">We believe in innovation and are constantly striving to improve our services to meet the changing needs of our clients.</p>
        </div>
    </div>
    <div class="container mt-5 card">
        <h2 class="card-title">Sources Used</h2>
        <div class="card-body">
            <ul>
                <li><a href="https://grafikart.fr/tutoriels/introduction-laravel-2112">Introduction à Laravel - Grafikart</a></li>
                <li>GitHub Copilot</li>
                <li>ChatGPT</li>
                <li><a href="https://laravel.com/docs/10.x">Documentation officielle de Laravel 10</a></li>
                <li><a href="https://getbootstrap.com/docs/">Documentation officielle de Bootstrap</a></li>
            </ul>
        </div>
    </div>
@endsection
