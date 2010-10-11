<?php

namespace Ferret;

use Ferret\Detector\DetectorInterface;

interface FerretInterface {

  public function setDetector(DetectorInterface $detector);

  public function getMIMEType($filename);
}