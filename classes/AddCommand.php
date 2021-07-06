<?php

/**
 * @author Leighton van Rooijen
 * @date   06/07/2021
 */
class AddCommand
{
    private int $valueToAdd;

    /**
     * AddCommand constructor.
     *
     * @param $valueToAdd
     */
    public function __construct($valueToAdd)
    {
        $this->valueToAdd = $valueToAdd;
    }

    /**
     * @param int $currentValue
     *
     * @return int
     */
    public function execute(int $currentValue): int
    {
        return $currentValue + $this->valueToAdd;
    }

    /**
     * @param int $currentValue
     *
     * @return int
     */
    public function undo(int $currentValue): int
    {
        return $currentValue - $this->valueToAdd;
    }
}
