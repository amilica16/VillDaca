<?php

/**
 * Created by PhpStorm.
 * User: lazap
 * Date: 7/30/2017
 * Time: 4:07 PM
 */
class SessionValidatorService {


    /**
     * @var SessionRepository
     */
    private $sessionRepository;

    /**
     * SessionValidatorService constructor.
     */
    public function __construct() {
        $this->sessionRepository = RepositoryFactory::getRepository("session");
    }


    public function validateSession($token){
        $session = $this->sessionRepository->getSession($token);
        if($session != null && $this->checkSessionExpiration($session)){
            $this->sessionRepository->extendSession($token);
            return true;
        } else {
            throw new Exception("Sesija nije validna");
        }
    }

    private function checkSessionExpiration($session){
        $sessionStartTimestamp = $session->getStartTime();
        if(time() - $sessionStartTimestamp < 60000){
            return true;
        }
        return false;
    }
}