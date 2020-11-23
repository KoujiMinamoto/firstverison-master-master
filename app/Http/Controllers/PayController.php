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

class PayController extends Controller
{

    public function getAccessCode() {
        $apiKey = 'C3AB9CdBjrJYBFYOrYw0h2c/22Gsq8rWGt/mM4CAZiKadjYSNqovpGpcvT693tWW6cMyKb';
        $apiPassword = '57356kBW';
        $apiEndpoint = \Eway\Rapid\Client::MODE_SANDBOX; // Use \Eway\Rapid\Client::MODE_PRODUCTION when you go live
        $client = \Eway\Rapid::createClient($apiKey, $apiPassword, $apiEndpoint);

        $transaction = [
            'Payment' => [
                'TotalAmount' => 1,//分为单位
            ],
            'RedirectUrl' => 'http://localhost:8081/cart',
            'TransactionType' => \Eway\Rapid\Enum\TransactionType::PURCHASE,
        ];
        
        $response = $client->createTransaction(\Eway\Rapid\Enum\ApiMethod::TRANSPARENT_REDIRECT, $transaction);

        if (!$response->getErrors()) {
            $accessCode = $response->AccessCode;
            $formUrl = $response->FormActionURL;
            $result['accessCode'] = $accessCode;
            $result['formUrl'] = $formUrl;
            return response()->json($result);
        } else {
            foreach ($response->getErrors() as $error) {
                $result['error'] =  "Error: ".\Eway\Rapid::getMessage($error)."<br>";
            }
            return response()->json($result);
        }

    }
    
    public function getPayResult(Request $request) {

        $apiKey = 'C3AB9CdBjrJYBFYOrYw0h2c/22Gsq8rWGt/mM4CAZiKadjYSNqovpGpcvT693tWW6cMyKb';
        $apiPassword = '57356kBW';
        $apiEndpoint = \Eway\Rapid\Client::MODE_SANDBOX; // Use \Eway\Rapid\Client::MODE_PRODUCTION when you go live

        $client = \Eway\Rapid::createClient($apiKey, $apiPassword, $apiEndpoint);
        $accessCode = $request->accessCode;
        $response = $client->queryTransaction($accessCode);
        
        $transactionResponse = $response->Transactions[0];

        if ($transactionResponse->TransactionStatus) {
            $result['TransactionID'] = $transactionResponse->TransactionID;
            $result['TransactionStatus'] = $transactionResponse->TransactionStatus;
            $result['TotalAmount'] = $transactionResponse->TotalAmount;
            $result['Errors'] = 'none';
            return response()->json($result);
            // echo 'Payment successful! ID: '.$transactionResponse->TransactionID;
        } else {
            $errors = split(', ', $transactionResponse->ResponseMessage);
            foreach ($errors as $error) {
                $result['Errors'] = \Eway\Rapid::getMessage($error);
            }
            return response()->json($result);
        }
    
    }

}