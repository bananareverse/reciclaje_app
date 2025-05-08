@extends('layouts.app')
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
@section('content')

<style>

body {
        background-color: #f0f8f0; /* Fondo general en verde claro */
        font-family: 'Poppins', sans-serif;
    }
</style>

<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <nav class="col-md-3 col-lg-2 d-md-block bg-success text-white sidebar shadow-sm" style="height: 100vh; border-radius: 0 20px 20px 0;">
            <div class="position-sticky pt-3">
                <h4 class="text-center text-white mb-4">EcoVest</h4>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('dashboard') }}">
                            📊 Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">
                            🌿 Mis Reciclajes
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">
                            🏆 Premios
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('community-posts.index') }}">
                        ♻️ Comunidad
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('recycling-centers.index') }}">
                            ♻️ Centros de Reciclaje
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Contenido Principal -->
        <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <h2 class="my-4 text-success">Centros de Reciclaje</h2>

            <div class="row">
                @foreach ($centrosReciclaje as $centro)
                    <div class="col-md-4 mb-4">
                        <div class="card shadow-lg border-success" style="border-radius: 12px;">
                            <div class="card-body">
                                <h5 class="card-title text-success">{{ $centro->name }}</h5>
                                <p class="card-text"><i class="bi bi-geo-alt-fill"></i> <strong>Ubicación:</strong> {{ $centro->location }}</p>
                                <p class="card-text"><i class="bi bi-phone-fill"></i> <strong>Contacto:</strong> {{ $centro->contact }}</p>
                                <p class="card-text"><i class="bi bi-recycle"></i> <strong>Materiales Aceptados:</strong> {{ $centro->materials_accepted }}</p>
                                <p class="card-text"><i class="bi bi-clock"></i> <strong>Horario:</strong> {{ $centro->schedule }}</p>
                                <p class="card-text"><i class="bi bi-star-fill"></i> <strong>Calificación:</strong> {{ $centro->rating }} ⭐</p>
                                
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
