<?php

/**
 * @author Leighton van Rooijen <leighton.vanrooijen@ezyvet.com>
 * @date   06/07/2021
 */
class MultiplyCommand
{
    private int $valueToMultiply;

    /**
     * MultiplyCommand constructor.
     *
     * @param $valueToMultiply
     */
    public function __construct($valueToMultiply)
    {
        $this->valueToMultiply = $valueToMultiply;
    }

    /**
     * @param int $currentValue
     *
     * @return int
     */
    public function execute(int $currentValue): int
    {
        return $currentValue * $this->valueToMultiply;
    }

    /**
     * @param int $currentValue
     *
     * @return int
     */
    public function undo(int $currentValue): int
    {
        return $currentValue / $this->valueToMultiply;
    }
}
