<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Editora;


class EditoraController extends Controller {

    public function index (){

      $editoras = Editora::all();

      return view('editora.index', compact('editoras'));
    }

    public function show ($editoraId){
      $editora = Editora::find($editoraId);
      return view('editora.show', compact('editora'));
    }
}
