<?php
namespace DQNEO\HelloWorldEnterpriseEdition;

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

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->getValue();
    }
}
