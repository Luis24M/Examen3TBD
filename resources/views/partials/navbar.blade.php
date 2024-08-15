<nav class="flex w-full justify-around border border-neutral-300 py-4 items-center">
  <h1 class="text-3xl">Examen 3</h1>
  <ul class="flex justify-between w-2/5 ">
    <a href="/" class="{{ setActivo('/') }} p-3"><li>Home</li></a>
    <a href="/servicios" class="{{ setActivo('servicios') }} p-3"><li>Servicios</li></a>
    <a href="/proyectos" class="{{ setActivo('proyectos') }} p-3"><li>Proyectos</li></a>
    <a href="/clientes" class="{{ setActivo('clientes') }} {{ setActivo('clientes/*') }} p-3"><li>Clientes</li></a>
    <a href="/blog" class="{{ setActivo('blog') }} p-3"><li>Blog</li></a>
    <a href="/contacto" class="{{ setActivo('contacto') }} p-3"><li>Contacto</li></a>
  </ul>
</nav>