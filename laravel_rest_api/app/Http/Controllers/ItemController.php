<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    //
    public function getItems(){
      $items =  array(
        ['item_id' => 1,
        'item_content' => 'item content'],
        ['item_id' => 2,
        'item_content' => 'item content'],
        ['item_id' => 3,
        'item_content' => 'item content'],
      );
        return response()->json($items);
    }

    public function getItem($id){
      $items =  array(
        ['item_id' => 1,
        'item_content' => 'item content']
      );
        return response()->json($item);
    }

    public function createItem(){
      
        return response()->json([
          "msg" => "sucess created",
        ]);
    }
    public function updateItem($id){

        return response()->json(["msg" => " sucess updated"]);
    }

    public function deleteItem($id)
    {
      # code...
      return response()->json(["msg" => " sucess deleted"]);
    }
}
