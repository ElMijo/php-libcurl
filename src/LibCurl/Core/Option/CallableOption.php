<?php
/**
 * This file is part of the LibCurl package.
 *
 * (c) Jerry Anselmi <jerry.anselmi@gmail.com>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PhpTools\LibCurl\Core\Option;

use PhpTools\LibCurl\API\Option\AbstractOption;
use PhpTools\LibCurl\API\Option\OptionInterface;

/**
 * CuRL option implementation for callable value.
 */
class CallableOption extends AbstractOption implements OptionInterface
{
    /**
     * {@inheritDoc}
     */
    public function getType()
    {
        return 'callable';
    }

    /**
     * {@inheritDoc}
     */
    public function getOptions()
    {
        return [
            CURLOPT_HEADERFUNCTION,
            CURLOPT_PASSWDFUNCTION,
            CURLOPT_PROGRESSFUNCTION,
            CURLOPT_READFUNCTION,
            CURLOPT_WRITEFUNCTION,
        ];
    }
}
