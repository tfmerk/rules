<?php

namespace tfmerk\Rules\Condition;


interface ConditionInterface {
    public function evaluate(InputInterface $input): bool;
}