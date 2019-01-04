<?php

namespace Agilekeys\CodeStandards\Examples;

final class SampleOne
{
    /** @var string $name */
    private $name;

    /** @var int $number */
    private $number;

    /**
     * SampleOne constructor.
     * @param string $name
     * @param int $number
     */
    public function __construct(string $name, int $number)
    {
        $this->name = $name;
        $this->number = $number;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getNumber(): int
    {
        return $this->number;
    }

    /**
     * @param int $number
     */
    public function setNumber(int $number)
    {
        $this->number = $number;
    }
}
