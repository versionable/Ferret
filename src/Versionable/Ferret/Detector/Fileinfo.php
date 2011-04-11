<?php

namespace Versionable\Ferret\Detector;

use Versionable\Ferret\Detector\DetectorInterface;

use Versionable\Ferret\Detector\Exception\DetectorException;

class Fileinfo extends DetectorAbstract
{
  protected $magic_filepath = null;
  
  public function __construct()
  {
    if (!class_exists('finfo'))
    {
      throw new DetectorException('Fileinfo extension is not loaded');
    }
  }
  
  public function getMagicFilepath() 
  {
    return $this->magic_filepath;
  }

  public function setMagicFilepath($magic_filepath) 
  {
    $this->magic_filepath = $magic_filepath;
  }
    
  public function detect($filepath)
  {
    $finfo = new \finfo(FILEINFO_MIME_TYPE);

    $type = $finfo->file($filepath);
    
    if ($type !== false)
    {
      return $type;
    }

    return false;
  }
}
