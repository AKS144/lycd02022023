<?php

namespace App\Http\Controllers\Admin;
use App\Contract;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContractController extends Controller
{
    public function index()
    {
        $contract = Contract::all();
        return view('admin.contract.index',compact('contract'));
    }
}