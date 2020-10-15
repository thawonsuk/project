<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Categorie;
use Image;
use File;

class ItemController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Item::all();
        $count = Item::count();
        return view('item.index',['item'=> $items,'count'=> $count]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id = null)
    {
        $categories = Categorie::pluck('name','id')->prepend('เลือกรายการ','');
        $items = Item::find($id);
        return view('item.create')->with('item', $items)->with('categories',$categories);
    }
    public function add()
    {
        return view('item.add');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $items = new Item();
        $items->name = $request->input('name');
        $items->idname = $request->input('idname');
        $items->categories_id = $request->input('categories_id');
        $items->price = $request->input('price');
        $items->typename = $request->input('typename');
        $items->id_status = $request->input('id_status');
        $items->detail = $request->input('detail');

        if ($request->hasFile('image')){

            $filename = str_random(10).'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path().'/images/',$filename);
            Image::make(public_path().'/images/'.$filename)->resize(50,50)->save(public_path().'/images/resize/'.$filename);
            $items->image = $filename;
        }else{
            $items->image = 'nopic.jpg';
        }

        $request->validate([
            'name'=>'required',
            'idname' =>'required',
            'categories_id' =>'required',
            'price'=>'required',
            'typename' =>'required',
            'id_status' =>'required',
            'detail' =>'required',
            'image' => 'required',
        ]);
        Item::create($request->all());
        //$items->save(); ทำงาน2รอบ
        return redirect()->action('ItemController@index');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('item.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
        $categories = Categorie::pluck('name','id')->prepend('เลือกรายการ','');
        $items = Item::findOrFail($id);
        return view('item.edit')->with('item', $items)->with('categories',$categories);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $items = Item::find($id);
        $items->name = $request->name;
        $items->idname = $request->idname;
        $items->categories_id = $request->categories_id;
        $items->price = $request->price;
        $items->typename = $request->typename;
        $items->id_status = $request->id_status;
        $items->detail = $request->detail;
        if ($request->hasFile('image')){
            if ($items->image !='nopic.jpg'){
                File::delete(public_path().'\\images\\'.$items->image);
                File::delete(public_path().'\\images\\resize\\'.$items->image);
            }
            $filename = str_random(10).'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path().'/images/',$filename);
            Image::make(public_path().'/images/'.$filename)->resize(50,50)->save(public_path().'/images/resize/'.$filename);
            $items->image = $filename;
        }
        $items->update();
        return redirect()->action('ItemController@index')->with('status','แก้ไขข้อมูลเรียบร้อย');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $items = Item::find($id);
        if ($items->image != 'nopic.jpg'){
            File::delete(public_path().'\\images\\'.$items->image);
            File::delete(public_path().'\\images\\resize\\'.$items->image);
        }
        $items->delete();
        return redirect('/item');
    }
}

