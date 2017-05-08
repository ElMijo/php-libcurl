<?php
/**
 * This file is part of the LibCurl package.
 *
 * (c) Jerry Anselmi <jerry.anselmi@gmail.com>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PhpTools\LibCurl\API\Exception\LibCurl\Ftp;

use PhpTools\LibCurl\API\Exception\LibCurl\LibCurlException;

/**
 * This exception thrown when Received an error when trying to set the transfer
 * mode to binary or ASCII.
 *
 * @author Jerry Anselmi <jerry.anselmi@gmail.com>
 */
class FtpCouldNotSetTypeException extends LibCurlException
{
    protected $code = 17;
}
