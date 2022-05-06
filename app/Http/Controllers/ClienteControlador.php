<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;


class ClienteControlador extends Controller
{




    public function index()
    {
        // $clientes = Cliente::all();
        $per_page = 100;
        $clientes = Cliente::paginate(100);
        $total_clientes = Cliente::count();

        return view('index', [
            'clientes' => $clientes,
            'per_page' => $per_page, 
            'total_clientes' => $total_clientes
        ]);
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
