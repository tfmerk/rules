<?php

namespace tfmerk\Rules\Output;

class Output implements OutputInterface {
    private string $value;

    public function __construct(string $value) {
        $this->value = $value;
    }

    public function getValue(): string {
        return $this->value;
    }
}