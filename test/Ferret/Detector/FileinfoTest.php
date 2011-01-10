<?php
namespace Ferret\Detector;

require_once 'src/Ferret/Detector/DetectorInterface.php';
require_once 'src/Ferret/Detector/DetectorAbstract.php';
require_once 'src/Ferret/Detector/Fileinfo.php';

require_once 'src/Ferret/Detector/Exception/DetectorException.php';


/**
 * Test class for Fileinfo.
 * Generated by PHPUnit on 2010-10-09 at 20:06:58.
 * 
 * @group Ferret
 * @group ExternalLibrary
 * @group Fileinfo
 */
class FileinfoTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Fileinfo
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
      $this->object = new Fileinfo;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * @todo Implement testDetect().
     */
    public function testDetect()
    {
      $this->assertEquals('text/plain', $this->object->detect('data/unit.txt'));
      
    }
    
    /**
     * @todo Implement testDetect().
     */
    public function testDetectFail()
    {
      $this->assertFalse($this->object->detect('data/unit.false'));
      
    }    
}
