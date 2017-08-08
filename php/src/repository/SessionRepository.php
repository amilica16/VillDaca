<?php

/**
 * Created by PhpStorm.
 * User: lazap
 * Date: 7/30/2017
 * Time: 4:09 PM
 */
class SessionRepository extends BaseRepository {

    public function getSessionByUserId($userId){
        $sql = "select *
                from SESSION sess
                where sess.USER_ID=?";
        return $this->executeWithParameters($sql, [$userId]);
    }

    /**
     * @param $session Session
     */
    public function createSession($session){
        $sql = "insert into SESSION (TOKEN, USER_ID)
                values (?, ?)";
        $this->executeWithParameters($sql, [$session->getToken(), $session->getUserId()]);
    }

    /**
     * @param $session Session
     */
    public function updateSession($session){
        $sql = "update SESSION
                set TOKEN=?, START_TIME=?
                where USER_ID=?";
        $parameters = [$session->getToken(), $session->getStartTime(), $session->getUserId()];
        $this->executeWithParameters($sql, $parameters);
    }

    /**
     * @param $session Session
     */
    public function deleteSession($session){
        $sql = "delete from SESSION sess
                where sess.USER_ID=?";
        $this->executeWithParameters($sql, [$session->getUserId()]);
    }
}