<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Product;
use App\Models\Cart;
use Auth;
class pagecontroller extends Controller
{
    //
    public function main()
    {
        $categories = Category::all();
        $products = Product::all();
        return view('main' , compact('categories' , 'products'));
    }
    public function show_categories($category_id)
    {
        $categories = Category::all();
        $products = Product::where('category_id' ,$category_id )->get();

        return view('main' , compact('categories' , 'products' , 'category_id'));
    }
    public function show_product($product_id)
    {
        $product = Product::find($product_id );
        return view('product' , compact( 'product' ));

    }
    public function add_product($product_id)
    {
        if(isset(Auth::user()->id))
        $carts = Cart::where('user_id' , Auth::user()->id)->where('product_id' , $product_id)->first();
        else
        return back();

        $product = Product::find($product_id );
        $product->quantity -=1;
        $product->save();
        if(isset($carts) )
        {
            $carts->quantity +=1;
            $carts->save() ;
            return back();
        }
        $cart = new Cart();
        $cart->product_id = $product_id ;
        $cart->user_id = Auth::user()->id;
        $cart->quantity = 1 ;
        $cart->save() ;



        return back();
    }
    public function cart()
    {
        if(isset(Auth::user()->id))
        $carts = Cart::where('user_id' , Auth::user()->id)->get();
        else
        return back();
        return view('cardpage' , compact('carts'));
    }
    public function delete_card($id)
    {
        $carts = Cart::findOrFail($id)->delete();
        return back();
    }
    public function signup()
    {
        return view('signup');
    }
    public function Projectors()
    {
        return view('layout.Projectors');
    }
    public function tapmop()
    {
        return view('layout.tapmop');
    }
    public function printer()
    {
        return view('layout.printer');
    }
    public function product()
    {
        return view('layout.product');
    }
    public function cardpage()
    {
        return view('layout.cardpage');
    }



    public function user_login()
    {
        return view('userlogin');
    }

    public function adminlogin()
    {
        return view('layout.adminlogin');
    }
    public function admin()
    {
        return view('admin');
    }
}
/*


INSERT INTO `categories` (`id`, `name`,  `created_at`, `updated_at`) VALUES (NULL, 'asd1', NULL, NULL);
INSERT INTO `categories` (`id`, `name`,  `created_at`, `updated_at`) VALUES (NULL, 'asd2', NULL, NULL);
INSERT INTO `products` (`id`, `name`, `image`, `price`, `quantity`, `category_id`, `created_at`, `updated_at`)
VALUES (NULL, 'asd', 'images/product1.png', '123', '12', 1, NULL, NULL);
INSERT INTO `products` (`id`, `name`, `image`, `price`, `quantity`, `category_id`, `created_at`, `updated_at`)
VALUES (NULL, 'asd', 'images/product2.png', '123', '12', 1, NULL, NULL);
INSERT INTO `products` (`id`, `name`, `image`, `price`, `quantity`, `category_id`, `created_at`, `updated_at`)
 VALUES(NULL, 'asd', 'images/product3.png', '123', '12', 2, NULL, NULL);
INSERT INTO `products` (`id`, `name`, `image`, `price`, `quantity`, `category_id`, `created_at`, `updated_at`)
 VALUES (NULL, 'asd', 'images/product4.png', '123', '12', 2, NULL, NULL);

INSERT INTO `users` (`id`, `name`, `password`, `email`, `role`, `remember_token`, `created_at`, `updated_at`)
VALUES (NULL, 'asd', '$2y$10$DmjY51huHfAPRCGFj9HySOgpGDAbhgyfmwjPplK40wIktBuuBtVG6', 'asd@asd.asd', '0', NULL, NULL, NULL);

INSERT INTO `users` (`id`, `name`, `password`, `email`, `role`, `remember_token`, `created_at`, `updated_at`)
VALUES (NULL, 'asd', '$2y$10$DmjY51huHfAPRCGFj9HySOgpGDAbhgyfmwjPplK40wIktBuuBtVG6', 'admin@admin.com', '1', NULL, NULL, NULL);
*/
