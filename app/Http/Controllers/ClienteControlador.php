<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;


class ClienteControlador extends Controller
{



    // LARAVEL
    public function index()
    {
        return view('index', ['clientes' => Cliente::paginate(100)]);
    }



    // JAVASCRIPT
    public function indexJS()
    {
        return view('indexJS');
    }




    // JSON
    public function indexJSON()
    {
        // número de clientes por página
        return Cliente::paginate(50);

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
