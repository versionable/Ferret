<?php

namespace Versionable\Ferret;

use Versionable\Ferret\Detector\DetectorInterface;

interface FerretInterface {

  public function setDetector(DetectorInterface $detector);

  public function getMIMEType($filename);
}