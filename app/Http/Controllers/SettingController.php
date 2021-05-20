<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Exception;

use App\Models\User;
use App\Models\Item;;


class SettingController extends Controller
{
    public function __construct() {
        $this->middleware('auth', ['except' => []]);
    }

    public function index()
    {
        $items = Item::where('user_id', Auth::user()->id)->get();
        return view('creator.pengaturan_creator', ['items' => $items]);
    }

    public function createItem()
    {
        return view('creator.item_create');
    }

    public function createItemAction(Request $request)
    {
        try{
            DB::beginTransaction();
            
            $item = new Item;
            $item->user_id = Auth::user()->id;
            $item->name = $request->name;
            $item->price = $request->price;
            $item->save();

            DB::commit();
        } catch(Exception $e){
            DB::rollBack();
			$output = $e->getMessage();
			return redirect('/setting')->withErrors(['msg', $output]);
        }

        return redirect('/setting');
    }

    public function editItem($id)
    {
        $item = Item::where('id', $id)->first();
        return view('creator.item_edit', ['item' => $item]);
    }

    public function editItemAction(Request $request, $id)
    {
        try{
            DB::beginTransaction();
            
            $item = Item::where('id', $id)->first();
            $item->user_id = Auth::user()->id;
            $item->name = $request->name;
            $item->price = $request->price;
            $item->save();

            DB::commit();
        } catch(Exception $e){
            DB::rollBack();
			$output = $e->getMessage();
			return redirect('/setting')->withErrors(['msg', $output]);
        }

        return redirect('/setting');
    }

    public function editAllItemAction(Request $request)
    {
        // dd($request->all());
        foreach($request->all() as $key=>$price){
            if($key != "_token" && $key != "_method"){
                $arr = explode('price', $key);
                $items[(int)$arr[1]] = $price;
            }
        }
        
        foreach($items as $item_id=>$price)
        {
            try {
                DB::beginTransaction();
            
                $item = Item::where('id', $item_id)->first();
                $item->price = $price;
                $item->save();

                DB::commit();
            } catch (Exception $e) {
                DB::rollback();
                $output = $e->getMessage();
                return redirect('/setting')->withErrors(['msg', $output]);
            }
        }

        return redirect('/setting');
    }

    public function deleteItem($id)
    {
        Item::where('id', $id)->delete();
        return redirect('/setting');
    }

    
}
