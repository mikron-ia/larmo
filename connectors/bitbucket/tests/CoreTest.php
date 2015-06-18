<?php
/**
 * Created by PhpStorm.
 * User: mlabedowicz
 */

use FP\LarmoAgents\BitBucket\Core;

class CoreTest extends PHPUnit_Framework_TestCase {

    private $core;

    public function setup()
    {
        $this->core = new Core();
    }

    /**
     * @test
     */
    public function contentIsSetCorrectly()
    {
        $content = ["TEST" => "Test","CONTENT" => "content"];
        $this->core->setContent($content);

        $this->assertEquals($content,$this->core->getContent());
    }

}