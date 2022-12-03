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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
