<?php
namespace Daw2\ExamenT3Dsw;


class Service extends Element {
    private $name;
    private $baseP;
    private $caracteristics;

    public function __construct($name,$baseP,$caracteristics) {
        parent::__construct($name,$baseP,$caracteristics);
    }
}