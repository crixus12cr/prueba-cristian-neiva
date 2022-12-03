<?php

namespace App\Http\Controllers;

use App\Http\Controllers\DerechoCultural\derechoCulturalController;
use App\Http\Controllers\Experticia\experticiaController;
use App\Http\Controllers\Formulario\formularioController;
use App\Http\Controllers\Nac\nacController;
use App\Http\Controllers\User\userController;
use Illuminate\Http\Request;

class indexController extends Controller
{
    protected $nacs;
    protected $user;
    protected $derechos;
    protected $experticios;
    protected $listados;

    public function __construct()
    {
        $this->nacs =  new nacController();
        $this->user = new userController();
        $this->derechos = new derechoCulturalController();
        $this->experticios = new experticiaController();
        $this->listados = new formularioController();
    }
    public function index()
    {

        $respuesta= [
            'nacs' => $this->nacs->index(),
            'users' => $this->user->index(),
            'derechos' => $this->derechos->index(),
            'experticios' => $this->experticios->index(),
            'listados' => $this->listados->index()
        ];
        return view('welcome', compact('respuesta'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
