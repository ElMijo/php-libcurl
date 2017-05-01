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
use PhpTools\LibCurl\Lib\Exception\InvalidStringException;
use PhpTools\LibCurl\API\Exception\InvalidCurlOptionException;
use PhpTools\LibCurl\API\Exception\InvalidCurlOptionTypeException;

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
     * The construct
     *
     * @throw RuntimeException
     * @throw \PhpTools\LibCurl\API\Exception\InvalidCurlOptionTypeException
     */
    public function __construct()
    {
        if (!is_subclass_of($this, 'PhpTools\LibCurl\API\Option\OptionInterface')) {
            throw new RuntimeException(sprintf(
                "Class %s must extends class %s",
                get_class($this),
                "PhpTools\PhpCurl\Core\PhpCurlAware"
            ));
        }

        if (!in_array($this->getType(), $this->validTypes)) {
            throw new InvalidCurlOptionTypeException($this->getType());
        }
    }

    /**
     * Check if the option exists in the list of options
     *
     * @param  string  $option
     * @return bool
     */
    final public function hasOption($option)
    {
        return in_array($option, array_filter($this->getOptions(), 'is_long'));
    }

    /**
     * Validate Option an value
     * @param  string  $option
     * @param  mixed  $value
     * @return bool
     */
    final public function validate($option, $value)
    {
        if (!$this->isValidOption($option)) {
            throw new InvalidCurlOptionException($option);
        }

        return call_user_func($this->getValidateFunction(), $value);
    }

    /**
     * Valid if the option exists in the option's list.
     * @param  string   $option
     * @return bool
     */
    private function isValidOption($option)
    {
        return in_array($option, array_filter($this->getOptions(), 'is_long'));
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
