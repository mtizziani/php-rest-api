<?php
/**
 * Created by PhpStorm.
 * User: maik
 * Date: 09.03.18
 * Time: 09:38
 */

namespace mtizziani\rest\test;

use \PHPUnit\Framework\TestCase;


class BasicTest extends TestCase {

  /**
   * @test
   * @coversNothing
   */
  public function check_if_PHPUnit_runs (){
    $this->assertTrue(true);
  }

  /**
   * @test
   * @coversNothing
   */
  public function check_if_get_red() {
    $this->assertTrue(false );
  }
}