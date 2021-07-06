<?php

/**
 * @author Leighton van Rooijen
 * @date   06/07/2021
 */
class SubtractCommand
{
    /**
     * @var int
     */
    private int $valueToSubtract;

    /**
     * SubtractCommand constructor.
     *
     * @param $valueToSubtract
     */
    public function __construct($valueToSubtract)
    {
        $this->valueToSubtract = $valueToSubtract;
    }

    /**
     *
     * @param int $currentValue
     *
     * @return int
     */
    public function execute(int $currentValue): int
    {
        return $currentValue - $this->valueToSubtract;
    }

    /**
     * @param int $currentValue
     *
     * @return int
     */
    public function undo(int $currentValue): int
    {
        return $currentValue + $this->valueToSubtract;
    }
}
