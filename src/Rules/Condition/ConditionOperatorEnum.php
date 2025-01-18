<?php

namespace tfmerk\Rules\Condition;

enum ConditionOperator: string {
    case EQUALS = '==';
    case NOT_EQUALS = '!=';
    case GREATER_THAN = '>';
    case GREATER_OR_EQUALS = '>=';
    case LESS_THAN = '<';
    case LESS_OR_EQUALS = '<=';
}