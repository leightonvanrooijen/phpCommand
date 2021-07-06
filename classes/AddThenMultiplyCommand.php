<?php

/**
 * @author Leighton van Rooijen
 * @date   06/07/2021
 */
class AddThenMultiplyCommand
{

    private MultiplyCommand $multiplyCommand;
    private AddCommand $addCommand;

    /**
     * AddThenMultiplyCommand constructor.
     *
     * @param int $valueToAdd
     * @param int $valueToMultiply
     */
    public function __construct(int $valueToAdd, int $valueToMultiply)
    {
        $this->addCommand = new AddCommand($valueToAdd);
        $this->multiplyCommand = new MultiplyCommand($valueToMultiply);
    }

    /**
     * @param $currentValue
     *
     * @return int
     */
    public function execute($currentValue): int
    {
        $newValue = $this->addCommand->execute($currentValue);
        return $this->multiplyCommand->execute($newValue);
    }

    /**
     * @param $currentValue
     *
     * @return int
     */
    public function undo($currentValue): int
    {
        $newValue = $this->multiplyCommand->undo($currentValue);
        return $this->addCommand->undo($newValue);
    }
}
