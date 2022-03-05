<?php declare(strict_types=1);

class Configuration
{
    private string $db_dsn = 'mysql:host=localhost;dbname=oo_battle';
    private string $db_user = 'root';
    private ?string $db_pass = null;

    public function getDbDsn(): string
    {
        return $this->db_dsn;
    }

    public function getDbUser(): string
    {
        return $this->db_user;
    }

    public function getDbPass(): ?string
    {
        return $this->db_pass;
    }
}