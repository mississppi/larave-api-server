<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function create()
    {
        return view('customers.create');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::all();
        return response()->json(
            $customers, 200
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $customer = Customer::create([
            'name' => $request->input('name'),
            'phone_number' => $request->input('phone_number'),
            'email' => $request->input('email'),
        ]);

        //apiと管理画面からを判定する
        if($request->header('Accept') === 'application/json'){
            return response()->json(
                $customer, 201
            );
        } else {
            return redirect('/dashboard')->with('success', 'Customer created');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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

        $update = [
            'name' => $request->name,
            'phone_number' => $request->phone_number,
            'email' => $request->email,
        ];

        $customer = Customer::where('id', $id)->update($update);
        $customers = Customer::all();

        if ($customer) {
            return response()->json(
                $customers,  200
            );
        } else {
            return response()->json([
                'message' => 'Customer not found',
            ], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customer = Customer::where('id', $id)->delete();
        if($customer){
            return response()->json([
                'message' => 'Customer deleted successfully'
            ]);
        } else {
            return response()->json([
                'message' => 'Customer not found',
            ], 404);
        }
    }
}
