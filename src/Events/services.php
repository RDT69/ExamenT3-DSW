<?php 
namespace Daw2\ExamenT3Dsw\events;

class Services {

  public $dayevent;
  public $price;


  function expire($today, $dayevent)
  {
    if ($today > $$dayevent) {
      return "The event is expired";
    } else {
      return "The event hasn't expired yet.";
    }
  }

  function expireDays($today, $dayevent)
  {
    $contador = date_diff($today, $dayevent);
    $differenceFormat = '%a';
    $contador->format($differenceFormat);
    return "quedan {$contador} dias para el evento.";
  }

  function ofert($today, $dayevent)
  {
    $contador = date_diff($today, $dayevent);
    $differenceFormat = '%a';
    $contador->format($differenceFormat);
    if ($contador < 7) return ($this->price + (($this->price*20)/100));
    if ($contador == 0) return ($this->price + (($this->price*50)/100));
  }
}