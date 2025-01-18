<?php

namespace tfmerk\Rules\Evaluator;

interface EvaluatorInterface {
    public function evaluate(InputInterface $input): ?OutputInterface;
}