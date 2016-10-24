<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UdeerController extends Controller
{
   
    public function create()
    {
        //
    }

   
    public function login(Request $request)
    {
        $ch = curl_init( "http://52.8.230.142/api/method/login" );
        $email = $request->get('email');
        $password = $request->get('password');
        curl_setopt( $ch, CURLOPT_POSTFIELDS, array(
        'usr' => $email,
        'pwd' => $password ) );

        curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
        curl_setopt( $ch, CURLOPT_PORT, '80' );

        $result = curl_exec($ch);
        curl_close($ch);
        // json_decode($json)
        echo $result;
     }
    
}
