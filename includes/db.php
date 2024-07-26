<?php
 class db {

    private $servername;
    private $username;
    private $password;
    private $dbname;
    
    public function __construct() {
        $this->servername = getenv("SERVERNAME");
        $this->username = getenv("USERNAME");
        $this->password = getenv("PASSWORD");
        $this->dbname = getenv("DBNAME");

        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

        if ($this->conn->connect_error) {
            die("Connection failed:" . $this->conn->connect_error);
        }
    }
    private $conn;
    
        public function GetAll (string $table){
         $stmt = $this->conn->prepare("SELECT * FROM $table");
         $stmt->bind_param("s", $table);
         $stmt->execute();
         $stmt->close();
         return $stmt;
        }

        public function GetOne (string $table, int $id){
            $stmt = $this->conn->prepare("SELECT * FROM $table WHERE id = ?");
            $stmt->bind_param("i", $id);
            $stmt->execute();
            $stmt->close();
        }

        public function Add (string $table) {
            $stmt = $this->conn->prepare("INSERT INTO $table (id, lastname, firstname, roles) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("issi", $id, $lastname, $firstname, $roles);
            $stmt->execute();
            $stmt->close();
        }

        public function Update (string $table, int $id) {
            $stmt = $this->conn->prepare("UPDATE $table SET lastname = ?, firstname = ?, roles = ? WHERE id = ?");
            $stmt->bind_param("ssii", $lastname, $firstname, $roles, $id);
            $stmt->execute();
            $stmt->close();
        }

        public function Delete (string $table, int $id) {
            $stmt = $this->conn->prepare("DELETE FROM $table WHERE id = ?");
            $stmt->bind_param("i", $id);
            $stmt->execute();
            $stmt->close();
        }

        public function CheckSql ($sql) {
            if ($this->conn->query($sql) === TRUE) {
                echo "New player added successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $this->conn->error;
            }
        }
}

?>