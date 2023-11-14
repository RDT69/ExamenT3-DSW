<?php

namespace Daw2\ExamenT3Dsw;


class serviceSesion extends Service {
    private $name;
    private $baseP;
    private $caracteristics;
    private $numberOfSesions;
    
    public function __construct($name,$baseP,$caracteristics,$numberOfSesions) {
        parent::__construct($name,$baseP,$caracteristics);
        $this->numberOfSesions = $numberOfSesions;
    }

    public function increaseSesions() {
        $this->numberOfSesions ++;
    }

    public function decreaseSesions() {
        $this->numberOfSesions --;
    }

    public function getnumberOfSesions() {
        return $this->numberOfSesions;
    }
}