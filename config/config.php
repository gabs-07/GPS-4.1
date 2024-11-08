<?php
    // conexion.php
    class ConexionBD extends PDO {
        private $host;
        private $db;
        private $user;
        private $password;
        private $charset;

        public function __construct() {
            $this->host = 'DESKTOP-E2TUPKO\SQLEXPRESS';
            $this->db = 'gps';
            $this->user = 'administrador';
            $this->password = '123456789';
            $this->charset = 'utf8mb4';

            $dsn = "sqlsrv:Server={$this->host};Database={$this->db}";
            try {
                parent::__construct($dsn, $this->user, $this->password);
                $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                $this->setAttribute(PDO::SQLSRV_ATTR_ENCODING, PDO::SQLSRV_ENCODING_SYSTEM);
            } 
                catch (PDOException $e) {
                echo "Error de conexión: " . $e->getMessage();
            }
        }
    }
?>