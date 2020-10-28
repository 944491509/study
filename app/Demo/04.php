<?php

// 共同接口
interface Db {
    function conn();
}


interface Factory {
    function createDb();
}

// 服务端开发(不知道将会被谁调用)
class dbMysql implements Db {
    public function conn() {
        echo '连接上了Mysql'."<br/>";
    }
}

class dbSqlLite implements Db {
    public function conn() {
        echo '连接上了sqlLite'."<br/>";
    }
}

class mysqlFactory implements Factory{
    public function createDb()
    {
        return new dbMysql();
    }

}

class sqliteFactory implements Factory{
    public function createDb()
    {
        return new dbSqlLite();
    }
}

// ====服务端添加oracle类====
class dbOracle implements Db {
    public function conn()
    {
        echo '连接上了oracle'."<br/>";
    }
}

class oracleFactory implements Factory {
    public function createDb()
    {
        return new dbOracle();
    }
}


// =====客户端======
$factory = new mysqlFactory();
$db = $factory->createDb();
$db->conn();

$factory = new sqliteFactory();
$db = $factory->createDb();
$db->conn();

$factory = new oracleFactory();
$db = $factory->createDb();
$db->conn();



