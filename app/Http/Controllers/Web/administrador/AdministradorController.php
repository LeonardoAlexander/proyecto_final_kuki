<?php

namespace App\Http\Controllers\Web\administrador;

use App\Http\Controllers\Controller;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;

class AdministradorController extends Controller
{
    public function index(){
        return view('administrador/paneladmin');
    }

    public function ventalista(){
        return view('administrador/ventalista');
    }

    public function ventanueva(){
        return view('administrador/ventanueva');
    }

    public function productolista(){
        return view('administrador/productolista');
    }

    public function productocrear(){
        return view('administrador/productocrear');
    }
}