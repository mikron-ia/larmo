<?php
/**
 * Created by PhpStorm.
 * User: mlabedowicz
 */

use FP\LarmoAgents\BitBucket\Processor;

class ProcessorTest extends PHPUnit_Framework_TestCase {

    private $processor;
    private $testContent = "CONTENT";

    public function setup()
    {
        $this->processor = new Processor($this->testContent);
    }

    /**
     * @test
     */
    public function rawContentReturnedCorrectly()
    {
        $this->assertEquals($this->testContent,$this->processor->getRaw());
    }

}