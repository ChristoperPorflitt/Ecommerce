<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Khito</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="flex flex-col min-h-screen">

<!-- HEADER -->
  <header class="w-full">
    <div class="flex flex-wrap md:flex-nowrap justify-between bg-gradient-to-r from-orange-400 to-stone-400 px-4 py-1"> 
        <div class="flex flex-none">
            <img class="w-10 h-10 md:w-12 md:h-12 lg:w-14 lg:h-14 object-contain"></img>
        </div>
        <div class="flex flex-wrap mt-3  flex-1 justify-center gap-4 text-sm md:text-base">
            <p>Home</p>
            <p>Productos</p>
        </div>
        <div class="flex flex-wrap mt-3 justify-end gap-4 text-sm md:text-base">
            <p>Carrito</p>
            <p>Inicia Sesión</p>
            <p>Registrarte</p>
        </div>
    </div>
  </header>

  <!-- CONTENIDO -->
  <main class="flex-grow px-4 py-8">
    PROBANDO RAMAS DE GIT
  </main>

  <!-- FOOTER -->
  <footer class="min-w-screen">
    <div class="bg-black text-center py-4">
        <small class="text-white">&copy; Todos los derechos reservados @</small>
    </div>
  </footer>
</body>
</html>

