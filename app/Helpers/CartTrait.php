<?php
namespace App\Helpers;

use App\Models\Cart;
use App\Models\CartItem;
use App\Models\CartItemVar;
use App\Models\Store;
use Illuminate\Support\Facades\DB;

trait CartTrait
{

    // Add the first item to Cart

    public function firstCartItem($user_id, $new_item, $variations1, $request, $cart = null ,$cart_exists = false)
    {
        if (!$cart_exists) {
            $cart = Cart::create([
                'user_id' => $user_id,
                'store_id' => $new_item->store_id,
            ]);
        }

        $cart_item = CartItem::create([
            'cart_id' => $cart->id,
            'product_id' => $new_item->id,
            'quantity' => $request->quantity,
            'description' => $request->description,
        ]);
        if (isset($variations1)){
            if (sizeof($variations1) > 0) {
                foreach ($variations1 as $variation) {
                    foreach ($variation['options'] as $option) {
                        CartItemVar::create([
                            'cart_item_id' => $cart_item->id,
                            'variation_id' => $variation['variation_id'],
                            'option_id' => $option['option_id'],
                        ]);
                    }
                }
            }
        }
        return true;
    }

    // Add Item To Existing Cart

    public function itemToExistingCart($cart, $new_item, $variations1, $request)
    {
        // Check item from same store

        if (!is_null($new_item->store_id)){
            if ($cart->store_id != $new_item->store_id) {
                if ($request->forceEmpty == 0){
                    return false;
                }else{ // force empty = 1
                    $cart->store_id = $new_item->store_id;
                    $cart->save();
                    $cart->cartItems()->delete();
                }
            }
        }else{ // Means new item belongs to store not store
            if ($cart->store_id != $new_item->store_id) {
                if ($request->forceEmpty == 0){
                    return false;
                }else{ // force empty = 1
                    $cart->store_id = $new_item->store_id;
                    $cart->save();
                    $cart->cartItems()->delete();
                }
            }
        }




        // Check item exists previously in cart

        $cart_items_ids = $cart->cartItems()->pluck('product_id')->toArray();
        if (in_array($new_item->id, $cart_items_ids)){
            $cart_items = CartItem::where('cart_id', $cart->id)->where('product_id', $new_item->id)->get();

            // Put cart item variations to variations2 array
            $variations2 = [];
            foreach ($cart_items as $key => $cart_item) {
                $data = $cart_item->cartItemVars;
                for ($i = 0; $i < sizeof($data); $i++) {
                    $index = -1;
                    for ($j = 0; $j < sizeof($variations2); $j++) {
//                        dd($i,$j);
                        if ($variations2[$j]['variation_id'] == $data[$i]['variation_id']) {
                            $index = $j;
                            break;
                        }
                    }
                    if ($index == -1) {
                        $index = sizeof($variations2);
                    }
                    $variations2[$index]['variation_id'] = $data[$i]['variation_id'];
                    if (!isset($variations2[$index]['options'])) {
                        $variations2[$index]['options'] = [];
                    }
                    if (!in_array(['option_id' => $data[$i]['option_id']],$variations2[$index]['options'])){
                        array_push($variations2[$index]['options'] , ['option_id' => $data[$i]['option_id']]);
                    }
                }
                // dd($index);
                $check = $this->isSameVariations($variations1, $variations2);
//                    dd($variations1,$variations2);
                if ($check){ // update item
                    $cart_item->quantity += $request->quantity;
                    return $cart_item->save();
                }
            }
//            dd($variations1,$variations2);
            $this->firstCartItem($cart->user_id, $new_item, $variations1, $request, $cart, true);
//            if ($this->isSameVariations($variations1, $variations2)){ // update item
//                $cart_item->quantity += 1;
//                $cart_item->save();
//            }else{ // insert new item
//                $this->firstCartItem($cart->user_id, $new_item, $variations1, $request, $cart, true);
//            }
        }else{
            $this->firstCartItem($cart->user_id, $new_item, $variations1, $request, $cart, true);
        }
        return true;
    }

    // check variations identification

    public function isSameVariations($variations1, $variations2)
    {
//        if (sizeof($variations1) != sizeof($variations2)){
//            return false;
//        }
        $count = 0;
        for ($i = 0; $i < sizeof($variations1); $i++) {
            for ($j = 0; $j < sizeof($variations2); $j++) {
                if ($variations1[$i]['variation_id'] == $variations2[$j]['variation_id']
                    && $this->isSameOptions($variations1[$i]['options'],
                        $variations2[$j]['options'])) {
                    $count++;
                }
            }
        }
        return(((sizeof($variations1) == sizeof($variations2)) && sizeof($variations2) == $count));
    }

