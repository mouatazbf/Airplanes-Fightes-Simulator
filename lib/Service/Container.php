<?php

class Container
{
    public const PDO_DNS = 'mysql:host=localhost;dbname=oo_battle';
    public const PDO_USERNAME = 'root';
    public const PDO_PASSWORD = null;
    
    private ?PDO $pdo;

    private $shipLoader;

    private $battleManager;

    private $shipStorage;

    public function getPDO(): PDO
    {
        if ($this->pdo === null) {
            $this->pdo = new PDO(
                self::PDO_DNS,
                self::PDO_USERNAME,
                self::PDO_PASSWORD
            );

            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }

        return $this->pdo;
    }

    /**
     * @return ShipLoader
     */
    public function getShipLoader()
    {
        if ($this->shipLoader === null) {
            $this->shipLoader = new ShipLoader($this->getShipStorage());
        }

        return $this->shipLoader;
    }

    public function getShipStorage()
    {
        if ($this->shipStorage === null) {
            //$this->shipStorage = new PdoShipStorage($this->getPDO());
            $this->shipStorage = new JsonFileShipStorage(__DIR__ . '/../../resources/ships.json');
        }

        return $this->shipStorage;
    }

    /**
     * @return BattleManager
     */
    public function getBattleManager()
    {
        if ($this->battleManager === null) {
            $this->battleManager = new BattleManager();
        }

        return $this->battleManager;
    }
}
