<?php

// 共同接口
interface Db {
    function conn();
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


// == 客户端,看不到dbmysql,dbsqllite的内部细节
// 只知道两个类实现了db接口
$db = new dbMysql();
$db->conn();

$db = new dbSqlLite();
$db->conn();

