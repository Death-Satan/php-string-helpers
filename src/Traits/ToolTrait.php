<?php


namespace DeathSatan\String\Traits;


trait ToolTrait
{
    public string $raw;

    /**
     * @param string $raw
     * @return static
     */
    public function setRaw(string $raw):self
    {
        $this->raw = $raw;
        return $this;
    }

    /**
     * @return string
     */
    public function getRaw(): string
    {
        return $this->raw;
    }

    public function __construct(string $raw)
    {
        $this->setRaw($raw);
    }
}