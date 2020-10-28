<?php

/**
 * Class Tiger
 */
abstract class Tiger {
    public abstract function climb();
}

class XTiger extends Tiger {
    public function climb()
    {
        echo '摔下来'."<br/>";
    }
}

class MTiger extends Tiger {
    public function climb()
    {
        echo '爬到树顶'."<br/>";
    }
}

class Client {
    public static function call(Tiger $animal) {
        $animal->climb();
    }
}

Client::call(new XTiger());
Client::call(new MTiger());