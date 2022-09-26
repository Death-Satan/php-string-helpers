<?php


namespace DeathSatan\String\Tool;


use DeathSatan\String\Traits\ToolTrait;

/**
 * 字符串截取类
 * Class OffsetStr
 * @package DeathSatan\String\Tool
 */
class OffsetStr
{
    use ToolTrait;

    /** @var int 当前偏移值 */
    public int $offset = 0;

    /**
     * @return int
     */
    public function getOffset(): int
    {
        return $this->offset;
    }

    /**
     * 截取length长度的字符，并且把当前实例的偏移值+传入的length
     * @param int $length 要截取的长度
     * @return false|string
     */
    public function offset_substr(int $length = 0)
    {
        if ($length <=0){
            $result_str = substr($this->getRaw(),$this->getOffset());
        }else{
            $result_str = substr($this->getRaw(),$this->getOffset(),$length);
        }
        $this->setOffset($this->getOffset() + $length);
        return $result_str;
    }

    /**
     * @param int $offset
     */
    public function setOffset(int $offset): void
    {
        $this->offset = $offset;
    }

    /**
     * 返回剩下的字符串长度
     * @return int
     */
    public function surplus():int
    {
        return $this->length() - $this->getOffset();
    }

    /**
     * 返回字符串的长度
     * @return int
     */
    public function length():int
    {
        return strlen($this->raw);
    }
}