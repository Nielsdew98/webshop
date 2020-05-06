<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    //
    public $products = null;
    public $totalQuantity = 0;
    public $totalprice = 0;

    public function __construct($oldCart){ //Deze functie wordt altijd autmoatisch uitgevoerd als je het model aanspreekt
        if ($oldCart){
            $this->products = $oldCart->products;
            $this->totalQuantity = $oldCart->totalQuantity;
            $this->totalprice = $oldCart->totalprice;
        }
    }

    public function add($product, $product_id){
        $shopItems = ['quantity'=> 0, 'product_id' => 0, 'product_name'=>$product->title,'product_price'=>$product->price,
            'product_image'=>$product->default_image->file,'product_description'=>$product->description,'product'=>$product];

        if ($this->products){
            if (array_key_exists($product_id,$this->products)){
                $shopItems = $this->products[$product_id];
            }
        }
        $shopItems['quantity']++;
        $shopItems['product_id'] = $product_id;
        $shopItems['product_name'] = $product->title;
        $shopItems['product_price'] = $product->price;
        $shopItems['product_image'] = $product->default_image->file;
        $shopItems['product_description'] = $product->description;

        $this->totalQuantity++;
        $this->totalprice += $product->price;
        $this->products[$product_id] = $shopItems;
    }
    public function updateQuantity($id,$quantity){
        //telt het totaal aantal items in de winkelwagen
        $this->totalQuantity -= $this->products[$id]['quantity']; //trekt de oude waarde af
        $this->totalQuantity += $quantity; //telt de nieuwe waarde erbij

        if($this->products[$id]['quantity'] < $quantity){
            $this->totalprice -= ($this->products[$id]['quantity'] * $this->products[$id]['product_price']);
            $this->totalprice += $quantity*$this->products[$id]['product_price'];
        }else{
            $this->totalprice -= ($this->products[$id]['quantity']-$quantity)*$this->products[$id]['product_price'];
        }
        $this->products[$id]['quantity'] = $quantity;
    }
    public function removeItem($id){
        $this->totalQuantity -= $this->products[$id]['quantity'];
        $this->totalprice -= ($this->products[$id]['quantity']*$this->products[$id]['product_price']);
        unset($this->products[$id]);

    }
}
