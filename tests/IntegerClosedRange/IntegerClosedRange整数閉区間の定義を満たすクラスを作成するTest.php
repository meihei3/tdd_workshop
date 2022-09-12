<?php
/** @noinspection NonAsciiCharacters */
declare(strict_types=1);

namespace MyTest\IntegerClosedRange;

use PHPUnit\Framework\TestCase;
use TddWorkshop\IntegerClosedRange;

class IntegerClosedRange整数閉区間の定義を満たすクラスを作成するTest extends TestCase
{
    /**
     * @test
     */
    public function 下端点が上端点より小さい整数閉区間_0_1_でオブジェクトを作成出来る()
    {
        try {
            $obj = new IntegerClosedRange(0, 1);
            $this->assertInstanceOf(IntegerClosedRange::class, $obj);
        } catch (\LogicException $exception) {
            $this->assertTrue(false, 'インスタンスが生成出来なかった');
        }
    }

    /**
     * @test
     */
    public function 下端点が上端点より小さい整数閉区間_1_2_でオブジェクトを作成出来る()
    {
        try {
            $obj = new IntegerClosedRange(1, 2);
            $this->assertInstanceOf(IntegerClosedRange::class, $obj);
        } catch (\LogicException $exception) {
            $this->assertTrue(false, 'インスタンスが生成出来なかった');
        }
    }

//    /**
//     * @test
//     */
//    public function 下端点が整数値下限の境界値、上端点が整数値上限の境界値である区間で整数閉区間オブジェクトを作成出来る()
//    {
//        try {
//            $obj = new IntegerClosedRange(PHP_INT_MAX * -1, PHP_INT_MAX);
//            $this->assertInstanceOf(IntegerClosedRange::class, $obj);
//        } catch (\LogicException $exception) {
//            $this->assertTrue(false, 'インスタンスが生成出来なかった');
//        }
//    }

    /**
     * @test
     */
    public function 下端点が上端点と同じ整数閉区間_0_0_でオブジェクトを作成出来る()
    {
        try {
            $obj = new IntegerClosedRange(0, 0);
            $this->assertInstanceOf(IntegerClosedRange::class, $obj);
        } catch (\LogicException $exception) {
            $this->assertTrue(false, 'インスタンスが生成出来なかった');
        }
    }

    /**
     * @test
     */
    public function 下端点が上端点と同じ整数閉区間_1_1_でオブジェクトを作成出来る()
    {
        try {
            $obj = new IntegerClosedRange(0, 0);
            $this->assertInstanceOf(IntegerClosedRange::class, $obj);
        } catch (\LogicException $exception) {
            $this->assertTrue(false, 'インスタンスが生成出来なかった');
        }
    }

//    /**
//     * @test
//     */
//    public function 下端点と上端点が整数値上限の境界値である区間で整数閉区間オブジェクトを作成出来る()
//    {
//        try {
//            $obj = new IntegerClosedRange(PHP_INT_MAX, PHP_INT_MAX);
//            $this->assertInstanceOf(IntegerClosedRange::class, $obj);
//        } catch (\LogicException $exception) {
//            $this->assertTrue(false, 'インスタンスが生成出来なかった');
//        }
//    }

    /**
     * @test
     */
    public function 下端点が上端点より大きい整数閉区間_1_0_でオブジェクトを作成出来ない()
    {
        try {
            $obj = new IntegerClosedRange(1, 0);
            $this->fail('インスタンスが生成されてしまった');
        } catch (\LogicException $expected) {
            $this->assertTrue(true);
        }
    }

    /**
     * @test
     */
    public function 下端点が上端点より大きい整数閉区間_0_m1_でオブジェクトを作成出来ない()
    {
        try {
            $obj = new IntegerClosedRange(1, 0);
            $this->fail('インスタンスが生成されてしまった');
        } catch (\LogicException $expected) {
            $this->assertTrue(true);
        }
    }

//    /**
//     * @test
//     */
//    public function 下端点が整数値上限の境界値、上端点が整数値下限の境界値である区間で整数閉区間オブジェクトを作成出来る()
//    {
//        try {
//            $obj = new IntegerClosedRange(PHP_INT_MAX, PHP_INT_MAX * -1);
//            $this->fail('インスタンスが生成されてしまった');
//        } catch (\LogicException $expected) {
//            $this->assertTrue(true);
//        }
//    }
}
