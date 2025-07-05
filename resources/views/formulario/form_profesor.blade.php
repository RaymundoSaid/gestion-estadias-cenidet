<!-- FORMULARIO COMPLETO DEL PROFESOR CON PESTAÑAS Y LÓGICA PÚBLICO/PRIVADO -->
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario del Profesor</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    function showTab(tab) {
      document.querySelectorAll('.tab-content').forEach(e => e.classList.add('hidden'));
      document.getElementById(tab).classList.remove('hidden');
    }

    function toggleTipoInstancia(tipo) {
      document.getElementById('publica').classList.add('hidden');
      document.getElementById('privada').classList.add('hidden');
      document.getElementById(tipo).classList.remove('hidden');
    }
  </script>
</head>
<body class="bg-blue-50 min-h-screen p-6">
  <div class="max-w-4xl mx-auto bg-white p-6 rounded-xl shadow">
    <h2 class="text-2xl font-bold text-blue-800 mb-4 text-center">Formulario de Datos del Profesor</h2>

    <!-- Selección de tipo de instancia -->
    <div class="mb-6 text-center">
      <label class="block text-blue-700 font-semibold mb-2">Tipo de instancia</label>
      <div class="flex justify-center gap-4">
        <button onclick="toggleTipoInstancia('publica')" class="px-4 py-2 bg-blue-700 text-white rounded hover:bg-blue-800">Institución Pública</button>
        <button onclick="toggleTipoInstancia('privada')" class="px-4 py-2 bg-blue-700 text-white rounded hover:bg-blue-800">Empresa Privada</button>
      </div>
    </div>

    <form action="/profesor/datos" method="POST">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">

      <!-- Formulario Institución Pública -->
      <div id="publica" class="hidden">
        <div class="flex justify-center space-x-4 mb-6">
          <button onclick="showTab('tab1_pub')" type="button" class="px-4 py-2 bg-blue-700 text-white rounded hover:bg-blue-800">Datos Personales</button>
          <button onclick="showTab('tab2_pub')" type="button" class="px-4 py-2 bg-blue-700 text-white rounded hover:bg-blue-800">Datos de Institución</button>
        </div>

        <!-- TAB 1: Datos personales -->
        <div id="tab1_pub" class="tab-content">
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <input type="text" name="apellido_paterno" placeholder="Apellido Paterno" class="input">
            <input type="text" name="apellido_materno" placeholder="Apellido Materno" class="input">
            <input type="text" name="nombre" placeholder="Nombre" class="input">
            <input type="text" name="estado" placeholder="Estado" class="input">
            <input type="text" name="municipio" placeholder="Municipio" class="input">
            <input type="text" name="curp" placeholder="CURP" class="input">
            <input type="text" name="telefono" placeholder="Teléfono" class="input">
          </div>
        </div>

        <!-- TAB 2: Institución -->
        <div id="tab2_pub" class="tab-content hidden">
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <input type="text" name="nombre_institucion" placeholder="Nombre de Institución" class="input">
            <input type="text" name="estado_institucion" placeholder="Estado de Institución" class="input">
            <input type="text" name="municipio_institucion" placeholder="Municipio de Institución" class="input">
            <input type="text" name="telefono_institucion" placeholder="Teléfono de Institución" class="input">
            <input type="text" name="nombre_director" placeholder="Nombre del Director" class="input">
            <input type="text" name="puesto_director" placeholder="Puesto que desempeña" class="input">
          </div>
          <div class="mt-6 text-center">
            <button type="submit" class="px-6 py-2 bg-blue-700 text-white rounded hover:bg-blue-800">Guardar y Continuar</button>
          </div>
        </div>
      </div>

      <!-- Formulario Empresa Privada -->
      <div id="privada" class="hidden">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
          <input type="text" name="nombre_empresa" placeholder="Nombre de la Empresa" class="input">
          <input type="text" name="nombre_usuario" placeholder="Nombre del Usuario" class="input">
          <input type="text" name="puesto_usuario" placeholder="Puesto que desempeña" class="input">
          <input type="email" name="correo" placeholder="Correo" class="input">
          <input type="text" name="telefono" placeholder="Teléfono" class="input">
          <input type="text" name="estado" placeholder="Estado" class="input">
          <input type="text" name="municipio" placeholder="Municipio" class="input">
        </div>
        <div class="mt-6 text-center">
          <button type="submit" class="px-6 py-2 bg-blue-700 text-white rounded hover:bg-blue-800">Guardar y Continuar</button>
        </div>
      </div>
    </form>
  </div>

  <style>
    .input {
      @apply px-4 py-2 border rounded-lg focus:outline-none focus:ring focus:ring-blue-200;
    }
  </style>
</body>
</html>
