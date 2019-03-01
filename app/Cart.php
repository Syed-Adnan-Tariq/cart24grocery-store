<?php
/**
 * Created by PhpStorm.
 * User: Khubaib
 * Date: 29/09/2018
 * Time: 8:52 AM
 */

namespace App;


class Cart
{

    private $contents;
    public  $totalQty;
    private $totalPrice;
    private $totalDiscount;
    private $grandTotal;


    public function __construct( $oldCart)
    {
        if ($oldCart){
            $this->contents = $oldCart->contents;
            $this->totalQty = $oldCart->totalQty;
            $this->totalPrice = $oldCart->totalPrice;
            $this->totalDiscount = $oldCart->totalDiscount;
            $this->grandTotal = $oldCart->grandTotal;
        }
    }


    public function addProduct($product,$qty)
    {
        $products = ['qty' => 0 , 'price' => $product->price ,'product' => $product];
        if ($this->contents){
            if (array_key_exists($product->id ,$this->contents)){
                $products = $this->contents[$product->id];
            }
        }

        $products['qty'] += $qty;
        $products['price'] = $product->price * $products['qty'];
        $this->contents[$product->id] = $products;
        $this->totalQty += $qty;
        $this->totalDiscount += $product->discount;
        $this->totalPrice += $product->price;

        if ($this->totalPrice < 2000){
            $this->grandTotal = ($this->totalPrice + 200) - $this->totalDiscount;
        }else
        {
            $this->grandTotal = $this->totalPrice  - $this->totalDiscount;
        }

    }

    public function addRecipe($recipe,$qty)
    {
        $recipes = [ 'qty' => 0, 'price' => $recipe->price ,'product' => $recipe];
        if ($this->contents){
            if (array_key_exists($recipe->id ,$this->contents)){
                $recipes = $this->contents[$recipe->id];
            }
        }

        $recipes['qty'] += $qty;
        $recipes['price'] = $recipe->price * $recipes['qty'];
        $this->contents[$recipe->id] = $recipes;
        $this->totalQty += $qty;
        $this->totalPrice += $recipe->price;

    }

    public function removeProduct($product){
        if($this->contents){
            if(array_key_exists($product->id, $this->contents)){
                $rProduct = $this->contents[$product->id];
                $this->totalQty -= $rProduct['qty'];
                $this->totalPrice -= $rProduct['price'];
                $this->totalDiscount -= $product->discount;
                array_forget($this->contents, $product->id);
            }
            if ($this->totalPrice < 2000){
                $this->grandTotal = ($this->totalPrice + 200) - $this->totalDiscount;
            }else
            {
                $this->grandTotal = $this->totalPrice  - $this->totalDiscount;
            }
        }
    }

    public function updateProduct($product, $qty){
        if($this->contents) {
            if (array_key_exists($product->id, $this->contents)) {
                $products = $this->contents[$product->id];
            }
        }
        $this->totalQty         -= $products['qty'];
        $this->totalDiscount    -= $product->discount * $products['qty'];
        $this->totalPrice       -= $products['price'];

        $products['qty']         = $qty;
        $products['price']       = $product->price * $products['qty'];
        $this->totalQty         += $qty;
        $this->totalDiscount    += $product->discount * $products['qty'];
        $this->totalPrice       += $products['price'];
        $this->contents[$product->id] = $products;

        if ($this->totalPrice < 2000){
            $this->grandTotal = ($this->totalPrice + 200) - $this->totalDiscount;
        }else
        {
            $this->grandTotal = $this->totalPrice  - $this->totalDiscount;
        }
    }


    public function getContents(){

        return $this->contents;
    }

    public function getTotalPrice(){

        return $this->totalPrice;
    }

    public function gettotalQty(){

        return $this->totalQty;
    }

    public function gettotalDiscount(){
        if ($this->totalPrice == 0)
        {
            return $this->totalDiscount =0;
        }else{
            return $this->totalDiscount;
        }
    }
    public function getgrandTotal(){

        if($this->totalPrice == 0){

            return $this->grandTotal = 0;

        }else{

            return $this->grandTotal;

        }}
}