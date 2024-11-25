<?php
class MyDB extends SQLite3
{
    private $db;
    function __construct($file)
    {
        #return $this->db = $this->open(BASEDIR.DIRECTORY_SEPARATOR.'db/shop.sqlite');
        return $this->db = $this->open($file);
    }

    public function connnect()
    {
        return $this->db;
    }

    public function getLatsId()
    {
        return $this->lastInsertRowID();
    }
}


function dbCreateTableUsers()
{
    $db = new MyDB(DATABASE);
    $sql = "CREATE TABLE IF NOT EXISTS users (
                id	INTEGER,
                username	TEXT UNIQUE,
                password	TEXT,
                role        TEXT DEFAULT 'user',
                PRIMARY KEY(id AUTOINCREMENT)
        );";
    $ret = $db->query($sql);
}

function dbGetUsernames(){
    $db = new MyDB(DATABASE);
    $sql = "SELECT username FROM users;";
    $ret = $db->query($sql);
    $return = [];
    while($row = $ret->fetchArray(SQLITE3_ASSOC)){
        $return[] = $row;
    }
    $db->close();
    return $return;
}

function dbUserLogin($username, $password){
    $db = new MyDB(DATABASE);
    $sql = "SELECT username FROM users WHERE username = '$username' AND password = '$password';";
    $ret = $db->query($sql);
    $return = [];
    while($row = $ret->fetchArray(SQLITE3_ASSOC)){
        $return[] = $row;
    }
    $db->close();
    return $return;
}