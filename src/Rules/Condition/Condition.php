<?php

namespace tfmerk\Rules\Condition;

use tfmerk\Rules\Condition\ConditionInterface;
use tfmerk\Rules\Input\InputInterface;

class Condition implements ConditionInterface {
    private string $key;
    private ConditionOperator $operator;
    private mixed $value;

    public function __construct(string $key, ConditionOperator $operator, mixed $value) {
        $this->key = $key;
        $this->operator = $operator;
        $this->value = $value;
    }

    public function evaluate(InputInterface $input): bool {
        $inputValue = $input->getValue($this->key);

        return match ($this->operator) {
            ConditionOperator::EQUALS => $inputValue == $this->value,
            ConditionOperator::NOT_EQUALS => $inputValue != $this->value,
            ConditionOperator::GREATER_THAN => $inputValue > $this->value,
            ConditionOperator::GREATER_OR_EQUALS => $inputValue >= $this->value,
            ConditionOperator::LESS_THAN => $inputValue < $this->value,
            ConditionOperator::LESS_OR_EQUALS => $inputValue <= $this->value,
        };
    }
}