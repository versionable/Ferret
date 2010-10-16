<?php

namespace Ferret\Detector;

use  Ferret\Detector\DetectorInterface;

interface DetectorInterface
{
  /**
   * Detects and returns MIME type for given filepath
   */
  public function detect($filepath);
  
  public function getHash();
  
  public function equal(DetectorInterface $detector);
  
}
