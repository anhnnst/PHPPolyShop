<?php
/**
 * Created by PhpStorm.
 * User: AnhNN
 * Date: 1/17/2019
 * Time: 6:59 PM
 */

class AppConstants
{
    const BASE_URL = "http://localhost:63342/Lab02";

    const USER_CONTROLLER = "UserController";

    public static function GET_SERVER_ROOT(){
        return $_SERVER["DOCUMENT_ROOT"] ;
    }

    public static  function GET_APP_ROOT_PATH(){
        return $_SERVER['DOCUMENT_ROOT'] . "/Lab02";
    }
}