<?php
  function setActivo($ruta)
  {
    return request()->is($ruta) ? 'bg-gray-300 scale-110 rounded-md' : '';
  }