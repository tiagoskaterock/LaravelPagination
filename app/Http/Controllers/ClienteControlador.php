<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;


class ClienteControlador extends Controller
{




    public function index()
    {
        return view('index', ['clientes' => Cliente::paginate(100)]);
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
