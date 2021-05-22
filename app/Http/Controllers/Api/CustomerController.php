<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Customer;
use App\Http\Resources\CustomerIndexResource;
use App\Http\Resources\CustomerShowResource;


class CustomerController extends Controller
{
    public function index()
    {
        return CustomerIndexResource::collection(
            Customer::all()
        );
    }

    public function show($id) 
    {
        return new CustomerShowResource(Customer::findOrFail($id));
    }
}