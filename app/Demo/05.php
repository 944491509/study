<?php
// 单例模式

// 第1步,普通类
/*
class sigle{

}

$s1 = new sigle();
$s2 = new sigle();

// 注意 2个对象是一个的时候才全等
if($s1 === $s2) {
    echo '是一个对象';
} else {
    echo '不是一个对象';
}
*/

// 第2步 封锁new
/*
class sigle {
    protected function __construct()
    {
    }
}

$s1 = new sigle();

*/

// 第3步,留个接口来new
/*
class sigle {
    protected function __construct()
    {
    }

    public static function getIns() {
        return new self();
    }
}
$s1 = sigle::getIns();
$s2 = sigle::getIns();
if($s1 === $s2) {
    echo '是一个对象';
} else {
    echo '不是一个对象';
}
*/

// 第4步,getIns预先判断
/*
class sigle {
    protected static $ins = null;
    protected function __construct()
    {
    }

    public static function getIns() {
        if (self::$ins == null) {
            self::$ins = new self();
        }
        return self::$ins;
    }
}
$s1 = sigle::getIns();
$s2 = sigle::getIns();
if($s1 === $s2) {
    echo '是一个对象';
} else {
    echo '不是一个对象';
}

class multi extends sigle{
    public function __construct()
    {
    }
}

echo '<br/>';
$s1 = new multi();
$s2 = new multi();
if($s1 === $s2) {
    echo '是一个对象';
} else {
    echo '不是一个对象';
}
*/

// 第5步,用final防止继承是被改变
/*
class sigle {
    protected static $ins = null;
    // 方法先加final,则方法不能被覆盖,类前加final,则类不能被继承
    final protected function __construct()
    {
    }

    public static function getIns() {
        if (self::$ins == null) {
            self::$ins = new self();
        }
        return self::$ins;
    }
}
$s1 = sigle::getIns();
$s2 = clone $s1;
if($s1 === $s2) {
    echo '是一个对象';
} else {
    echo '不是一个对象';
}
*/
// 第6步, 禁止clone

class sigle {
    protected static $ins = null;
    // 方法先加final,则方法不能被覆盖,类前加final,则类不能被继承
    final protected function __construct()
    {
    }

    public static function getIns() {
        if (self::$ins == null) {
            self::$ins = new self();
        }
        return self::$ins;
    }

    // 封锁clone
    final protected function __clone()
    {
    }
}
