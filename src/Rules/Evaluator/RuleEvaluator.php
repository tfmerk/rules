<?php

namespace tfmerk\Rules\Evaluator;

use tfmerk\Rules\Rule\RuleInterface;
use tfmerk\Rules\Input\InputInterface;
use tfmerk\Rules\Output\OutputInterface;

class RuleEvaluator {
    /** @var RuleInterface[] */
    private array $rules;

    public function __construct(array $rules) {
        $this->rules = $rules;
    }

    public function evaluate(InputInterface $input): ?OutputInterface {
        foreach ($this->rules as $rule) {
            if ($rule->evaluate($input)) {
                return $rule->getOutput();
            }
        }
        return null; // Keine Regel passt
    }
}