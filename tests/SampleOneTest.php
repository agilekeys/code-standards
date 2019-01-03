<?php
/**
 * Created by PhpStorm.
 * User: duan.li
 * Date: 4/1/19
 * Time: 10:29 AM
 */

namespace Agilekeys\CodeStandards\Examples\Tests;

use Agilekeys\CodeStandards\Examples\SampleOne;
use PHPUnit\Framework\TestCase;

class SampleOneTest extends TestCase
{
    public function test_class()
    {
        $sample = new SampleOne('name', 123);
        static::assertEquals('name', $sample->getName());
        static::assertEquals(123, $sample->getNumber());
    }
}
