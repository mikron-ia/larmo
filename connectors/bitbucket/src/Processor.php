<?php
/**
 * Created by PhpStorm.
 * User: mlabedowicz
 */

namespace FP\LarmoAgents\BitBucket;

class Processor {

    private $raw;

    public function __construct($raw)
    {
        $this->raw = $raw;
    }

    public function getRaw()
    {
        return $this->raw;
    }

    public function getJSON()
    {
        return "";
    }

}