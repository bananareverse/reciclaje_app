@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Bienvenido al Dashboard, {{ Auth::user()->name }}!</h1>
</div>
@endsection
