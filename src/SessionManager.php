<?php


namespace Styde;


class SessionManager
{
    protected  $data = array();
    protected  $driver;
    public function __construct(SessionFileDrive $driver)
    {
        $this->driver = $driver;
        $this->load();
    }

    protected  function load()
    {

        $this->data = $this->driver->load();

    }
    public function get($key)
    {
        return isset($this->data[$key])
               ?  $this->data[$key]
               : null;
    }
}