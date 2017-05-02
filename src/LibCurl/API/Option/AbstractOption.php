<?php
/**
 * This file is part of the LibCurl package.
 *
 * (c) Jerry Anselmi <jerry.anselmi@gmail.com>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PhpTools\LibCurl\API\Option;

use RuntimeException;
use PhpTools\LibCurl\API\Exception\InvalidCurlOptionException;
use PhpTools\LibCurl\API\Exception\InvalidCurlOptionTypeException;
use PhpTools\LibCurl\API\Exception\InvalidCurlOptionListException;

/**
 * CuRL Options abstract class
 * @author Jerry Anselmi <jerry.anselmi@gmail.com>
 */
abstract class AbstractOption
{
    /**
     * Valid types
     * @var array
     */
    private $validTypes = [
        'bool',
        'int',
        'callable',
        'resource',
        'string',
        'array',
    ];

    /**
     * Valid options
     * @var array
     */
    private $options = [];

    /**
     * The construct
     *
     * @throw RuntimeException
     * @throw \PhpTools\LibCurl\API\Exception\InvalidCurlOptionTypeException
     */
    public function __construct()
    {
        if (!is_subclass_of($this, 'PhpTools\LibCurl\API\Option\OptionInterface')) {
            throw new RuntimeException(sprintf(
                "Class %s must implement class %s",
                get_class($this),
                "PhpTools\LibCurl\API\Option\OptionInterface"
            ));
        }

        if (!in_array($this->getType(), $this->validTypes)) {
            throw new InvalidCurlOptionTypeException($this->getType());
        }

        $optionList = $this->getOptionList();
        if (!is_array($optionList)) {
            throw new InvalidCurlOptionListException(get_class($this));
        }

        $optionList = array_filter($optionList, 'is_string');
        if (empty($optionList)) {
            throw new InvalidCurlOptionListException(get_class($this));
        }

        foreach ($optionList as $option) {
            if (defined($option)) {
                $this->options[] = constant($option);
            }
        }
    }

    /**
     * Check if the option exists in the list of options
     *
     * @param  int  $option
     * @return bool
     */
    final public function hasOption($option)
    {
        return in_array($option, $this->getOptions());
    }

    /**
     * Validate Option an value
     * @param  string  $option
     * @param  mixed  $value
     * @return bool
     */
    final public function validate($option, $value)
    {
        if (!$this->hasOption($option)) {
            throw new InvalidCurlOptionException($option);
        }

        return call_user_func($this->getValidateFunction(), $value);
    }

    /**
     * Return all valid options
     *
     * @return long[]
     */
    final public function getOptions()
    {
        return $this->options;
    }

    /**
     * Let you get the validation function
     * @return string
     */
    private function getValidateFunction()
    {
        return sprintf("is_%s", $this->getType());
    }
}
