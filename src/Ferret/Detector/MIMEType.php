<?php

namespace Ferret\Detector;

use \Ferret\Detector\DetectorInterface;

use \Ferret\Detector\Exception\DetectorException;

require_once 'MIME/Type.php';

class MIMEType extends DetectorAbstract
{
  public function __construct()
  {
    if (\method_exists('\MIME_Type', 'autoDetect'))
    {
      throw new DetectorException('MIME type pear library is not loaded');
    }
  }
    
  public function detect($filepath)
  {
    return MIME_Type::autoDetect($filepath);
  }
}
