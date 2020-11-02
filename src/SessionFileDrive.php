<?php


namespace Styde;


class SessionFileDrive implements SessionDriverInterface
{
    public  function load()
    {
        $file = __DIR__ . '/../storage/session/session.json';
        if(file_exists($file))
        {

            //el array los devuelve como array asociativo
            return json_decode(file_get_contents($file),true);

        }
        return [];

    }

}