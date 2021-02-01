<?php

namespace App\Http\Controllers;

use App\Models\Models\City;
use App\Models\Models\Customer;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->get('search') ?? null;

        $query = Customer::with('city');

        if ($search != null) {
           $query =  $query->where('name', 'LIKE', '%'.$search.'%');
        }

        $customers = $query->paginate(5);

        return Inertia::render('Customers/Index', [
            'customers' => $customers,
            'search' => $search
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cities = City::all();

        return Inertia::render('Customers/Create', [
            'cities' => $cities,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'      => 'required|min:3',
            'city_id'   => 'required',
        ]);

        Customer::create([
            'name' => $request->name,
            'city_id' => $request->city_id,
        ]);

        return redirect()->route('customers.index')->with('successMessage', 'Cliente criado com sucesso!');
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
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        $cities = City::all();

        return Inertia::render('Customers/Edit', [
            'cities'    => $cities,
            'customer'  => $customer,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        $request->validate([
            'name'      => 'required|min:3',
            'city_id'   => 'required',
        ]);

        $customer->update([
            'name' => $request->name,
            'city_id' => $request->city_id,
        ]);

        return redirect()->route('customers.index')->with('successMessage', 'Cliente atualizado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        $customer->delete();

        return redirect()->route('customers.index')->with('successMessage', 'Cliente apagado com sucesso!');
    }
}
