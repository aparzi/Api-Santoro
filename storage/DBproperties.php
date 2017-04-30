<?php

define("DB_SERVER", "localhost");
define("DB_USERNAME", "root");
define("DB_PASSWORD", "");
define("DB_DATABASE", "santoro");

/**
 * Description of DBproprierties
 *
 * This class describes information about MySql Data Base Configuration
 *
 * @author Angelo
 */
class DBproprierties {

    private $dbConn;

    /**
     * Effettua la connessione al database
     * @return type
     */
    public function getConnection() {
        $this->dbConn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
        return $this->dbConn;
    }

    /**
     * Chiude la connessione con il database
     */
    public function closeConnection() {
        unset($this->dbConn);
    }

}
