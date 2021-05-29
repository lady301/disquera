<?php

namespace App\Http\Controllers;

use App\Users;
use App\Models\Disquera;
use Illuminate\Http\Request;

class DisqueraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     $registro['users']=Users::paginate(10);
    return view('Disquera.index', $registro);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Disquera.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosDisquera=request()->except('_token');
        users::insert($datosDisquera);
        //return response()->json($datosDisquera);
        return redirect('Disquera')->with('msn','artista registrado exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Disquera  $disquera
     * @return \Illuminate\Http\Response
     */
    public function show(Disquera $disquera)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Disquera  $disquera
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users=users::findOrFail($id);
        return view('disquera.edit',compact('users'));  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Disquera  $disquera
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $datosDisquera=request()->except('_token','_method');
        users::where('id','=',$id)->update($datosDisquera);
        return redirect('Disquera')->with('msn','artista actualizado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Disquera  $disquera
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        users::destroy($id);
        return redirect('Disquera')->with('msn','artista eliminado exitosamente');
    }
}
