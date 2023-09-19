<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Razorpay\Api\Api;


class PaymentController extends Controller
{
    private $razorpayId="rzp_test_viqDHFaE1Sl6eq";
    private $razorpayKey="OJmdfEGQFyIUHwUgBaNbW0iN";
    public function Initiate(Request $request){
         $receiptId=Str::random(20);
       $api=new Api($this->razorpayId,$this->razorpayKey);
       $order=$api->order->create(array(
'receipt'=>$receiptId,
'amount'=>$request->all()['amount']*100,

'currency'=>'INR'
       ));
       $response=[
'orderId'=>$order['id'],
'razorpayId'=>$this->razorpayId,
'amount'=>$request->all()['amount']*100,
'name'=>$request->all()['name'],
'currency'=>'INR',
'email'=>$request->all()['email'],
'contactNumber'=>$request->all()['contactNumber'],
'address'=>$request->all()['address'],
'description'=>'testing description',
       ];
       return view('payment_page',compact('response'));
    }
public function complete(Request $request){
    print_r($request->all());
    exit();
}

}
