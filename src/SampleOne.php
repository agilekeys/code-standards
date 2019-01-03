<?php

namespace Agilekeys\CodeStandards\Examples;

final class SampleOne
{
    private $name;

    private $number;

    public function __construct(string $name, int $number)
    {
        $this->name = $name;
        $this->number = $number;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getNumber(): int
    {
        return $this->number;
    }

    public function setNumber(int $number)
    {
        $this->number = $number;
    }
}
