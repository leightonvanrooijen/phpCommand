<?php

/**
 * @author Leighton van Rooijen
 * @date   06/07/2021
 */
class DivideCommand
{
    private int $valueToDivide;

    /**
     * DivideCommand constructor.
     *
     * @param $valueToDivide
     */
    public function __construct($valueToDivide)
    {
        $this->valueToDivide = $valueToDivide;
    }

    /**
     * @param int $currentValue
     *
     * @return int
     */
    public function execute(int $currentValue): int
    {
        return $currentValue / $this->valueToDivide;
    }

    /**
     * @param int $currentValue
     *
     * @return int
     */
    public function undo(int $currentValue): int
    {
        return $currentValue * $this->valueToDivide;
    }
}
