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
 * This exception thrown when This error should never be returned by a properly
 * functioning TFTP server.
 *
 * @author Jerry Anselmi <jerry.anselmi@gmail.com>
 */
class TftpNosuchuserException extends LibCurlException
{
    protected $code = 74;
}
