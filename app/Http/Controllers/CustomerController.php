<?php


namespace App\Http\Controllers;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customer = Customer::with(['village', 'credits'])->get();

        return response()->json($customer);
    }

    public function show($id)
    {
        $customer = Customer::with(['village', 'credits.payment'])->findOrFail($id);

        return response()->json($customer);
    }
}
