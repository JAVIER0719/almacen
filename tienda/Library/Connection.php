<?php
class Connection
{
    function __construct()
    {
        $this->db = new QueryManager("root", "0719", "chart");
    }
}


?>