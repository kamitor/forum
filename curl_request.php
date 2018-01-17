<?php


class curl_request
{


    public function curlPost($data, $url){
        $session = curl_init();
        $options = [
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => 1,
            CURLOPT_POSTFIELDS => $data,
        ];
        curl_setopt_array($session, $options);
        $return = curl_exec($session);
        if($error = curl_errno($session)){
            $error_message = curl_strerror($error);
            echo "cURL error ({$error}):\n {$error_message}";
        }
        curl_close($session);
        return $return;
    }

    public function curlGet($url){
        $session = curl_init();
        $options = [
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,

        ];
        curl_setopt_array($session, $options);
        $return = curl_exec($session);
        if($error = curl_errno($session)){
            $error_message = curl_strerror($error);
            echo "cURL error ({$error}):\n {$error_message}";
        }
        curl_close($session);
        return $return;
    }

}