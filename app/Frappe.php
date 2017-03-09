<?php
// namespace App\Frappe;


        
        define("COOKIE_FILE", "cookie2.txt");
        function frappe_login($usr,$pwd){
                // $ch = curl_init('http://52.8.230.142/api/method/login');
                $ch = curl_init('http://'.env('SERVER_ADD', '52.8.230.142').'/api/method/login');
                curl_setopt($ch, CURLOPT_POSTFIELDS,array(
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
                        return 'error';
                }

        }

        function frappe_logout(){
            $ch = curl_init('http://localhost:8002/api/method/logout');
            // $ch = curl_init('http://52.8.230.142/api/method/logout');
            curl_setopt ($ch, CURLOPT_COOKIEJAR, COOKIE_FILE); 
            curl_setopt ($ch, CURLOPT_COOKIEFILE, COOKIE_FILE); 
            curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);

            try {
                        $result = curl_exec($ch);
                        $result = json_decode($result);
                        return $result;
                } catch (Exception $e) {
                        return 'eror';
                }
        }



        function frappe_get_data($doctype,$params){
                $doctype = str_replace(' ', '%20', $doctype);
                $params = str_replace(' ', '%20', $params);
                // $url = 'http://52.8.230.142/api/resource/'.$doctype.'/'.$params ;
                $url = 'http://'.env('SERVER_ADD', '52.8.230.142').'/api/resource/'.$doctype.'/'.$params ;
                $ch = curl_init($url);

                curl_setopt ($ch, CURLOPT_COOKIEJAR, COOKIE_FILE); 
                curl_setopt ($ch, CURLOPT_COOKIEFILE, COOKIE_FILE); 
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                // curl_setopt($ch, CURLOPT_HEADER, true);
                try {
                        $result = curl_exec($ch);
                        return json_decode($result)->data;

                        
                } catch (Exception $e) {
                        return 'eror';
                }

        }



        function frappe_insert($doctype,$params){
                // $ch = curl_init('http://52.8.230.142/api/resource/'.$doctype);
                $ch = curl_init('http://'.env('SERVER_ADD', '52.8.230.142').'/api/resource/'.$doctype);
                curl_setopt ($ch, CURLOPT_COOKIEFILE, COOKIE_FILE); 
                $arr = $params;
                curl_setopt($ch, CURLOPT_POSTFIELDS, array('data' => json_encode($arr)));
                curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
                try {
                        $result = curl_exec($ch);
                        var_dump($result);
                        return json_decode($result)->data;
                } catch (Exception $e) {
                        return 'error';
                        
                }
                

        }

        function frappe_update($doctype,$doctype_name,$params){
                $doctype = str_replace(' ', '%20', $doctype);
                $doctype_name = str_replace(' ', '%20', $doctype_name);
                // $ch = curl_init('http://52.8.230.142/api/resource/'.$doctype.'/'.$doctype_name); 
                $ch = curl_init('http://'.env('SERVER_ADD', '52.8.230.142').'/api/resource/'.$doctype.'/'.$doctype_name); 
                curl_setopt ($ch, CURLOPT_COOKIEFILE, COOKIE_FILE); 
                $arr = $params;
                curl_setopt($ch, CURLOPT_POSTFIELDS, array('data' => json_encode($arr)));
                curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
                try {
                        $result = curl_exec($ch);
                        
                        return json_decode($result)->data;
                } catch (Exception $e) {
                        return 'error';
                }

        }

        function frappe_delete($doctype,$doctype_name){
                $doctype = str_replace(' ', '%20', $doctype);
                $doctype_name = str_replace(' ', '%20', $doctype_name);
                // $ch = curl_init('http://52.8.230.142/api/resource/'.$doctype.'/'.$doctype_name); 
                $ch = curl_init('http://'.env('SERVER_ADD', '52.8.230.142').'/api/resource/'.$doctype.'/'.$doctype_name); 
                curl_setopt ($ch, CURLOPT_COOKIEFILE, COOKIE_FILE); 
                curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
                
                try {
                        $result = curl_exec($ch);
                        return $result;
                } catch (Exception $e) {
                        return 'error';
                }
                
        }

        function frappe_register($data){
                
                // $ch = curl_init('http://52.8.230.142/api/method/frappe.www.login.custom_re');
                $ch = curl_init('http://'.env('SERVER_ADD', '52.8.230.142').'/api/method/frappe.www.login.custom_re'); 
                curl_setopt ($ch, CURLOPT_COOKIEFILE, COOKIE_FILE); 
                curl_setopt($ch, CURLOPT_POSTFIELDS, array('data' => json_encode($data)));
                curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
                $result = curl_exec($ch);
                return $result;
        }
        function frappe_search_link($doctype,$txt){
              $ch = curl_init('http://'.env('SERVER_ADD', '52.8.230.142').'/api/method/frappe.desk.search.search_link?txt='.$txt.'&doctype='.$doctype);
              curl_setopt( $ch, CURLOPT_POSTFIELDS,null);
              curl_setopt ($ch, CURLOPT_COOKIEJAR, COOKIE_FILE); 
              curl_setopt ($ch, CURLOPT_COOKIEFILE, COOKIE_FILE); 
              curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
              curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
              // curl_setopt($ch, CURLOPT_HEADER, true);
              try {
                      $result = curl_exec($ch);
                      return $result;
                      
              } catch (Exception $e) {
                      return 'eror';
              }
        }


        // add "," character between filters
        function refactor_filter($filters){
              $count = 0; 
              $f_ = '' ;
              foreach ($filters as $filter ) {
                
                if($count > 0 ){
                  $f_ .= ',';
                }
                $count++;
                $f_ .= $filter;
              }
              return $f_;
        }

        function frappe_uploadimage($data){
            // $ch = curl_init('http://52.8.230.142/api/method/run_custom_method?cmd=uploadfile&doctype='.$data['doctype'].'&docname='.$data['docname'].'&filename='.$data['filename'].'&filedata='.$data['filedata'].'&from_form=1|'); 
            $ch = curl_init('http://'.env('SERVER_ADD', '52.8.230.142').'/api/method/run_custom_method?cmd=uploadfile&doctype='.$data['doctype'].'&docname='.$data['docname'].'&filename='.$data['filename'].'&filedata='.$data['filedata'].'&from_form=1|'); 
            curl_setopt ($ch, CURLOPT_COOKIEFILE, COOKIE_FILE); 
            curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
            try {
                $result = curl_exec($ch);
                return $result;
            } catch (Exception $e) {
                return 'error';
            }

        }

        function get_list($doctype){
                try {
                    $resultObj = frappe_get_data($doctype,'?fields=["name"]');
                    $result = json_decode($resultObj)->data;
                    return $result;
                } catch (Exception $e) {
                    return 'error';
                }
                
        }


        function frappe_update_password($key,$password){
            $ch = curl_init('http://'.env('SERVER_ADD', '52.8.230.142').'/api/method/frappe.core.doctype.user.user.update_password'); 
            // $ch = curl_init('http://52.8.230.142/api/method/frappe.core.doctype.user.user.update_password'); 

            curl_setopt($ch, CURLOPT_POSTFIELDS, array('new_password' => $password ,'key' => $key));
            curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
            $result = curl_exec($ch);
            return $result;

        }

        function frappe_late_payment($lease_id){
                
                // $ch = curl_init('http://52.8.230.142/api/method/frappe.www.login.custom_re');
                $ch = curl_init('http://'.env('SERVER_ADD', '52.8.230.142').'/api/method/frappe.www.login.late_payment'); 
                curl_setopt ($ch, CURLOPT_COOKIEFILE, COOKIE_FILE); 
                curl_setopt($ch, CURLOPT_POSTFIELDS, array('lease_id' => $lease_id));
                curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
                $result = curl_exec($ch);
                return $result;
        }

        function frappe_late_payment_p($property_name){
                
                // $ch = curl_init('http://52.8.230.142/api/method/frappe.www.login.custom_re');
                $ch = curl_init('http://'.env('SERVER_ADD', '52.8.230.142').'/api/method/frappe.www.login.late_payment_p'); 
                curl_setopt ($ch, CURLOPT_COOKIEFILE, COOKIE_FILE); 
                curl_setopt($ch, CURLOPT_POSTFIELDS, array('p_id' => $property_name));
                curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
                $result = curl_exec($ch);
                return $result;
        }

        function frappe_add_company_balance($docname,$amount){
                $ch = curl_init('http://'.env('SERVER_ADD', '52.8.230.142').'/api/method/udeer.custom_functions.custom.add_cumpany_balance'); 
                curl_setopt ($ch, CURLOPT_COOKIEFILE, COOKIE_FILE); 
                curl_setopt($ch, CURLOPT_POSTFIELDS, array('docname' => $docname, 'amount' => $amount));
                curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
                $result = curl_exec($ch);
                return $result;
        }

        function frappe_get_company(){

                // $company_name = frappe_get_data('User',$_COOKIE['user_id'])->company;
                $company_name = frappe_get_data('User','Administrator')->company;
                $company = frappe_get_data('Company',$company_name);
                return $company;
                
        }



        