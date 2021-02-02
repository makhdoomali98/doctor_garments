<?php

namespace App\Http\Controllers;

use App\Inventory;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/inventory/index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $response = ['error' => true, 'status' => 'error', 'message' => 'Server Error'];
//        request()->validate([
//            'neck_shape' => 'required',
//            'product_type' => 'required',
//            'fabric' => 'required',
//            'design' => 'required',
//            'gender' => 'required',
//            'size' => 'required',
//            'selling' => 'required',
//            'in_stock' => 'required',
//            'quantity' => 'required',
//        ]);
        $inventory = new Inventory();
//        $inventory->id=$request->id;
        $inventory->neck_shape = $request->neck_shape;
        $inventory->product_type = $request->product_type;
        $inventory->fabric = $request->fabric;
        $inventory->design = $request->design;
        $inventory->gender=$request->gender;
        $inventory->size=$request->size;
        $inventory->selling=$request->selling;
        $inventory->in_stock=$request->in_stock;
        $inventory->quantity=$request->quantity;


        if ($inventory->save()) {
            $response = [
                'error' => false,
                'status' => 'success',
                'message' => 'Your data created Successfully',
                'data' => $inventory,
            ];
        }

        return ($response);

    }
        //


    /**
     * Display the specified resource.
     *
     * @param  \App\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function show(Inventory $inventory)
    {

        $inventory = Inventory::get();
        return $response = [

            'error' => false,
            'status' => 'success',
            'data' => $inventory,
        ];
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function edit(Inventory $inventory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inventory $inventory)
    {


        $response = ['error' => true, 'status' => 'error', 'message' => 'Server Error'];
//        request()->validate([
//            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
//        ]);

        $inventory = Inventory::find($request->inventory_id);
        $inventory->neck_shape = $request->neck_shape;
        $inventory->product_type = $request->product_type;
        $inventory->fabric = $request->fabric;
        $inventory->design = $request->design;
        $inventory->gender = $request->gender;
        $inventory->size = $request->size;
        $inventory->selling = $request->selling;
        $inventory->in_stock = $request->in_stock;
        $inventory->quantity = $request->quantity;

        if ($inventory->save()) {
            $response = [
                'error' => false,
                'status' => 'success',
                'message' => 'Your data updated Successfully',
                'data' => $inventory,
            ];
        }

        return ($response);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Inventory  $inventory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Inventory $inventory)
    {
        $id = $request->id;

        $inventory = Inventory::destroy($id);
        return $inventory = [
            'error' => false,
            'status' => 'success',
            'message' => '',
            'data' => $inventory,
        ];
    }
    public function getEdit( Request $request){

        $id = $request->id;
        return $inventory = Inventory::where('id' , '=', $id)->get();
    }
}
