<?php

/**
 * Created by PhpStorm.
 * User: lazap
 * Date: 7/30/2017
 * Time: 4:12 PM
 */
class RepositoryFactory {
    public static function getRepository($repositoryName){
        switch ($repositoryName){
            case "session":
                return new SessionRepository();
            case "systemParameter":
                return new SystemParameterRepository();
            default:
                return null;
        }
    }
}