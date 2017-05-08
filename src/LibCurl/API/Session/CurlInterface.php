<?php
/**
 * This file is part of the LibCurl package.
 *
 * (c) Jerry Anselmi <jerry.anselmi@gmail.com>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PhpTools\LibCurl\API\Session;

/**
 * CuRL interface
 * @author Jerry Anselmi <jerry.anselmi@gmail.com>
 */
interface CurlInterface
{
    /**
     * Let you get option's list
     * @return array
     */
    public function getOptions();
}
