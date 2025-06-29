@extends('layouts.app')

@section('content')
<div class="p-6">
  <h1 class="text-2xl font-bold text-blue-800">Panel del Profesor</h1>
  <p class="text-gray-600 mt-2">Bienvenido, {{ Auth::user()->name }}</p>
</div>
@endsection
