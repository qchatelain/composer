<?php

namespace Src;

class InvoiceLine
{
    private $description;
    private $value;
    private $vat;

    public function __construct($description, $value, $vat)
    {
        $this->description = $description;
        $this->value = $value;
        $this->vat = $vat;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function getVat()
    {
        return $this->vat;
    }

    public function setDescription($description)
    {
        $this->descritpion = $description;
    }

    public function setValue($value)
    {
        $this->value = $value;
    }

    public function setVat($vat)
    {
        $this->vat = $vat;
    }

    public function calculateTotal()
    {
        $value = $this->value;
        return $value + ($this->vat * $value) /100;
    }
}