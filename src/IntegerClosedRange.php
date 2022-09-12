<?php
declare(strict_types=1);

namespace TddWorkshop;


use LogicException;

class IntegerClosedRange
{
    /** @var int 下端点 */
    public int $lowerEndPoint;
    /** @var int 上端点 */
    public int $upperEndPoint;

    /**
     * 下端点($lowerEndPoint)は上端点($upperEndPoint)より小さくある必要があります。
     *
     * @param int $lowerEndPoint 下端点
     * @param int $upperEndPoint 上端点
     */
    public function __construct(int $lowerEndPoint, int $upperEndPoint)
    {
        if ($lowerEndPoint > $upperEndPoint) throw new LogicException('下端点が上端点を超える事は出来ないです');

        $this->lowerEndPoint = $lowerEndPoint;
        $this->upperEndPoint = $upperEndPoint;
    }

    public function toString(): string
    {
        return "[{$this->lowerEndPoint},{$this->upperEndPoint}]";
    }

    /**
     * @param int $n
     * @return bool
     */
    public function isIn(int $n): bool
    {
        // memo $n の中にオブジェクトが入っているように感じてしまう命名。contains,includesなどなど
        return ($this->lowerEndPoint <= $n) && ($n <= $this->upperEndPoint);
    }
}
