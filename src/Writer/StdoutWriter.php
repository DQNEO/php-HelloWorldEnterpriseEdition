<?php
namespace DQNEO\HelloWorldEnterpriseEdition\Writer;
use DQNEO\HelloWorldEnterpriseEdition\String;

class StdoutWriter implements WriterInterface
{
    private $eol;

    public function __construct()
    {
        $this->eol = new String(String::EOL);
    }

    public function write(String $string)
    {
        echo $string->getValue();
    }

    public function writeLn(String $string)
    {
        $this->write($string);
        $this->write($this->eol);
    }
}