    // check options identification

    public function isSameOptions($options1, $options2)
    {
        $count = 0;
        for ($i = 0; $i < sizeof($options1); $i++) {
            for ($j = 0; $j < sizeof($options2); $j++) {
                if ($options1[$i]['option_id'] == $options2[$j]['option_id']) {
                    $count++;
                }
            }
        }
        return ((sizeof($options1) == sizeof($options2)) && sizeof($options2) == $count);
    }



    public function getCartItems($cart)
    {
        $cart_array = [];
        $cart_array['store_id'] = 0;
        $cart_array['items'] = [];
        $cart_array['total_cost'] = 0;
        $cart_array['items_count'] = $cart->cartItems()->count();
        $cart_array['delivery_price'] = 0;
        if (isset($cart->cartItems) && sizeof($cart->cartItems) > 0){
            $total_cost = 0;
            $cart_array['store_id'] = $cart->store_id;
            $cart_array['name'] = $cart->store->name;
            $cart_array['logo'] = $cart->store->logo;
            $cart_array['delivery_time'] = $cart->store->delivery_time;
            $cart_array['delivery_price'] = $cart->store->delivery_price;
            foreach ($cart->cartItems as $key => $cart_item){
                $item_cost = ($cart_item->product->base_price * $cart_item->quantity);
                $cart_array['items'][$key]['id'] = $cart_item->id;
                $cart_array['items'][$key]['item_id'] = $cart_item->product_id;
                $cart_array['items'][$key]['item_name'] = $cart_item->product->name;
                $cart_array['items'][$key]['item_name_obj'] = $cart_item->product->getTranslations('name');
                $cart_array['items'][$key]['description'] = $cart_item->description;
                $cart_array['items'][$key]['item_quantity'] = $cart_item->quantity;
                $cart_array['items'][$key]['price_before'] = 0;
                $cart_array['items'][$key]['price_after'] = 0;
                $cart_array['items'][$key]['item_image'] = $cart_item->product->image;

                $cart_array['items'][$key]['variations'] = [];
                $options_cost = 0;
                if (sizeof($cart_item->cartItemVars) > 0) {
                    foreach ($cart_item->cartItemVars as $key2 => $variation){
                        $cart_array['items'][$key]['variations'][$variation->variation_id]['id'] = $variation->variation_id;
                        $cart_array['items'][$key]['variations'][$variation->variation_id]['name'] = $variation->variation->name;
                        $cart_array['items'][$key]['variations'][$variation->variation_id]['name_object'] = $variation->variation->getTranslations('name');
//                        $cart_array['items'][$key]['variations'][$variation->variation_id]['name_en'] = $variation->variation->getTranslation('name','en');
                        $cart_array['items'][$key]['variations'][$variation->variation_id]['options'][$key2]['id'] = $variation->option_id;
                        $cart_array['items'][$key]['variations'][$variation->variation_id]['options'][$key2]['name'] = $variation->option->name;
                        $cart_array['items'][$key]['variations'][$variation->variation_id]['options'][$key2]['name_object'] = $variation->option->getTranslations('name');
//                        $cart_array['items'][$key]['variations'][$variation->variation_id]['options'][$key2]['name_en'] = $variation->option->getTranslation('name','en');
                        $cart_array['items'][$key]['variations'][$variation->variation_id]['options'][$key2]['price'] = $variation->option->price;
                        $options_cost += $variation->option->price;
                        $cart_array['items'][$key]['variations'][$variation->variation_id]['options'] = array_values($cart_array['items'][$key]['variations'][$variation->variation_id]['options']);
                    }
                }
                $item_cost += ($options_cost * $cart_item->quantity);
                $currentOffer = $cart_item->product->currentOfferItem();
                $offer_value = isset($currentOffer) ? $this->getOfferValue($currentOffer,$item_cost)*$cart_item->quantity : 0;
                $cart_array['items'][$key]['price_before'] = $item_cost;
                $cart_array['items'][$key]['price_after'] = $offer_value > 0 ?($item_cost - $offer_value) : $offer_value;
                $cart_array['items'][$key]['variations'] = array_values($cart_array['items'][$key]['variations']);
                $total_cost += ($item_cost - $offer_value);
            }
            $cart_array['total_cost'] = $total_cost;
        }
        return $cart_array;
    }

    public function getOfferValue($offerItem,$price)
    {
        $offer = $offerItem->offer;
        if ($offer){
            if ($offer->price_type == 'Percent'){
                $offer_value = ($offer->value * $price)/100;
            }else{
                $offer_value = $offer->value;
            }
            return $offer_value;
        }
        return 0;
    }
}
