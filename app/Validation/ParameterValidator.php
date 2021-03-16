<?php
 namespace App\Validation;

class ParameterValidator
{
    /**
     * @param $attribute
     * @param $value
     * @param $parameters
     * @return bool
     */
    public function validateNoSpecialCharacters($attribute, $value, $parameters)
    {
        if (mb_ereg('^(?=.*&).*$', $value)) {
            return false;
        }
        else if (mb_ereg('^(?=.*>).*$', $value)) {
            return false;
        }
        else if (mb_ereg('^(?=.*<).*$', $value)) {
            return false;
        }
        else if (mb_ereg('^(?=.*;).*$', $value)) {
            return false;
        }
        else if (mb_ereg('^(?=.*\').*$', $value)) {
            return false;
        }
        else if (mb_ereg('^(?=.*\").*$', $value)) {
            return false;
        }
        else if (mb_ereg('^(?=.*{).*$', $value)) {
            return false;
        }
        else if (mb_ereg('^(?=.*}).*$', $value)) {
            return false;
        }

        return true;
    }
}
