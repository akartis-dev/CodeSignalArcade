<?php
/**
 * Rains of Reason
 * variableName
 */

function variableName($name) {

    return (bool) preg_match_all('/^[a-zA-Z_]+[a-zA-Z0-9_]*$/i', $name);

}

print_r(variableName("var_1__Int"));