<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;
use App\Http\Resources\Todo as TodoResource;
use App\Http\Resources\Todos as TodosResource;

class TodoController extends Controller
{
    //
  public function show ($id)
   {
       return new TodoResource(Todo::find($id));
   }

   public function showAll () {
     return new TodosResource(Todo::all());
   }

   public function createTodo (Request $request, $data){

   }
}
