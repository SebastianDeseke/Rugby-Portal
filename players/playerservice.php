<?php
include "../includes/db.php";

class PlayerService
{
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function getPlayers()
    {
        $sql = "SELECT * FROM players";
        $result = $this->conn->query($sql);
        $players = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $players[] = $row;
            }
        }
        return $players;
    }

    public function getPlayer($id)
    {
        $sql = "SELECT * FROM players WHERE id = $id";
        $result = $this->conn->query($sql);
        $player = null;
        if ($result->num_rows > 0) {
            $player = $result->fetch_assoc();
        }
        return $player;
    }

    public function addPlayer($player)
    {
        $sql = "INSERT INTO players () VALUES ()";
        $result = $this->conn->query($sql);
        return $result;
    }
}
