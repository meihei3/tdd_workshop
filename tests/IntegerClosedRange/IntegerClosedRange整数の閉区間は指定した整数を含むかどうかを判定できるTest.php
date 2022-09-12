<?php
/** @noinspection NonAsciiCharacters */
declare(strict_types=1);

namespace MyTest\IntegerClosedRange;

use PHPUnit\Framework\TestCase;
use TddWorkshop\IntegerClosedRange;

class IntegerClosedRange整数の閉区間は指定した整数を含むかどうかを判定できるTest extends TestCase
{
    /**
     * @test
     * @dataProvider 整数開区間に存在する整数は整数閉区間内に存在するテストのDataProvider
     */
    public function 整数開区間に存在する整数は整数閉区間内に存在する(int $a, int $b, int $c)
    {
        $obj = new IntegerClosedRange($a, $b);

        $this->assertTrue($obj->isIn($c));
    }

    public function 整数開区間に存在する整数は整数閉区間内に存在するテストのDataProvider(): array
    {
        return [
            '0から2の整数開区間に存在する1は、0から2の整数閉区間内に存在する' => [0, 2, 1],
            '1から3の整数開区間に存在する2は、1から3の整数閉区間内に存在する' => [1, 3, 2],
        ];
    }

    /**
     * @test
     * @dataProvider 下端点の整数は整数閉区間内に存在するテストのDataProvider
     */
    public function 下端点の整数は整数閉区間内に存在する(int $a, int $b, int $c)
    {
        $obj = new IntegerClosedRange($a, $b);

        $this->assertTrue($obj->isIn($c));
    }

    public function 下端点の整数は整数閉区間内に存在するテストのDataProvider(): array
    {
        return [
            '0から2の整数閉区間の下端点0は、0から2の整数閉区間内に存在する' => [0, 2, 0],
            '1から3の整数閉区間の下端点1は、1から3の整数閉区間内に存在する' => [1, 3, 1],
        ];
    }

    /**
     * @test
     * @dataProvider 上端点の整数は整数閉区間内に存在するテストのDataProvider
     */
    public function 上端点の整数は整数閉区間内に存在する(int $a, int $b, int $c)
    {
        $obj = new IntegerClosedRange($a, $b);

        $this->assertTrue($obj->isIn($c));
    }

    public function 上端点の整数は整数閉区間内に存在するテストのDataProvider(): array
    {
        return [
            '0から2の整数閉区間の上端点2は、0から2の整数閉区間内に存在する' => [0, 2, 2],
            '1から3の整数閉区間の上端点3は、1から3の整数閉区間内に存在する' => [1, 3, 3],
        ];
    }

    /**
     * @test
     * @dataProvider 下端点より小さい整数は整数閉区間内に存在しないテストのDataProvider
     */
    public function 下端点より小さい整数は整数閉区間内に存在しない(int $a, int $b, int $c)
    {
        $obj = new IntegerClosedRange($a, $b);

        $this->assertFalse($obj->isIn($c));
    }

    public function 下端点より小さい整数は整数閉区間内に存在しないテストのDataProvider(): array
    {
        return [
            '0から2の整数閉区間の下端点よりも小さい整数m1は、0から2の整数閉区間内に存在しない' => [0, 2, -1],
            '1から3の整数閉区間の下端点よりも小さい整数0は、1から3の整数閉区間内に存在する' => [1, 3, 0],
        ];
    }
}
