<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Municipio as Municipio;
use App\Models\Municipiosuser as Municipiosuser;
use App\Models\Zona as Zona;
use App\Models\Zonasuser as Zonasuser;
use App\Models\Producto as producto; 
use App\Models\Productosxuser;
use App\Models\PreciosIng;
use App\Models\Ingredientesactivo;

class reporte extends Controller
{
     public function index()
    {
<<<<<<< HEAD
=======
        
>>>>>>> a854315ce519fd37164536efef9bcedbb4e7cbea
        return view('reportes.index');
    }
}
