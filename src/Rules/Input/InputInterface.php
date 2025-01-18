<?php

namespace tfmerk\Rules\Input;

interface InputInterface {
    public function getValue(string $key): mixed;
}