<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    //
    public function getItems(){
<<<<<<< HEAD
      $items =  array(
        ['item_id' => 1,
        'item_content' => 'item content'],
        ['item_id' => 2,
        'item_content' => 'item content'],
        ['item_id' => 3,
        'item_content' => 'item content'],
      );
        return response()->json($items);
=======

        return response()->json([
          ['item_id' => 1,
          'item_content' => 'item content'],
          ['item_id' => 2,
          'item_content' => 'item content'],
          ['item_id' => 3,
          'item_content' => 'item content'],
        ]);
>>>>>>> fd3e0e66ebab6fe6061d4dfbbe3f1cf620123ab4
    }
}
