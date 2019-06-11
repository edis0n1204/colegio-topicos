<?php

namespace App\Services;


class NotificationService
{
   
    public static function send($token, $data)
    {
        $fields = array(
            'to' => $token ,
            'notification' => $data
        );
        $FIREBASE_URL = 'https://fcm.googleapis.com/fcm/send';
        $FIREBASE_KEY='key=AAAATAe_kMg:APA91bHiTXj2dkLH-4xO_v81vE8l8yPmrQXbO5wQAzjE4sKaMIS0ax0UkxWhaJYn9Hc80RVMDn046DSHEX5Eu8dicVg1pxSEQp-Y_Z33Mw2WZAADpI7tC7uOydLzFQX0EgAb4rnvtatQ';
        $headers = array('Authorization: '.$FIREBASE_KEY,'Content-Type: application/json');
        $ch= curl_init();
        curl_setopt($ch, CURLOPT_URL, $FIREBASE_URL);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
        $result= curl_exec($ch);
        curl_close($ch);
    }
}
