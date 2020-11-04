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
use Illuminate\Support\Facades\Storage;

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

        // $handler = opendir('files/');
        // $filename = readdir($handler);
        $file_path = opendir('files');
        // $file_base_name = basename($file_path);
        // $f_name = substr($file_base_name,0,strrpos($file_base_name,'.'));
        $change = dir('files');

        // while( ($filename = readdir($file_path)) != false ) {
        //     if( ($filename != ".") && ($filename != "..") ) {
        //         $test = $filename;
        //         break;
        //     }
        // }
        while ($file = $change ->read()){  
            if($file !="." && $file !=".."){ 
                if(is_file('files/'.$file)){//当前为文件
                     $files[]= $file;
                     $sendFile = $file;
                }else{//当前为目录  
                     
                }               
            } 
        }



        closedir($file_path);


        Mail::raw($content, function ($message) use ($toMail, $title , $sendFile) {
            $message->subject($title);
            $message->to($toMail);
            
            $attachment = $sendFile; // 'files/'.
            //在邮件中上传附件
            $message->attach($attachment,['as'=>"=?UTF-8?B?".base64_encode('file1')."?=.doc"]);
            // $message->attach($attachment,['as'=>'file1.doc']);
        });

        return true;
     }




    public function uploadFile(Request $request){
        
        if($request->hasFile('file')&&$request->file('file')->isValid()){

            $path = "files/";
            if(is_dir($path)){
                //扫描一个文件夹内的所有文件夹和文件并返回数组
                $p = scandir($path);
                foreach($p as $val){
                    if($val !="." && $val !=".."){
                        if(is_dir($path.$val)){
                  //子目录中操作删除文件夹和文件
                            deldir($path.$val.'/');
                  //目录清空后删除空文件夹
                            @rmdir($path.$val.'/');
                        }else{
                  //如果是文件直接删除
                            unlink($path.$val);
                        }
                    }
                }
            }



            $file=$request->file('file');
            
            $destinationPath = 'files/';
            $extension = $file->getClientOriginalExtension();

            $realPath = $file->getRealPath();

            // file name make
            $files_length = 45;
            $filesname = openssl_random_pseudo_bytes($files_length);
            $filesname = base64_encode($filesname);
            $filesname = str_replace(['/', '+', '='], '', $filesname);
            $fileName = substr($filesname, 0, $files_length).'.'.$extension;;
            


            $bool = Storage::disk('uploads')->put($fileName,file_get_contents($realPath));
            if($bool){
                
                $file->move($destinationPath,$fileName);
                $filePath = asset($destinationPath.$fileName);

            }else{
                return false;
            }

        }else{
            
        }

        // return true;
    }

 }