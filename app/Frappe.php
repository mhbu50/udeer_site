<?php
// namespace App\Frappe;


        
        define("COOKIE_FILE", "cookie2.txt");
        function frappe_login($usr,$pwd){
                // $ch = curl_init('http://52.8.230.142/api/method/login');
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

        function frappe_logout(){
            $ch = curl_init('http://localhost:8002/api/method/logout');
            curl_setopt ($ch, CURLOPT_COOKIEJAR, COOKIE_FILE); 
            curl_setopt ($ch, CURLOPT_COOKIEFILE, COOKIE_FILE); 
            curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);

            try {
                        $result = curl_exec($ch);
                        $resultq = json_decode($result);
                        return $resultq;
                } catch (Exception $e) {
                        return 'eror';
                }
        }


        function frappe_get_data($doctype,$params){
                $doctype = str_replace(' ', '%20', $doctype);
                $params = str_replace(' ', '%20', $params);
                // $url = 'http://52.8.230.142/api/resource/'.$doctype.'/'.$params ;
                $url = 'http://localhost:8002/api/resource/'.$doctype.'/'.$params ;
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
                // $ch = curl_init('http://52.8.230.142/api/resource/'.$doctype);
                $ch = curl_init('http://localhost:8002/api/resource/'.$doctype);
                curl_setopt ($ch, CURLOPT_COOKIEFILE, COOKIE_FILE); 
                $arr = $params;
                curl_setopt($ch, CURLOPT_POSTFIELDS, array('data' => json_encode($arr)));
                curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );

                
                try {
                        $result = curl_exec($ch);
                        return $result;
                } catch (Exception $e) {
                        return 'error';
                }
                

        }

        function frappe_update($doctype,$doctype_name,$params){
                $doctype = str_replace(' ', '%20', $doctype);
                $doctype_name = str_replace(' ', '%20', $doctype_name);
                // $ch = curl_init('http://52.8.230.142/api/resource/'.$doctype.'/'.$doctype_name); 
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
                $doctype = str_replace(' ', '%20', $doctype);
                $doctype_name = str_replace(' ', '%20', $doctype_name);
                // $ch = curl_init('http://52.8.230.142/api/resource/'.$doctype.'/'.$doctype_name); 
                $ch = curl_init('http://localhost:8002/api/resource/'.$doctype.'/'.$doctype_name); 
                curl_setopt ($ch, CURLOPT_COOKIEFILE, COOKIE_FILE); 
                curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
                $result = curl_exec($ch);
                return $result;
        }

        function frappe_register($data){
                
                // $ch = curl_init('http://52.8.230.142/api/method/frappe.www.login.custom_re');
                $ch = curl_init('http://localhost:8002/api/method/frappe.www.login.custom_re'); 
                curl_setopt ($ch, CURLOPT_COOKIEFILE, COOKIE_FILE); 
                curl_setopt($ch, CURLOPT_POSTFIELDS, array('data' => json_encode($data)));
                curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
                curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
                $result = curl_exec($ch);
                return $result;
        }
        function frappe_search_link($doctype,$txt){
              $ch = curl_init('http://localhost:8002/api/method/frappe.desk.search.search_link?txt='.$txt.'&doctype='.$doctype);
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
            $ch = curl_init('http://localhost:8002/api/method/run_custom_method?cmd=uploadfile&doctype='.$data['doctype'].'&docname='.$data['docname'].'&filename='.$data['filename'].'&filedata='.$data['filedata'].'&from_form=1|'); 
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


        