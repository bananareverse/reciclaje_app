@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Logros</h1>
    <div class="row">
        @foreach($logros as $logro)
        <div class="col-md-4">
            <div class="card mb-3 {{ in_array($logro->id_logro, $logrosObtenidos) ? 'border-success' : 'border-secondary' }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $logro->nombre }}</h5>
                    <p class="card-text">{{ $logro->descripcion }}</p>
                    <p class="card-text"><strong>Puntos:</strong> {{ $logro->puntos }}</p>
                    @if(in_array($logro->id_logro, $logrosObtenidos))
                        <span class="badge bg-success">Obtenido</span>
                    @else
                        <span class="badge bg-secondary">No obtenido</span>
                    @endif
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection