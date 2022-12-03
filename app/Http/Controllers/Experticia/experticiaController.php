<?php

namespace App\Http\Controllers\Experticia;

use App\Http\Controllers\Controller;
use App\Models\Experticia;
use Illuminate\Http\Request;

class experticiaController extends Controller
{
    public function index()
    {
        $experticia = Experticia::all();

        return $experticia;
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
