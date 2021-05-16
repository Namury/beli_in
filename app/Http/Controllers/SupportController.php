<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Exception;

use App\Models\User;
use App\Models\Post;
use App\Models\Item;
use App\Models\Support;

use Midtrans\Midtrans;

class SupportController extends Controller
{
    public function __construct() {
        $this->middleware('auth', ['except' => []]);
    }

    public function index($slug)
    {
        $creator = User::where('page_slug', $slug)->first();
        $posts = Post::where('user_id', $creator->id)->with('category')->get();
        // foreach($posts as $post){
        //     if(strpos($post->content, '. '))
        //         $post->content = substr($post->content, 0, strpos($post->content, '. ', strpos($post->content, '. ')+1)+1);
        // }
        return view('creator.support', ['creator' => $creator, 'posts' => $posts]);
    }
    
    public function getSupporter()
    {
        $supporters = Support::with('supporterDetail')->where('supported', Auth::user()->id)->get();
        return view('creator.supporter', ['supporters' => $supporters]);
    }

    public function order($slug)
    {
        $creator = User::with('items')->where('page_slug', $slug)->first();
        return view('creator.order', ['creator' => $creator]);
    }

    public function orderAction(Request $request)
    {
        \Midtrans\Config::$serverKey = config('services.midtrans.server_key');

        $item_details = array();

        foreach($request->all() as $key=>$amount){
            if($key != "_token"){
                $arr = explode('amount', $key);
                $items[(int)$arr[1]] = $amount;
            }
        }
        
        foreach($items as $item_id=>$amount)
        {
            $item = Item::where('id', $item_id)->first();

            $item_details[] = array(
                'id' => $item->id,
                'price' => $item->price,
                'quantity' => $amount,
                'name' => $item->name
            );
        }

        $transaction_details = array(
            'order_id' => rand(),
        );

        $params = array(
            'transaction_details' => $transaction_details,
            'item_details' => $item_details,
        );
        
        try {
          // Get Snap Payment Page URL
          $paymentUrl = \Midtrans\Snap::createTransaction($params)->redirect_url;
          
          // Redirect to Snap Payment Page
          header('Location: ' . $paymentUrl);
          return redirect($paymentUrl);
        }
        catch (Exception $e) {
          echo $e->getMessage();
        }
    }

    public function midtransCart()
    {
        \Midtrans\Config::$serverKey = config('services.midtrans.server_key');

        $cart = Cart::where('user_id', Auth::user()->id)->with(['items','extras'])->first();
        $item_details = array();
        if($cart != null){
            foreach($cart->items as $item){
                $item_details[] = array(
                    'id' => $item->items->id,
                    'price' => $item->items->price,
                    'quantity' => $item->amount,
                    'name' => $item->items->name
                );
            }

            foreach($cart->extras as $extra){
                $item_details[] = array(
                    'id' => $extra->extras->id,
                    'price' => $extra->extras->price,
                    'quantity' => 1,
                    'name' => $extra->extras->name
                );
            }
        }

        $transaction_details = array(
            'order_id' => rand(),
        );

        $params = array(
            'transaction_details' => $transaction_details,
            'item_details' => $item_details,
        );
        
        try {
          // Get Snap Payment Page URL
          $paymentUrl = \Midtrans\Snap::createTransaction($params)->redirect_url;
          
          // Redirect to Snap Payment Page
          header('Location: ' . $paymentUrl);
          return redirect($paymentUrl);
        }
        catch (Exception $e) {
          echo $e->getMessage();
        }
    }

}
