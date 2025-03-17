<?php 

class Genre {
    public $name;
    public $description;

    //costruttore
    public function __construct($name, $description) {
        $this->name = $name;
        $this->description = $description;
    }
}

?>