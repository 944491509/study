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

// 简单工厂
class Factory {
    public static function createDb($type) {
        if($type == 'mysql') {
            return new dbMysql();
        } elseif($type == 'sqlLite') {
            return new dbSqlLite();
        } else {
            throw new Exception('Error db type');
        }
    }
}

// == 客户端现在不知道服务端到底有哪些类名
// 只知道对方开放了一个Factory::createDb方法
// 方法只允许传递数据库的名称

$mysql = Factory::createDb('mysql');
$mysql->conn();

$sqlLite = Factory::createDb('sqlLite');
$sqlLite->conn();

// 如果新增oracle类型,怎么办
// 服务端需要修改Factory的内容
// 面向对象设计法则中,重要的开闭原则 --- 对于修改是封闭的,对于扩展是开放的
