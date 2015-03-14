<?php
namespace DQNEO\HelloWorld;

interface WriterInterface
{
    public function write(String $string);

    public function writeLn(String $string);

}
