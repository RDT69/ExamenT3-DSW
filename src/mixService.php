<?php
namespace Daw2\ExamenT3Dsw;
use DateTime;


class MixService extends Service {
    private $executeDate;
    private $numberOfSessions;

    public function __construct($name,$baseP,$caracteristics,$executeDate,$numberOfSessions) {
        parent::__construct($name,$baseP,$caracteristics);
        $this->executeDate = $executeDate;
        $this->numberOfSessions = $numberOfSessions;
    }

    public function isExecuted() {
        $today = new DateTime();

        return ($today > $this->executeDate) ? "El evento ya ha sido" : "El evento aún no ha sido";
    }

    public function daysToExecute() {
        $today = new DateTime();
        $diff = $today->diff($this->executeDate);

        return $diff->days;
    }

    public function increaseSesions() {
        $this->numberOfSessions ++;
    }

    public function decreaseSesions() {
        $this->numberOfSessions --;
    }
}