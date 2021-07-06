<?php

/**
 * @author Leighton van Rooijen
 * @date   06/07/2021
 */
class Calculator
{
    private int $value;
    private array $history = [];

    /**
     * Calculator constructor.
     */
    public function __construct()
    {
        $this->value = 0;
    }

    /**
     * @return int
     */
    public function getValue(): int
    {
        return $this->value;
    }

    /**
     * @param $command
     */
    public function executeCommand($command)
    {
        $this->value = $command->execute($this->value);
        $this->history[] = $command;
    }

    /**
     *
     */
    public function undo()
    {
        $command = array_pop($this->history);
        $this->value = $command->undo($this->value);
    }
}
