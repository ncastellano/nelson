<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Laracasts\Flash\Flash;
use App\Http\Requests\asignaturaRequest;
use App\asignatura;

class AsignaturaController extends Controller
{
   


   public function index(Request $Request)
    {
        $asignaturas = asignatura::orderBy('id', 'ASC')->paginate(5); 
        return view('admin.asignaturas.index')->with('asignaturas', $asignaturas);
    		
    }
}
