<?php

namespace tfmerk\Rules\Rule;

use tfmerk\Rules\Input\InputInterface;
use tfmerk\Rules\Output\OutputInterface;
use tfmerk\Rules\Condition\ConditionInterface;

class Rule implements RuleInterface {
    private RuleTypeEnum $type; // AND oder OR
    /** @var ConditionInterface[] */
    private array $conditions;
    private OutputInterface $output;

    public function __construct(RuleTypeEnum $type, array $conditions, OutputInterface $output) {
        $this->type = $type;
        $this->conditions = $conditions;
        $this->output = $output;
    }

    public function evaluate(InputInterface $input): bool {
        $results = array_map(fn($condition) => $condition->evaluate($input), $this->conditions);

        return $this->type === RuleTypeEnum::AND
            ? !in_array(false, $results, true)
            : in_array(true, $results, true);
    }

    public function getOutput(): OutputInterface {
        return $this->output;
    }
}