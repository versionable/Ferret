<?php

namespace Ferret\Detector;

interface DetectorInterface
{
  /**
   * Detects and returns MIME type for given filepath
   */
  public function detect($filepath);
}
