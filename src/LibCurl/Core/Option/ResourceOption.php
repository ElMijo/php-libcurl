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
 * CuRL option implementation for resource value.
 */
class ResourceOption extends AbstractOption implements OptionInterface
{
    /**
     * {@inheritDoc}
     */
    public function getType()
    {
        return 'resource';
    }

    /**
     * {@inheritDoc}
     */
    public function getOptions()
    {
        return [
            CURLOPT_FILE,
            CURLOPT_INFILE,
            CURLOPT_STDERR,
            CURLOPT_WRITEHEADER,
        ];
    }
}
