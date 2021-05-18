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
        $supporters = Support::with('supporterDetail', 'item')->where('supported', Auth::user()->id)->get();
        $total = 0;
        foreach($supporters as $supporter){
            $total =+ $total + $supporter->total_price;
        }
        return view('creator.supporters_creator', ['supporters' => $supporters, 'total' => $total]);
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
            try {
                DB::beginTransaction();
            
                $support = new Support;
                $support->supporter = Auth::user()->id;
                $support->supported = $item->user_id;
                $support->item_id = $item->id;
                $support->amount = $amount;
                $support->total_price = $item->price * $amount;
                $support->save();

                DB::commit();
            } catch (Exception $e) {
                DB::rollback();
                return $e;
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
