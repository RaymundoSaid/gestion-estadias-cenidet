@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      display: flex;
    }
    .sidebar {
      width: 250px;
      background-color: #2c3e50;
      color: white;
      height: 100vh;
      padding: 20px;
      box-sizing: border-box;
    }
    .sidebar h2 {
      text-align: center;
    }
    .sidebar ul {
      list-style: none;
      padding: 0;
    }
    .sidebar ul li {
      margin: 15px 0;
    }
    .sidebar ul li a {
      color: white;
      text-decoration: none;
      display: block;
      padding: 10px;
      border-radius: 5px;
      transition: background 0.3s;
    }
    .sidebar ul li a:hover {
      background-color: #34495e;
    }
    .main-content {
      flex: 1;
      padding: 52px;
      background-color: #ecf0f1;
    }
    .main-content h1 {
      margin-top: 0;
    }
  </style>
</head>
<body>
  <div class="sidebar">
    <h2>Mi Dashboard</h2>
    <ul>
      <li><a href="#">Inicio</a></li>
      <li><a href="#">Reportes</a></li>
      <li><a href="#">Configuración</a></li>
      <li><a href="#">Perfil</a></li>
      <li><a href="#">Cerrar Sesión</a></li>
    </ul>
  </div>
  <div class="main-content">
    <h1 class="text-2xl font-bold text-blue-800">Bienvenido, {{ Auth::user()->name }}</h1>
    <p class="text-gray-600 mt-2">Rol: Estudiante</p>
    <p>Este es el contenido principal del dashboard. Puedes personalizarlo según tus necesidades.</p>
  </div>
</body>
</html>

@endsection
