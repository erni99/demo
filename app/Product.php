<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
           'name',
           'count',
           'price',
           'description',
           'image'
        ];
        public function store(Request $request) {
        \App\Product::create([
          'name' => $request->get('name'),
          'description' => $request->get('description'),
          'price' => $request->get('price'),
          'count' => $request->get('count'),
          'image'=> $request->get('image'),
        ]);

        return redirect('/products');
    }

}
