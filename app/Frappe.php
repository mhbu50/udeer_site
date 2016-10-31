<?php
// namespace App\Frappe;
use Exception;

        
        define("COOKIE_FILE", "cookie2.txt");
        function frappe_login($usr,$pwd){
                $ch = curl_init('http://localhost:8002/api/method/login');
                curl_setopt( $ch, CURLOPT_POSTFIELDS,array(
                'usr'=>$usr,
                'pwd'=>$pwd 
                ));
                curl_setopt ($ch, CURLOPT_COOKIEJAR, COOKIE_FILE); 
                curl_setopt ($ch, CURLOPT_COOKIEFILE, COOKIE_FILE); 
                curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
                // curl_setopt($ch, CURLOPT_HEADER, true);
                try {
                        $result = curl_exec($ch);
                        $resultq = json_decode($result);
                        if(isset($resultq->message)){
                                return 'success';
                        }else{
                                return 'fail';
                        }
                } catch (Exception $e) {
                        return 'eror';
                }

        }

        function frappe_get_data($doctype,$params){
               
                $url = 'http://localhost:8002/api/resource/'.$doctype.'/'.$params;
                $ch = curl_init($url);
                curl_setopt ($ch, CURLOPT_COOKIEJAR, COOKIE_FILE); 
                curl_setopt ($ch, CURLOPT_COOKIEFILE, COOKIE_FILE); 
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                // curl_setopt($ch, CURLOPT_HEADER, true);
                try {
                        $result = curl_exec($ch);
                        json_encode($result);
                        return $result;
                        
                } catch (Exception $e) {
                        return 'eror';
                }

        }

        function frappe_insert($doctype,$params){
                $ch = curl_init('http://localhost:8002/api/resource/'.$doctype);
                curl_setopt ($ch, CURLOPT_COOKIEFILE, COOKIE_FILE); 
                $arr = $params;
                curl_setopt($ch, CURLOPT_POSTFIELDS, array('data' => json_encode($arr)));
                curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );

                $result = curl_exec($ch);
                return $result;

        }

        function frappe_update($doctype,$doctype_name,$params){
                
                $ch = curl_init('http://localhost:8002/api/resource/'.$doctype.'/'.$doctype_name); 
                curl_setopt ($ch, CURLOPT_COOKIEFILE, COOKIE_FILE); 
                $arr = $params;
                curl_setopt($ch, CURLOPT_POSTFIELDS, array('data' => json_encode($arr)));
                curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
                $result = curl_exec($ch);
                return $result;

        }

        function frappe_delete($doctype,$doctype_name){
                
                $ch = curl_init('http://localhost:8002/api/resource/'.$doctype.'/'.$doctype_name); 
                curl_setopt ($ch, CURLOPT_COOKIEFILE, COOKIE_FILE); 
                curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
                $result = curl_exec($ch);
                return $result;
        }


        