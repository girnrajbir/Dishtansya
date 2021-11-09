<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;

class OrderController extends Controller
{
    public function order(Request $request){
        $product = Product::find($request->product_id); //find product id
        if(!$product){      //If product id not found, return and terminate program to prevent logic error
            return response()->json(['message' => "Invalid Product ID"], 400); 
        }
        if($product->available_stock < $request->quantity){     //if insufficient stock return "Failed to order this product due to unavailability of the stock" with 400
            return response()->json(['message' => "Failed to order this product due to unavailability of the stock"], 400);
        }
        $order = new Order([ //create order
            'product_id' => $request->product_id,
            'quantity' => $request->quantity,
        ]);
        $product->available_stock -= $request->quantity; //deduct order quantity from database
        $product->save();
    
        return response()->json(['message' => "You have successfully ordered this product."], 201);
    }
}
