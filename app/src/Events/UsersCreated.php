<?php


namespace App\Events;


class UsersCreated
{
    public function __invoke($e)
    {
        // TODO: Implement __invoke() method.
        $event = $e->getName();
        $params = $e->getParams();
        echo sprintf('Disparado event "%s", com parametros: %s', $event, json_encode($params));
    }
}