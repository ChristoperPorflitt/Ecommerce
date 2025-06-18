<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Khito</title>
    <script src="{{ asset('assets/js/menu.js')}}"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<nav class="bg-neutral-300 py-1.5 relative px-0">
  <div class="flex px-3 lg:px-2 justify-center">
    <div class="flex flex-grow items-center">
      <img 
        class="w-14" 
        src="{{ asset('assets/images/logo.webp') }}" 
        alt="Logo"
      >
    </div>

    <div class="flex py-3 lg:hidden">
      <i class="fa-solid fa-bars" onclick="openMenu()"></i>
    </div>

    
    <div id="menu" class="lg:flex hidden flex-grow justify-center absolute lg:relative top-15 left-0 lg:top-0 bg-neutral-300 w-full lg:w-auto py-2 px-8 items-center">
      <div class="flex flex-col grow-7 lg:flex-row mb-4 lg:mb-0 sm:items-center">
        <a class="lg:mr-7 mb-4 lg:mb-0 text-base border-b border-transparent hover:border-b hover:border-black transition-all duration-100 ease-in-out" href="">Home</a>
        <a class="lg:mr-7 mb-4 lg:mb-0 text-base border-b border-transparent hover:border-b hover:border-black transition-all duration-100 ease-in-out" href="">Productos</a>
        <a class="lg:mr-7 mb-4 lg:mb-0 text-base border-b border-transparent hover:border-b hover:border-black transition-all duration-100 ease-in-out" href="">Acerca de nosotros</a>
      </div>
      <div class="flex flex-col grow-3 lg:flex-row text-center">
        <a class="py-2.5 px-3 text-base border-b border-transparent hover:border-b hover:border-black transition-all duration-100 ease-in-out md:mr-2 lg:mr-2 mb-3 lg:mb-0" href=""><i class="fa-solid fa-cart-shopping"></i></a>
        <a class="py-2.5 px-3 text-base border-b border-transparent hover:border-b hover:border-black transition-all duration-100 ease-in-out md:mr-2 lg:mr-2 mb-3 lg:mb-0" href="">Iniciar sesión</a>
        <a class="py-2.5 text-base border-b border-transparent hover:border-b hover:border-black transition-all duration-100 ease-in-out md:mr-2 lg:mr-0 mb-3 lg:mb-0" href="">Cerrar sesión</a>
      </div>      
    </div>
  </div>

</nav>

  <!-- CONTENIDO -->
  <main>
    PROBANDO RAMAS DE GIT
  </main>

  <!-- FOOTER -->
  <footer>
    <!-- <div class="bg-black text-center py-4">
        <small class="text-white">&copy; Todos los derechos reservados @</small>
    </div> -->
  </footer>
</body>
</html>

