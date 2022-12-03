<?php

namespace App\Http\Controllers\DerechoCultural;

use App\Http\Controllers\Controller;
use App\Models\DerechosCulturale;
use Illuminate\Http\Request;

class derechoCulturalController extends Controller
{
    public function index()
    {

        $derechos = DerechosCulturale::all();

        return  $derechos;
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
