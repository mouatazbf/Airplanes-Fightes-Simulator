<?php

class Configuration
{
    private $db_dsn = 'mysql:host=localhost;dbname=oo_battle';
    private $db_user = 'root';
    private $db_pass = null;

    /**
     * @return mixed
     */
    public function getDbDsn()
    {
        return $this->db_dsn;
    }

    /**
     * @param mixed $db_dsn
     */
    public function setDbDsn($db_dsn)
    {
        $this->db_dsn = $db_dsn;
    }

    /**
     * @return mixed
     */
    public function getDbUser()
    {
        return $this->db_user;
    }

    /**
     * @param mixed $db_user
     */
    public function setDbUser($db_user)
    {
        $this->db_user = $db_user;
    }

    /**
     * @return mixed
     */
    public function getDbPass()
    {
        return $this->db_pass;
    }

    /**
     * @param mixed $db_pass
     */
    public function setDbPass($db_pass)
    {
        $this->db_pass = $db_pass;
    }

}