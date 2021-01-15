<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
 $headers = array(
                'Content-Type' => 'application/json',
            );
file_put_contents('../news.mjml',$_POST['mtext']);
$text=file_get_contents('../news.mjml');
 $ch = curl_init("https://api.mjml.io/v1/render");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_USERPWD, sprintf('%s:%s', "6d12ff27-0474-4edf-87dc-daaed23249c3", "f6808b17-c354-46d0-941f-496e72092e59"));
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $text);

      /*  foreach ($curlOptions as $option => $value) {
            curl_setopt($ch, $option, $value);
        }*/

        $response = curl_exec($ch);

$html=json_decode($response);
//var_dump($html);
//file_put_contents('../news.html',$_POST['mtext']);
/*$text=file_get_contents('../news.html');

require "mjml.php";
$mjml=new Client();

$html=$mjml->render($text);
echo $html*/

file_put_contents('../news.html',$html->html);

?>