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
use Illuminate\Support\Facades\Mail;


 class EmailController extends Controller
 {


    
   function contactEmail(Request $request) {

        $contactDate = $request->input('data');

        $product = $request->input('product');
        $jobDescription = $request->input('jobDescription');
        $postcode = $request->input('postcode');
        $businessName = $request->input('businessName');
        $name = $request->input('name');
        $email = $request->input('email');
        $telephone = $request->input('telephone');
        $mode = $request->input('mode');
        $subscribe = $request->input('subscribe');

        if ($subscribe == true) {
            $subscribe = "yes";
        } else {
            $subscribe = "no";
        }
        $title = $contactDate." contact message";
        // 获取邮箱内容
        $content = "qoute on: ".$product."\n";
        $content = $content."Job Description: ".$jobDescription."\n";
        
        $content = $content . "Delivery Postcode: " . $postcode . "\n";
        $content = $content . "Business Name: " . $businessName . "\n";
        $content = $content . "Customer Name: " . $jobDescription . "\n";
        $content = $content . "Email: " . $email . "\n";
        $content = $content . "Telephone: " . $telephone . "\n";
        $content = $content . "Way to find us: " . $mode . "\n";
        $content = $content . "Subscribe to our newsletter for special offers: " . $subscribe . "\n";

        $toMail = 'anmouer@163.com';

        Mail::raw($content, function ($message) use ($toMail, $title) {
            $message->subject($title);
            $message->to($toMail);
            
            $attachment = 'files\contactFile.docx ';
            //在邮件中上传附件
            $message->attach($attachment,['as'=>"=?UTF-8?B?".base64_encode('file1')."?=.doc"]);
            // $message->attach($attachment,['as'=>'file1.doc']);
        });

        return true;
     }




    public function uploadFile(Request $request){
        
        if($request->hasFile('file')&&$request->file('file')->isValid()){

            $file=$request->file('file');
            
            $destinationPath = 'files/'; //public 下files 文件夹
            $extension = $file->getClientOriginalExtension();
            $fileName= 'contactFile.'.$extension;;
            $file->move($destinationPath,$fileName);
            $filePath = asset($destinationPath.$fileName);
            $test = 1;

        }else{
            
        }

        return true;
    }

 }