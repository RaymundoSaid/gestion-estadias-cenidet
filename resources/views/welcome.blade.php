<!-- PÁGINA DE BIENVENIDA -->
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bienvenido a la Plataforma CENIDET</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-blue-50 text-gray-800">
  <div class="min-h-screen flex flex-col items-center justify-center p-6">
    <h1 class="text-4xl font-semibold text-blue-800 mb-6 text-center">Bienvenido a la Plataforma de Estadías del CENIDET</h1>
    <p class="text-center max-w-xl mb-10 text-gray-600">Gestiona tus proyectos, regístrate como estudiante o profesor, y postúlate a programas como Servicio Social, Residencias y Verano Científico.</p>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 w-full max-w-5xl">
      <!-- Tarjetas de Proyectos -->
      <div class="bg-white shadow-lg rounded-2xl p-5 hover:shadow-xl">
        <h2 class="text-xl font-bold text-blue-700 mb-2">Proyecto A</h2>
        <p class="text-gray-500 text-sm">Descripción breve del proyecto A. Ideal para estudiantes de ingeniería.</p>
      </div>
      <div class="bg-white shadow-lg rounded-2xl p-5 hover:shadow-xl">
        <h2 class="text-xl font-bold text-blue-700 mb-2">Proyecto B</h2>
        <p class="text-gray-500 text-sm">Desarrollo web con Laravel para gestión de datos.</p>
      </div>
      <div class="bg-white shadow-lg rounded-2xl p-5 hover:shadow-xl">
        <h2 class="text-xl font-bold text-blue-700 mb-2">Proyecto C</h2>
        <p class="text-gray-500 text-sm">Proyecto de investigación sobre energías renovables.</p>
      </div>
    </div>

    <div class="mt-10 space-x-4">
      <a href="/login" class="px-6 py-2 bg-blue-700 text-white rounded-xl hover:bg-blue-800">Iniciar Sesión</a>
      <a href="/register" class="px-6 py-2 bg-white text-blue-700 border border-blue-700 rounded-xl hover:bg-blue-50">Registrarse</a>
    </div>
  </div>
</body>
</html>

<!-- SIGUIENTES PANTALLAS (Login, Registro, Dashboards por rol, Scripts de Laravel y migraciones) serán desarrolladas a continuación... -->
