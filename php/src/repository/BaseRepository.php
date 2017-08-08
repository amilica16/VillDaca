<?php

/**
 * Created by PhpStorm.
 * User: lazap
 * Date: 8/5/2017
 * Time: 10:47 PM
 */
abstract class BaseRepository {
    protected function execute($sql){
        $connection = Database::getConntection();
        $stmt = $connection->query($sql);
        return $stmt->fetch();
    }

    protected function executeWithParameters($sql, $parameters){
        $connection = Database::getConntection();
        $stmt = $connection->prepare($sql);
        return $stmt->execute($parameters);
    }
}