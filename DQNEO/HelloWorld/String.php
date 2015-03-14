<?php
namespace DQNEO\HelloWorld;

class String
{
    private $value;

    const EOL = "\n";

    public function __construct($value)
    {
        $this->value = $value;
    }

    public function getValue()
    {
        return $this->value;
    }

}
