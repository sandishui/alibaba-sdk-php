<?php
/**
 * Created by PhpStorm.
 * User: lmz
 * Date: 2018/11/14
 * Time: 下午2:24
 */

function getHttpCode($url) {
    // init url
    $curl = curl_init();
    // setting url
    curl_setopt($curl, CURLOPT_URL, $url);
    // no output to the screen
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    // start execute
    $xx = curl_exec($curl);

    // get http status code
    $return = curl_getinfo($curl, CURLINFO_HTTP_CODE); //我知道HTTPSTAT码哦～

    // finished closed
    curl_close($curl);

    return  $return;

}

function  checkHttpCode($code){
    if ($code == 400){
        echo  $code;
    }else{
        throw new Exception("httpcode error");
    }
}


function main($url ){
    $code =  getHttpCode($url);
    checkHttpCode($code);
}
//$url = "https://huodong.aliyuncs.com";
//$url = "http://www.baidu.com";
//main($url )




?>