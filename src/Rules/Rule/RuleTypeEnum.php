<?php

namespace tfmerk\Rules\Rule;

enum RuleTypeEnum: string {
    case AND = 'AND';
    case OR = 'OR';
}