<?php

/**
 * Created by PhpStorm.
 * User: lazap
 * Date: 7/30/2017
 * Time: 4:02 PM
 */
class Session {
    private $id;
    private $token;
    private $startTime;
    private $userId;

    /**
     * Session constructor.
     * @param $id
     * @param $token
     * @param $startTime
     * @param $userId
     */
    public function __construct($id, $token, $startTime, $userId) {
        $this->id = $id;
        $this->token = $token;
        $this->startTime = $startTime;
        $this->userId = $userId;
    }

    /**
     * @return mixed
     */
    public function getId() {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id) {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getToken() {
        return $this->token;
    }

    /**
     * @param mixed $token
     */
    public function setToken($token) {
        $this->token = $token;
    }

    /**
     * @return mixed
     */
    public function getStartTime() {
        return $this->startTime;
    }

    /**
     * @param mixed $startTime
     */
    public function setStartTime($startTime) {
        $this->startTime = $startTime;
    }

    /**
     * @return mixed
     */
    public function getUserId() {
        return $this->userId;
    }

    /**
     * @param mixed $userId
     */
    public function setUserId($userId) {
        $this->userId = $userId;
    }




}