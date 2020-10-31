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

class UserController extends Controller
{
   public function userLogin(Request $request) {

      $userName=$request->input('username');
      $userPassword=$request->input('password');

      $loginCheck = '';

      //$userCheck = DB::table('one_printuser')->where(['user_name' => $userName])->get();
      //$passwordCheck = DB::table('one_printuser')->where(['user_password' => $userPassword])->get();
      $message = DB::table('oneprint_user')->select('user_name','user_password','user_type')->where('user_name',$userName)->get();

      if($message[0]->user_name == null) {
         $loginCheck = "user don't exist";
      } else if ($message[0]->user_password != $userPassword) {
         $loginCheck = "password is wrong";
      } else {
         $loginCheck = "success";
      };
      
      $userMessage['username'] = $userName;
      $userMessage['logincheck'] = $loginCheck;
      $userMessage['type'] = $message[0]->user_type;
      return response()->json($userMessage);
   }

   public function userRegister(Request $request) {

      //检测是否已经被注册
      $user_name = $request->input('userName');
      $user_businessName = $request->input('businessName');
      $user_firstName = $request->input('firstName');
      $user_lastName = $request->input('lastName');
      $user_email = $request->input('email');
      $user_password = $request->input('password');
      $user_phonenum = $request->input('phoneNumber');
      $user_address = $request->input('address');
      $user_subrub = $request->input('subrub');
      $user_state = $request->input('state');
      $user_country = $request->input('country');
      $user_postcode = $request->input('postcode');
      $user_date = $request->input('registerDdata');

      $userCheck = DB::table('oneprint_user')->select('user_name')->where('user_name',$user_name)->get();
      if(!$userCheck->isEmpty()) {
         $register = "repeat";
         return response()->json($register);
      } else {
         DB::table('oneprint_user')->insert([
               'user_name' => $user_name,
               'user_type' => 0,
               'user_bsName' => $user_businessName,
               'user_firstName' => $user_firstName,
               'user_lastName' => $user_lastName,
               'user_password' => $user_password,
               'user_email' => $user_email,
               'user_phonenum' => $user_phonenum,
               'user_address' => $user_address,
               'user_subrub' => $user_subrub,
               'user_state' => $user_state,
               'user_country' => $user_country,
               'user_postcode' => $user_postcode,
               'user_date' => $user_date
        ]);
        $register = "success";
        return response()->json($register);
      }
   }

   public function userUpdateMessage(Request $request) {

      $user_name = $request->input('userName');

      $user_businessName = $request->input('businessName');
      $user_firstName = $request->input('firstName');
      $user_lastName = $request->input('lastName');
      $user_password = $request->input('password');
      $user_email = $request->input('email');
      $user_phonenum = $request->input('phoneNumber');
      $user_address = $request->input('address');
      $user_subrub = $request->input('subrub');
      $user_state = $request->input('state');
      $user_postcode = $request->input('postcode');
      
      DB::table('oneprint_user')->where('user_name',$user_name)->update([

         'user_bsName' => $user_businessName,
         'user_firstName' => $user_firstName,
         'user_lastName' => $user_lastName,

         'user_password' => $user_password,
         'user_email' => $user_email,
         'user_phonenum' => $user_phonenum,
         'user_address' => $user_address,
         'user_subrub' => $user_subrub,
         'user_state' => $user_state,
         'user_postcode' => $user_postcode

      ]);
      
      $result = "true";
      return response()->json($result);
   }

   public function forgetPassword(Request $request)
   {
      $username = $request->input('userName');
      $useremail = $request->input('email');
      $loginCheck = '';
      $message = DB::table('oneprint_user')->select('user_name','user_password','user_email')->where('user_name',$username)->get();
      if($message[0]->user_name == null) {
         $loginCheck = "user don't exist";
      } else if ($message[0]->user_email = $useremail) {
         $loginCheck = "password email has been send to your email";
         $title = "Your password";
         $content = "Password: ".$message[0]->user_password."\n";
         $toMail = $useremail;
         Mail::raw($content, function ($message) use ($toMail, $title) {
            $message->subject($title);
            $message->to($toMail);
         });
      };
   }


   function sendEmail(Request $request) {

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

      $toMail = 'abcdg@vip.qq.com';

      Mail::raw($content, function ($message) use ($toMail, $title) {
         $message->subject($title);
         $message->to($toMail);
      });

      return true;
   }

}
