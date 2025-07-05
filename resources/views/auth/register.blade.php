<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro - CENIDET</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-blue-50 flex items-center justify-center min-h-screen">
  <div class="bg-white shadow-md rounded-xl p-8 w-full max-w-md">
    <h2 class="text-2xl font-bold text-blue-800 text-center mb-6">Crear Cuenta</h2>
    <form method="POST" action="/register">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="mb-4">
        <label class="block text-sm font-medium text-gray-600">Nombre</label>
        <input type="text" name="name" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring focus:ring-blue-200">
      </div>
      <div class="mb-4">
        <label class="block text-sm font-medium text-gray-600">Correo Electrónico</label>
        <input type="email" name="email" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring focus:ring-blue-200">
      </div>
      <div class="mb-4">
        <label class="block text-sm font-medium text-gray-600">Contraseña</label>
        <input type="password" name="password" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring focus:ring-blue-200">
      </div>
      <div class="mb-6">
        <label class="block text-sm font-medium text-gray-600">Selecciona tu rol</label>
        <select name="rol" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring focus:ring-blue-200">
          <option value="estudiante">Estudiante</option>
          <option value="profesor">Profesor</option>
        </select>
      </div>
      <button type="submit" class="w-full bg-blue-700 text-white py-2 rounded-lg hover:bg-blue-800">Registrarse</button>
    </form>
    <p class="text-sm text-center text-gray-600 mt-4">¿Ya tienes cuenta? <a href="/login" class="text-blue-600 hover:underline">Inicia sesión aquí</a></p>
    <p class="text-sm text-center text-gray-600 mt-4">Volver <a href="/" class="text-blue-600 hover:underline">volver a pantalla principal</a></p>
  </div>
</body>
</html>
