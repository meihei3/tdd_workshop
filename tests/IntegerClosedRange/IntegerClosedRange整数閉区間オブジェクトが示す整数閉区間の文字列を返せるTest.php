<?php
/** @noinspection NonAsciiCharacters */
declare(strict_types=1);

namespace MyTest\IntegerClosedRange;

use PHPUnit\Framework\TestCase;
use TddWorkshop\IntegerClosedRange;

class IntegerClosedRange整数閉区間オブジェクトが示す整数閉区間の文字列を返せるTest extends TestCase
{
    /**
     * @test
     */
    public function 下端点３、上端点８の整数閉区間では”［３，８］”を返す()
    {
        $obj = new IntegerClosedRange(3, 8);
        $this->assertSame('[3,8]', $obj->toString());
    }

    /**
     * @test
     */
    public function 下端点４、上端点９の整数閉区間では”［４，９］”を返す()
    {
        $obj = new IntegerClosedRange(4, 9);
        $this->assertSame('[4,9]', $obj->toString());
    }
}
