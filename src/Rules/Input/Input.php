<?php

namespace tfmerk\Rules\Input;

class Input implements InputInterface {
    private array $data;

    public function __construct(array $data) {
        $this->data = $data;
    }

    public function getValue(string $key): mixed {
        return $this->data[$key] ?? null;
    }
}