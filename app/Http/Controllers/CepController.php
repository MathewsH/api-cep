<?php

namespace App\Http\Controllers;

use App\Models\Cep;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CepController extends Controller
{

    private $cep;
    public function __construct(Cep $cep)
    {
        $this->cep = $cep;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Cep::all();
        
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
        $request->validate([
            'cep' => 'required',
            'logradouro' => 'required',
            'bairro' => 'required',
            'localidade' => 'required',
            'uf' => 'required'
        ]);
        return $this->cep->create($request->all());
         
    }

    /**
     * Display the specified resource.
     *
     * @param  Cep $cep
     * @return \Illuminate\Http\Response
     */
    public function show(Cep $cep)
    {
        //
        return Cep::find($cep);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Cep $cep
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $cep = Cep::find($id);

        $cep->update($request->all());
        return $cep;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        return Cep::destroy($id);
    }

    public function searchLogradouro($logradouro){
        return Cep::where('logradouro', 'like', '%'.$logradouro.'%')->get();
    }

    public function searchCep($cep){
        if(Cep::where('cep', 'like', '%'.$cep.'%')->exists()){
            return Cep::where('cep', 'like', '%'.$cep.'%')->get();
            
        }else{
           return Http::get(url:'https://viacep.com.br/ws/'.$cep.'/json');
           
        }
    }
}