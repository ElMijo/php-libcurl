<?php
/**
 * This file is part of the LibCurl package.
 *
 * (c) Jerry Anselmi <jerry.anselmi@gmail.com>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PhpTools\LibCurl\Core\Option;

use PhpTools\LibCurl\API\Exception\InvalidCurlOptionException;

/**
 * CuRL option implementation for int value.
 */
class OptionService
{
    /**
     * @var 'PhpTools\LibCurl\Core\Option\BoolOption
     */
    private $boolOption;

    /**
     * @var 'PhpTools\LibCurl\Core\Option\IntOption
     */
    private $intOption;

    /**
     * @var 'PhpTools\LibCurl\Core\Option\StringOption
     */
    private $stringOption;

    /**
     * @var 'PhpTools\LibCurl\Core\Option\ArrayOption
     */
    private $arrayOption;

    /**
     * @var 'PhpTools\LibCurl\Core\Option\ResourceOption
     */
    private $resourceOption;

    /**
     * @var 'PhpTools\LibCurl\Core\Option\CallableOption
     */
    private $callableOption;

    /**
     * the construct
     */
    public function __construct()
    {
        $this->boolOption = new BoolOption();
        $this->intOption = new IntOption();
        $this->stringOption = new StringOption();
        $this->arrayOption = new ArrayOption();
        $this->resourceOption = new ResourceOption();
        $this->callableOption = new CallableOption();
    }

    /**
     * Valid CuRL option.
     * @param  long  $option
     * @param  mixed  $value
     *
     * @throw \PhpTools\LibCurl\API\Exception\InvalidCurlOptionException
     *
     * @return bool
     */
    public function validateOption($option, $value)
    {
        foreach (get_object_vars($this) as $optionDefinition) {
            if ($optionDefinition->hasOption($option)) {
                return  $optionDefinition->validate($option, $value);
            }
        }
        throw new InvalidCurlOptionException($option);
    }
}
