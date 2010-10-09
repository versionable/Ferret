<?php

namespace Ferret;

use Ferret\FerretInterface;
use Ferret\Detector\DetectorInterface;


class Ferret implements FerretInterface
{
  protected $detector = null;
  
  public function getDetector()
  {
    return $this->detector;
  }


  public function setDetector(DetectorInterface $detector)
  {
    $this->detector = $detector;
    
    return true;
  }

  public function getMimeType($filename)
  {
    return $this->getDetector()->detect($filename);
  }
}
