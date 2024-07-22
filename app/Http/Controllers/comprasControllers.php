<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use App\Models\Targetas;


use Illuminate\Http\Request;

class comprasControllers extends Controller
{
    public function index(){

   $targetas = Targetas::all();

    return view('compras.index',compact('targetas'));


    }


    public function create(){

        return view('compras.create');

    }

    public function store(Request $request){

        $request->validate([
            'idTargeta' => 'required',
            'nombre' => 'required',
            'cedula' => 'required',
            'saldo' => 'required',
        ]);

        $targetas = new Targetas();
        $targetas->fill($request->all());
        $targetas->save();

        return redirect()->route('compras.index');

    }
   public function edit($id){

    $targetas = Targetas::find($id);
    return view('compras.edit',compact('targetas'));

   }


   public function update(Request $request, $id){

    $request->validate([
        'idTargeta' => 'required',
        'nombre' => 'required',
        'cedula' => 'required',
        'saldo' => 'required',
    ]);

    $targetas = Targetas::find($id);
    $targetas->fill($request->all());
    $targetas->save();

    return redirect()->route('compras.index');

   }


   public function destroy($id){

    $targetas = Targetas::find($id);
    $targetas->delete();

    return redirect()->route('compras.index');

   }


}
