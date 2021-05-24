<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;
use App\Models\Federacao;
use App\Models\EmpresasJuniores;

class FederacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createEJ()
    {
        $federacoes = Federacao::all();
        $empresasjuniores = EmpresasJuniores::all();
        return view('cadastro_ej', compact('empresasjuniores', 'federacoes'));
    }

    public function storeEJ(Request $request)
    {
        $empresajunior = new EmpresasJuniores;
        $empresajunior->nome = $request->nome;
        $empresajunior->id_federacao = $request->id_federacao;
        $empresajunior->save();

        return redirect('dashboard');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeFED(Request $request)
    {
        $federacao = new Federacao;
        $federacao->nome = $request->nome;
        $federacao->estado = $request->estado;
        $federacao->save();

        return redirect('dashboard');
    }

    public function searchEJ(Request $request)
    {
        $empresasjuniores = EmpresasJuniores::where('nome','LIKE',"%{$request->search}%")
                        ->paginate();
        return view('dashboard', compact('empresasjuniores'));

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

    public function listAll()
    {
        $empresasjuniores = EmpresasJuniores::orderBy('nome', 'asc')->get();

        return view('dashboard', [
            'empresasjuniores' => $empresasjuniores  //retornando as EJ do banco na listagem
        ]);
    }

}