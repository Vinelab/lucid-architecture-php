<?php

namespace Directory\Foundation;

/**
 * An abstract representation of an entity's part.
 *
 * @author Abed Halawi <abed.halawi@vinelab.com>
 */
class Value
{
    protected $value;

    public function __construct($value)
    {
        $this->setValue($value);
    }

    /**
     * Get a Validation instance with the given rules and input.
     *
     * @param array $input
     * @param array $rules
     *
     * @return \Illuminate\Validation\Validation
     */
    public function validation(array $input, array $rules)
    {
        return app('Directory\Foundation\Validation')->make($input, $rules);
    }

    /**
     * Set the value of the value of the value.
     *
     * @param mixed $Value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * Get the value of the value of the value.
     *
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Return the string representation of the value of this instance.
     *
     * @return string
     */
    public function __toString()
    {
        return sprintf('%s', $this->getValue());
    }

    /**
     * Make parts immutable.
     *
     * @param string $name
     * @param mixed  $value
     */
    public function __set($name, $value)
    {
    }
}
