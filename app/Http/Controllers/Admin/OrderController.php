<?php

namespace App\Http\Controllers\Admin;
use App\Models\Oredr;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function Index(){
        $pending_orders = Oredr::where('status','pending')->latest()->get();
        return view('admin.pendingorders', compact('pending_orders'));
    }
}
