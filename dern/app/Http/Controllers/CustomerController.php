<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Http\Requests\StoreCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $search = $request->get('search');
        $customer = Customer::where('name', 'like', "%{$search}%")->paginate();


        return view('customers',['Customer'=>$customer]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('addCustomer');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCustomerRequest $request)
    {
        try {
            Customer::create([
                'name'=>$request->name,
                'email'=>$request->email,
                'password'=>$request->password?bcrypt($request->password):$request->password
            ]);
        } catch (QueryException $th) {
            if($th->errorInfo[1]===1062){
                abort(422,'the email already exists');
            }

            else{
            throw $th;
            }

        }
        return redirect('customers');

    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer)
    {
$customers=Customer::get();
        return view('showCustomer',["customer"=>$customers]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer)
    {
        $customers= Customer::get();
        return view('editCustomer',['customer'=>$customer]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCustomerRequest $request, Customer $customer)
    {

        try {
            Customer::where('id',$customer->id)->update([
                'name'=>$request->name,
                'email'=>$request->email,
                'password'=>$request->password?bcrypt($request->password):$request->password,
                'created_at'=>$request->created_at

            ]);        }
             catch (QueryException $th) {
            if($th->errorInfo[1]===1062){
abort(422,'email already exists');
            }
            else{
                throw $th;
            }
        }

        return redirect('/');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        Customer::where('id',$customer->id)->delete();
        return redirect('/');

    }
}
