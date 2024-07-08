<?php

namespace App\Http\Controllers;
use App\Models\Serie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
//use DB;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        $series = Serie::query()->orderBy('nome')->get();
        $mensagemSucesso = $request->session()->get('mensagem.sucesso');
        //$series = DB::select('Select nome From series;');
       

        return view('series.index', compact('series'));

    }

    public function create()
    {
        return view('series.create');
    }

    public function store(Request $request)
    {
        $nomeSerie = $request->input('nome');
        $serie = new Serie();
        $serie->nome = $nomeSerie;
        $serie->save();
        $request->session()->flash('mensagem.successo', 'Serie criada');
        return redirect('/series');
        
        /*
        if (DB::insert('INSERT INTO series (nome) VALUES (?)', [$nomeSerie] )){
            return redirect('/series');
        } else {
            return "Erro inserir banco";
        }
*/
    }

    public function show($id)
    {
        $serie = Serie::find($id);
        return view('series.show', compact ('serie'));
    }

    public function edit($id)
    {
        $serie = Serie::find($id);
        return view('series.edit', compact ('serie'));
    }

    public function update(Request $request, $id)
    {
      $request->validate([ 'nome' => 'required|max:128',]);
      $serie = Serie::find($id);
      $novoNomeSerie = $request->input('nome');
      $serie->update(['nome' => $novoNomeSerie]);
      $request->session()->flash('mensagem.successo', 'Serie atualizada');
      return redirect('/series');
     
    }
    
    public function destroy(Request $request, $id)
    {
      $serie = Serie::find($id);
      $serie->delete();
      $request->session()->flash('mensagem.successo', 'Serie deletada');
      return redirect('/series');
    }
}

