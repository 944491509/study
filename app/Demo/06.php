<?php
// php 实现观察者
class user implements SplSubject {
    public $logNum;
    public $happy;
    protected $observers = null;

    public function __construct($happy)
    {
        $this->logNum = rand(1,10);
        $this->happy = $happy;
        $this->observers = new SplObjectStorage();
    }

    public function login() {
        // 操作session
        $this->notify();
    }

    public function attach(SplObserver $observer)
    {
        $this->observers->attach($observer);
    }

    public function detach(SplObserver $observer)
    {
        $this->observers->detach($observer);
    }

    public function notify()
    {
        // TODO: Implement notify() method.
        $this->observers->rewind();
        while ($this->observers->valid()) {
            $observer = $this->observers->current();
            $observer->update($this);
            $this->observers->next();
        }
    }


}


class secrity implements SplObserver {
    public function update(SplSubject $subject)
    {
        if($subject->logNum < 3) {
            echo '这是第'.$subject->logNum. '次安全登录';
        } else {
            echo '这是第'.$subject->logNum. '次登录,异常';
        }
    }

}

class ad implements SplObserver {
    public function update(SplSubject $subject)
    {
        if($subject->happy == 'sports') {
            echo "运动会";
        } else {
            echo '好好学习';
        }
    }

}

// 实施观察
$user = new user('sports');
$user->attach(new secrity());
$user->attach(new ad());

$user->login();