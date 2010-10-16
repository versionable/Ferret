<?php
namespace Ferret;

require_once 'PHPUnit/Framework.php';
require_once 'src/Ferret/Detector/DetectorInterface.php';
require_once 'src/Ferret/FerretInterface.php';
require_once 'src/Ferret/Ferret.php';

use Ferret\Detector\Pathinfo;

/**
 * Test class for Ferret.
 * 
 * @group Ferret
 */
class FerretTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Ferret
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new Ferret;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * 
     */
    public function testSetDetector()
    {
      $stub = $this->getMock("Ferret\Detector\DetectorInterface");
      
      $this->assertTrue($this->object->setDetector($stub));
    }

    /**
     * @todo Implement testGetMimeType().
     */
    public function testGetMimeType()
    {
        $stub = $this->getMock("Ferret\Detector\DetectorInterface");
        
        $stub->expects($this->any())
             ->method('detect')
             ->will($this->returnValue('text/plain'));
        
        $this->object->setDetector($stub);
        
        $this->assertEquals('text/plain', $this->object->getMimeType('somefile.txt'));        
    }
    

    /**
     * @todo Implement testGetMimeType().
     */
    public function testGetMimeTypeUnknown()
    {
        $stub = $this->getMock("Ferret\Detector\DetectorInterface");
        
        $stub->expects($this->any())
             ->method('detect')
             ->will($this->returnValue(false));
        
        $this->object->setDetector($stub);
        
        $this->assertFalse($this->object->getMimeType('somefile.unknown'));
    }
}
