<?php

require_once "vendor/autoload.php";


class Goru {
    public $pa;
    public $chokh;
    public $lej;

    public function __construct($pa = null, $chokh = null, $lej = null)
    {
        $this->chokh = $chokh;
        $this->lej = $lej;
        $this->pa = $pa;
    }

    public function __clone()
    {
        $this->pa = null;
        $this->lej = null;
        $this->chokh = null;
    }
}


