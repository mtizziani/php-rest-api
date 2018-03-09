<?php
/**
 * Created by PhpStorm.
 * User: maik
 * Date: 09.03.18
 * Time: 13:20
 */

namespace mtizziani\api\test;

use mtizziani\api\Application;
use PHPUnit\Framework\TestCase;

class ApplicationTest extends TestCase {

  /**
   * @test
   * @covers \mtizziani\api\Application
   *   */
  public function can_be_initialized(){
    $this->assertInstanceOf(Application::class, new Application());
  }
}
