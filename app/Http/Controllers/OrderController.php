<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        return view('back-office/orders/index', compact('orders'));
    }
    public function create()
    {
        return view('back-office/orders/create');
    }
    public function store(Request $request)
    {
        error_log('Some message here.');

        // $request->validate([
        //     'totalAmount' => 'required|numeric|min:0',
        //     'client' => 'required',
        //     'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        //     'status' => 'required',
        //     'description' => 'required',
        //     'artwork_id' => 'required',
        // ]);

        $input = $request->all();
        if ($request->hasFile('image')){
            $file_name = $request->file('image')->getClientOriginalName();
            $request->image->move(public_path('assets/img/orders'), $file_name);
            $input['image'] = "assets/img/orders/$file_name";
        }
        else{
            $input['image'] = 'assets/img/col-1.png';
        }


        Order::create($input);
        error_log('Some message here 22.');

        return redirect()->route('orders.index')->with('success', 'order created successfully');
    }
    public function show($id)
    {
        $order = Order::findOrFail($id);
        return view('orders.show', compact('order'));
    }
    public function edit($id)
    {
        $order = Order::findOrFail($id);
        return view('back-office/orders/edit', compact('order'));
    }
    public function update(Request $request, $id)
    {
        $input = $request->all();
        if ($request->hasFile('image')){
            $file_name = $request->file('image')->getClientOriginalName();
            $request->image->move(public_path('assets/img/orders'), $file_name);
            $input['image'] = "assets/img/orders/$file_name";
        }
        else{
            $input['image'] = 'assets/img/col-1.png';
        }

        $order = Order::findOrFail($id);
        $order->update($input);

        // Redirect to the index page or show a success message
        return redirect()->route('orders.index')->with('success', 'order updated successfully');
    }

    public function destroy($id)
    {
        $order = Order::findOrFail($id);
        $order->delete();

        // Redirect to the index page or show a success message
        return redirect()->route('orders.index')->with('success', 'order deleted successfully');
    }
}
