<?php

namespace tfmerk\Rules\Rule;

interface RuleInterface {
    public function evaluate(InputInterface $input): bool;
    public function getOutput(): OutputInterface;
}