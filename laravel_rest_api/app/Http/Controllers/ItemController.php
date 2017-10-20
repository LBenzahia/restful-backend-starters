<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    //
    public function getItems(){

        return response()->json([
          ['item_id' => 1,
          'item_content' => 'item content'],
          ['item_id' => 2,
          'item_content' => 'item content'],
          ['item_id' => 3,
          'item_content' => 'item content'],
        ]);
    }
}
