<?php
namespace Daw2\ExamenT3Dsw;
use DateTime;


class ServiceEvent extends Service
{
  private $name;
  private $baseP;
  private $caracteristics;
  private $executeDate;

  public function __construct($name, $baseP, $caracteristics, $executeDate)
  {
    parent::__construct($name, $baseP, $caracteristics);
    $this->executeDate = $executeDate;
  }

  public function isExecuted()
  {
    $today = new DateTime();

    return ($today > $this->executeDate) ? "El evento ya ha sido" : "El evento aún no ha sido";
  }

  
    public function daysToExecute()
    {
        $today = new DateTime();
        $diff = $today->diff($this->executeDate);
    
        $increment = 0;
    
        if ($diff->d <= 7 && $diff->d > 0) {
            $increment = $this->getPrice() * 0.20;
        } elseif ($diff->d == 0) {
            $increment = $this->getPrice() * 0.50;
        }
    
        $newPrice = $this->getPrice() + number_format($increment, 2);
        parent::__construct($this->getName(), $this->getBaseP(), $this->getCaracteristics(), $newPrice);
    
        return $diff->d;
    }
    
  


  public function getexecuteDate()
  {
    return $this->executeDate;
  }
}
