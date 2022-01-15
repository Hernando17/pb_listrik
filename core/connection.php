<?php

class Connection
{
    public function get_connection()
    {
        $connection = new mysqli("localhost", "root", "", "pb_listrik");
        return $connection;
    }
}
