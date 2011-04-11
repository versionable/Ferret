<?php

namespace Versionable\Ferret\Detector;

use Versionable\Ferret\Detector\DetectorInterface;

use Versionable\Ferret\Detector\Exception\DetectorException;

class Composite extends DetectorAbstract
{
  protected $detectors = array();
  
  public function addDetector(DetectorInterface $detector)
  {
    $this->detectors[] = $detector;
  }

  public function detect($filepath)
  {
    foreach($this->detectors as $detector)
    {
      $type = $detector->detect($filepath);
      if ($type !== false)
      {
        return $type;
      }
    }
    
    return false;
  }
}
