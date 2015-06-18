<?php
/**
 * Created by PhpStorm.
 * User: mlabedowicz
 * This class only purpose is to be a placeholder - it plainly writes the JSON to file
 */

namespace FP\LarmoAgents\BitBucket;

class SenderToFile implements SenderInterface
{
    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function send()
    {
        file_put_contents("./json.txt",var_export($this->data,true),FILE_APPEND);
    }
}