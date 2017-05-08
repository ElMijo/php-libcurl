<?php
/**
 * This file is part of the LibCurl package.
 *
 * (c) Jerry Anselmi <jerry.anselmi@gmail.com>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PhpTools\LibCurl\API\Exception\LibCurl\Tftp;

use PhpTools\LibCurl\API\Exception\LibCurl\LibCurlException;

/**
 * This exception thrown when Illegal TFTP operation.
 *
 * @author Jerry Anselmi <jerry.anselmi@gmail.com>
 */
class TftpIllegalException extends LibCurlException
{
    protected $code = 71;
}
