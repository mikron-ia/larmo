<?php
/**
 * Created by PhpStorm.
 * User: mlabedowicz
 */

namespace FP\LarmoAgents\BitBucket;


interface SenderInterface {

    public function __construct($data);

    /**
     * Wraps and sends JSON data packet
     * @return boolean Success of the operation
     */
    public function send();

}