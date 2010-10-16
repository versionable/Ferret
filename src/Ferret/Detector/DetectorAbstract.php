<?php

namespace Ferret\Detector;

use \Ferret\Detector\DetectorInterface;

abstract class DetectorAbstract implements DetectorInterface
{
  
  public function getHash()
  {
    return __CLASS__;
  }
  
  public function equal(DetectorInterface $detector)
  {
    if (!is_null($detector) && $this->getHash() === $detector->getHash())
    {
      return true;
    }
    
    return false;
  }
  
}
