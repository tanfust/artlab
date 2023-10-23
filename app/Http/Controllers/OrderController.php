<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all()->where('user_id', Auth::id());
        return view('back-office/orders/index', compact('orders'));
    }
    public function create()
    {
        $clients = Client::all();
        return view('back-office/orders/create', compact('clients'));
    }
    public function store(Request $request)
    {
        error_log('hgello');
        $input = $request->all();
        if ($request->hasFile('image')){
            $file_name = $request->file('image')->getClientOriginalName();
            $request->image->move(public_path('assets/img/orders'), $file_name);
            $input['image'] = "assets/img/orders/$file_name";
        }
        else{
            $input['image'] = 'assets/img/col-1.png';
        }
        if(!$request['client_id']){
            $input2['name'] = $request->name;
            $input2['email'] = $request->email;
            $client = Client::create($input2);
            error_log($client->id);
            $input['client_id'] = $client->id;
        }else{
            $input['client_id'] = $request['client_id'];
            error_log($input['client_id']);
        }
        $input['user_id'] = Auth::id();
        error_log(Auth::id());
        Order::create($input);

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
        $clients = Client::all();
        return view('back-office/orders/edit', compact('order', 'clients'));
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
            $input['image'] = Order::find($id)->image;
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
