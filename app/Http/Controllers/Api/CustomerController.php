<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CustomerResource;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customers = Customer::query();

        if (request()->get('document')) {
            $customers->where('document', request()->get('document'));
        }

        if (request()->get('name')) {
            $name = request()->get('name');
            $customers->where('name', 'like', "%{$name}%");
        }

        if (request()->get('birthdate')) {
            $customers->where('birthdate', request()->get('birthdate'));
        }

        if (request()->get('gender')) {
            $customers->where('gender', request()->get('gender'));
        }

        if (request()->get('state')) {
            $customers->where('state', request()->get('state'));
        }

        if (request()->get('city')) {
            $city = request()->get('city');
            $customers->where('city', 'like', "%{$city}%");
        }

        $newCustomers = $customers->paginate();

        return CustomerResource::collection($newCustomers);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'document' => ['required'],
            'birthdate' => ['required'],
            'gender' => ['required'],
            'postcode' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'number' => ['required', 'string', 'max:255'],
            'complement' => ['nullable', 'string', 'max:255'],
            'district' => ['required', 'string', 'max:255'],
            'state' => ['required', 'string', 'max:2'],
            'city' => ['required', 'string', 'max:255'],
        ]);

        $customer = Customer::create([
            'name' => $request->name,
            'document' => $request->document,
            'birthdate' => $request->birthdate,
            'gender' => $request->gender,
            'postcode' => $request->postcode,
            'address' => $request->address,
            'number' => $request->number,
            'complement' => $request->complement,
            'district' => $request->district,
            'state' => $request->state,
            'city' => $request->city,
        ]);

        return new CustomerResource($customer);
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer)
    {
        return new CustomerResource($customer);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Customer $customer)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'document' => ['required'],
            'birthdate' => ['required'],
            'gender' => ['required'],
            'postcode' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'number' => ['required', 'string', 'max:255'],
            'complement' => ['nullable', 'string', 'max:255'],
            'district' => ['required', 'string', 'max:255'],
            'state' => ['required', 'string', 'max:2'],
            'city' => ['required', 'string', 'max:255'],
        ]);

        $customer->update([
            'name' => $request->name,
            'document' => $request->document,
            'birthdate' => $request->birthdate,
            'gender' => $request->gender,
            'postcode' => $request->postcode,
            'address' => $request->address,
            'number' => $request->number,
            'complement' => $request->complement,
            'district' => $request->district,
            'state' => $request->state,
            'city' => $request->city,
        ]);

        return new CustomerResource($customer);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        return $customer->delete();
    }
}
