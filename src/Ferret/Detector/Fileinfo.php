<?php

namespace Ferret\Detector;

use \Ferret\Detector\DetectorInterface;

use \Ferret\Detector\Exception\DetectorException;

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
    // Support for PHP 5.3+
    if (defined('FILEINFO_MIME_TYPE'))
    {
      $finfo = new \finfo(FILEINFO_MIME_TYPE);

      $type = $finfo->file($filepath);
    }
    else
    {
      $finfo = \finfo_open(FILEINFO_MIME);

      $type = \finfo_file($finfo, $filepath);

      \finfo_close($finfo);
    }
    
    
    if ($type !== false)
    {
      return $type;
    }

    return false;
  }
}
