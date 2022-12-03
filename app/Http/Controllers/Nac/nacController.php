<?php

namespace App\Http\Controllers\Nac;

use App\Http\Controllers\Controller;
use App\Models\Nac;
use Illuminate\Http\Request;

class nacController extends Controller
{
    public function index()
    {
        $nacs = Nac::all();

        return $nacs;
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {

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
