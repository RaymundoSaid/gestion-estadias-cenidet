<!-- FORMULARIO COMPLETO DEL ESTUDIANTE CON PESTAÑAS -->
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario del Estudiante</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    function showTab(tab) {
      document.querySelectorAll('.tab-content').forEach(e => e.classList.add('hidden'));
      document.getElementById(tab).classList.remove('hidden');
    }
  </script>
</head>
<body class="bg-blue-50 min-h-screen p-6">
  <div class="max-w-4xl mx-auto bg-white p-6 rounded-xl shadow">
    <h2 class="text-2xl font-bold text-blue-800 mb-4 text-center">Formulario de Datos del Estudiante</h2>

    <!-- Pestañas -->
    <div class="flex justify-center space-x-4 mb-6">
      <button onclick="showTab('tab1')" class="px-4 py-2 bg-blue-700 text-white rounded hover:bg-blue-800">Datos Personales</button>
      <button onclick="showTab('tab2')" class="px-4 py-2 bg-blue-700 text-white rounded hover:bg-blue-800">Datos Escolares</button>
      <button onclick="showTab('tab3')" class="px-4 py-2 bg-blue-700 text-white rounded hover:bg-blue-800">Institución de Procedencia</button>
    </div>

    <form action="/estudiante/datos" method="POST">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">

      <!-- TAB 1: Datos personales -->
      <div id="tab1" class="tab-content">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
          <input type="text" name="apellido_paterno" placeholder="Apellido Paterno" class="input">
          <input type="text" name="apellido_materno" placeholder="Apellido Materno" class="input">
          <input type="text" name="nombres" placeholder="Nombre(s) del Alumno" class="input">
          <select name="sexo" class="input">
            <option value="">Sexo</option>
            <option value="Hombre">Hombre</option>
            <option value="Mujer">Mujer</option>
            <option value="Otro">Otro</option>
          </select>
          <input type="number" name="edad" placeholder="Edad" class="input">
          <input type="email" name="correo" placeholder="Correo Electrónico" class="input">

          <select name="extranjero" class="input">
            <option value="no">Mexicano</option>
            <option value="si">Extranjero</option>
          </select>

          <!-- Condicionales -->
          <div class="col-span-2">
            <div id="nacional" class="grid grid-cols-2 gap-4">
              <input type="text" name="estado" placeholder="Estado" class="input">
              <input type="text" name="municipio" placeholder="Municipio" class="input">
              <input type="text" name="curp" placeholder="CURP" class="input">
            </div>
            <div id="extranjero" class="grid grid-cols-2 gap-4 hidden">
              <input type="text" name="pais_origen" placeholder="País de Origen" class="input">
              <input type="text" name="localidad" placeholder="Localidad de Procedencia" class="input">
              <input type="text" name="documento_id" placeholder="ID de documento" class="input">
            </div>
          </div>
        </div>
      </div>

      <!-- TAB 2: Datos escolares -->
      <div id="tab2" class="tab-content hidden">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
          <select name="tipo_identificador" class="input">
            <option value="control">No. de Control</option>
            <option value="matricula">No. de Matrícula</option>
          </select>
          <input type="text" name="identificador" placeholder="Ingrese el número" class="input">
          <input type="text" name="carrera" placeholder="Carrera" class="input">
          <input type="text" name="especialidad" placeholder="Especialidad" class="input">
          <select name="tipo_periodo" class="input">
            <option value="semestre">Semestre</option>
            <option value="cuatrimestre">Cuatrimestre</option>
          </select>
          <input type="text" name="periodo" placeholder="Ingrese número de periodo" class="input">
        </div>
      </div>

      <!-- TAB 3: Institución de procedencia -->
      <div id="tab3" class="tab-content hidden">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
          <input type="text" name="nombre_institucion" placeholder="Nombre de la Institución" class="input">
          <input type="text" name="telefono" placeholder="Teléfono" class="input">
          <input type="text" name="nivel" placeholder="Nivel" class="input">
          <input type="text" name="nombre_director" placeholder="Nombre del Director" class="input">
          <input type="text" name="nombre_rector" placeholder="Nombre del Rector" class="input">

          <div id="inst_mexicana" class="grid grid-cols-2 gap-4">
            <input type="text" name="estado_institucion" placeholder="Estado" class="input">
            <input type="text" name="ciudad_institucion" placeholder="Ciudad" class="input">
          </div>
          <div id="inst_extranjera" class="grid grid-cols-2 gap-4 hidden">
            <input type="text" name="pais_institucion" placeholder="País" class="input">
            <input type="text" name="ciudad_extranjera" placeholder="Ciudad" class="input">
          </div>
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

  <script>
    document.querySelector('select[name="extranjero"]').addEventListener('change', function(e) {
      if (e.target.value === 'si') {
        document.getElementById('extranjero').classList.remove('hidden');
        document.getElementById('nacional').classList.add('hidden');
        document.getElementById('inst_extranjera').classList.remove('hidden');
        document.getElementById('inst_mexicana').classList.add('hidden');
      } else {
        document.getElementById('extranjero').classList.add('hidden');
        document.getElementById('nacional').classList.remove('hidden');
        document.getElementById('inst_extranjera').classList.add('hidden');
        document.getElementById('inst_mexicana').classList.remove('hidden');
      }
    });
  </script>
</body>
</html>
