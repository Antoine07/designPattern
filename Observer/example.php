<?php

class User implements \SplSubject{

    private $id;
    /**
     * attache un observateur
     *
     * @param SplObserver $observer
     */
    public function attach(\SplObserver $observer) {
        $this->observers[] = $observer;
    }

    /**
     * Détache un observateur
     *
     * @param SplObserver $observer
     */
    public function detach(\SplObserver $observer) {

        $key = array_search($observer,$this->observers, true);
        if($key){
            unset( $this->observers[$key]);
        }
    }

    /**
     * @param string $name
     * @param string $email
     */
    public function create(string $name, string $email):void {

        // method to insert data

        $this->id = uniqid(true);

        $this->notify();
    }

    /**
     * Notifier une action
     */
    public function notify() {

        foreach ($this->observers as $value) {

            $value->update($this);
        }
    }

    public function last_id(){
        return $this->id;
    }
}

class Log implements SplObserver{

    public function update(\SplSubject $subject) {
        echo "log :" . $subject->last_id() . "<br>";
    }
}

class Model implements SplObserver{

    public function update(\SplSubject $subject) {
        echo "id : " .  $subject->last_id() . "<br>";
    }
}


$subject = new User;

$subject->attach(new Log);
$subject->attach(new Model);

$subject->create('Alan', 'alan@alan.fr');





