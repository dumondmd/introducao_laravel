<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Curso;
//use App\Http\Requests;

class CursosController extends Controller
{
    public function index() {
    	$registros = Curso::all();
    	return view('admin.cursos.index', compact('registros'));
    }
}
