<?php

namespace App\Validation;

class CustomRules
{
    /**
     * Validates that a string contains only alphabetic characters and spaces.
     *
     * @param string $str The input string.
     * @param string $fields The fields (unused).
     * @param array $data The data array (unused).
     * @return bool True if valid, false otherwise.
     */
    public function alpha_space(string $str, string $fields, array $data): bool
    {
        return (bool) preg_match('/^[a-zA-Z\s]+$/', $str);
    }
}
