<?php
namespace DQNEO\HelloWorld\Writer;
use DQNEO\HelloWorld\String;

interface WriterInterface
{
    public function write(String $string);

    public function writeLn(String $string);

}
