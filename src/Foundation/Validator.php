<?php

namespace Directory\Foundation;

/**
 * @author Abed Halawi <abed.halawi@vinelab.com>
 */
class Validator
{
    protected $rules = [];

    protected $validation;

    public function __construct(Validation $validation)
    {
        $this->validation = $validation;
    }

    /**
     * Validate the given input.
     *
     * @param array $input
     * @param array $rules
     *
     * @return bool
     *
     * @throws Exception
     */
    public function validate($input, array $rules = [])
    {
        $validation = $this->validation($input, $rules);

        if ($validation->fails()) {
            throw new InvalidInputException($validation);
        }

        return true;
    }

    /**
     * Get a validation instance out of the given input and optionatlly rules
     * by default the $rules property will be used.
     *
     * @param array $input
     * @param array $rules
     *
     * @return \Illuminate\Validation\Validator
     */
    public function validation($input, array $rules = [])
    {
        if (empty($rules)) {
            $rules = $this->rules;
        }

        return $this->validation->make($input, $rules);
    }
}
