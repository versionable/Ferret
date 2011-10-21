<?php

namespace Versionable\Ferret\Detector;

use Versionable\Ferret\Detector\DetectorInterface;

abstract class DetectorAbstract implements DetectorInterface
{

  public function getHash()
  {
    return get_class($this);
  }

  public function equal(DetectorInterface $detector)
  {
    if ($this->getHash() === $detector->getHash())
    {
      return true;
    }

    return false;
  }

}
