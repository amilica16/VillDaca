<?php

/**
 * Created by PhpStorm.
 * User: lazap
 * Date: 7/30/2017
 * Time: 4:37 PM
 */
class SystemConfiguration {
    private static $systemParameters;


    public static function init(){
        $systemParameterRepository = RepositoryFactory::getRepository("systemParameter");
        self::$systemParameters = $systemParameterRepository->getSystemParameters();
    }


}