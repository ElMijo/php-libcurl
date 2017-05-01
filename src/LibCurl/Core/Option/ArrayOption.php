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
 * CuRL option implementation for array value.
 */
class ArrayOption extends AbstractOption implements OptionInterface
{
    /**
     * base options of curl options array type
     * @var array
     */
    private $options = [
    ];

    /**
     * {@inheritDoc}
     */
    public function getType()
    {
        return 'array';
    }

    /**
     * {@inheritDoc}
     */
    public function getOptionList()
    {
        return [
            'CURLOPT_HTTP200ALIASES',
            'CURLOPT_HTTPHEADER',
            'CURLOPT_POSTQUOTE',
            'CURLOPT_QUOTE',
            'CURLOPT_CONNECT_TO',
            'CURLOPT_PROXYHEADER',
        ];
    }
}
