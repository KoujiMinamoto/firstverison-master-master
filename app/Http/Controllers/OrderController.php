<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function addOrder(Request $request) {

    $order_user = $request->input('userName');
    $order_price = $request->input('price');
    $order_type = $request->input('type');
    $order_destcription = $request->input('destcription');
    $order_email = $request->input('email');
    $order_phonenum = $request->input('phonenum');
    $order_subrub = $request->input('subrub');
    $order_state = $request->input('state');
    $order_postcode = $request->input('postcode');
    $order_date = $request->input('orderDdata');

    $order_id = DB::table('oneprint_order')->order_by('order_id', 'desc')->first() + 1;

    DB::table('oneprint_order')->insert([
        'order_name' => $order_name,
        'order_type' => 0,
        'order_password' => $order_password,
        'order_email' => $order_email,
        'order_phonenum' => $order_phonenum,
        'order_address' => $order_address,
        'order_subrub' => $order_subrub,
        'order_state' => $order_state,
        'order_postcode' => $order_postcode,
        'order_date' => $order_date
    ]);
    $register = "success";
    return response()->json($register);
      

    }   
}