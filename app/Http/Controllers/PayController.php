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

    $apiKey = 'C3AB9CdBjrJYBFYOrYw0h2c/22Gsq8rWGt/mM4CAZiKadjYSNqovpGpcvT693tWW6cMyKb';
    $apiPassword = '57356kBW';
    $apiEndpoint = \Eway\Rapid\Client::MODE_SANDBOX; // Use \Eway\Rapid\Client::MODE_PRODUCTION when you go live
    $client = \Eway\Rapid::createClient($apiKey, $apiPassword, $apiEndpoint);

    $transaction = [
        'Payment' => [
            'TotalAmount' => 1,
        ],
        'RedirectUrl' => 'http://www.eway.com.au',
        'TransactionType' => \Eway\Rapid\Enum\TransactionType::PURCHASE,
    ];
    
    $response = $client->createTransaction(\Eway\Rapid\Enum\ApiMethod::TRANSPARENT_REDIRECT, $transaction);

    if (!$response->getErrors()) {
        $accessCode = $response->AccessCode;
        $formUrl = $response->FormActionURL;
    } else {
        foreach ($response->getErrors() as $error) {
            echo "Error: ".\Eway\Rapid::getMessage($error)."<br>";
        }
    }