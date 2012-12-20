<?php

namespace Versionable\Tests\Ferret\Detector;

use Versionable\Ferret\Detector\MIMEType;

/**
 * Test class for MIMEType.
 * @group Ferret
 * @group ExternalLibrary
 * @group Fileinfo
 */
class MIMETypeTest extends \PHPUnit_Framework_TestCase {

  /**
   * @var MIMEType
   */
  protected $object;

  /**
   * Sets up the fixture, for example, opens a network connection.
   * This method is called before a test is executed.
   */
  protected function setUp() {
    $this->object = new MIMEType;
  }

  /**
   * Tears down the fixture, for example, closes a network connection.
   * This method is called after a test is executed.
   */
  protected function tearDown() {

  }

  /**
   * @todo Implement testDetect().
   */
  public function testDetect() {
    $this->assertEquals('text/plain', $this->object->detect(__DIR__.'/../../../data/unit.txt'));
  }

}
