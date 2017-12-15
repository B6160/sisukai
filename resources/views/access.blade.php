<?php
/**
 * Created by PhpStorm.
 * User: b6246
 * Date: 2017/11/17
 * Time: 13:31
 */
if (それぞれの認証処理判断を){
    $filenames="view/".basename($_SERVER['SCRIPT_NAME']);
    readfile($filenames);

}
else{
    echo "NG";
}