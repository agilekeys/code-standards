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

    public function test_set_get_name()
    {
    	$sample = new SampleOne('name', 123);
    	$sample->setName('eman');
    	$sample->setNumber(321);
    	static::assertNotEquals('name', $sample->getName());
        static::assertNotEquals(123, $sample->getNumber());	

        static::assertEquals('eman', $sample->getName());
        static::assertEquals(321, $sample->getNumber());	
    }
}
