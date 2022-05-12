<?php

class Database extends Connection{

    public function connect()
    {
        // TODO: Implement connect() method.
        return mysqli_connect("locahost","mms","Asdf@123","contact");
    }
}

