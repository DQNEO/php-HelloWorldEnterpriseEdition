<?php
use DQNEO\HelloWorld\HelloWorldApplication;
use DQNEO\HelloWorld\String;
use DQNEO\HelloWorld\Writer\WriterInterface;

class MockWriter implements WriterInterface
{
    public $buf = "";

    public function write(String $string)
    {
        $this->buf .= $string->getValue();
    }

    public function writeLn(String $string)
    {
        $this->buf .= $string->getValue(). "\n";
    }

}

class HelloWorldTest extends \PHPUnit_Framework_TestCase
{
    public function testHelloWorld()
    {
        $string = new String("hello world");
        $writer = new MockWriter;
        $app = new HelloWorldApplication($string, $writer);
        $app->run();
        $this->assertEquals("hello world\n", $writer->buf);
    }

}
