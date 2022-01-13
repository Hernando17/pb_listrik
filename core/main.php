<?php

class Main extends Connection
{
    public function __construct()
    {
        $this->conn = $this->get_connection();
    }

    public function admin()
    {
        $sql = "SELECT * FROM admin";
        $bind = $this->conn->query($sql);

        while ($obj = $bind->fetch_object()) {
            $baris[] = $obj;
        }
        if (!empty($baris)) {
            return $baris;
        }
    }
}
