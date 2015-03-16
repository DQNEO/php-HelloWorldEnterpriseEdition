<?php
namespace DQNEO\HelloWorldEnterpriseEdition\Writer;
use DQNEO\HelloWorldEnterpriseEdition\String;

interface WriterInterface
{
    public function write(String $string);

    public function writeLn(String $string);

}
