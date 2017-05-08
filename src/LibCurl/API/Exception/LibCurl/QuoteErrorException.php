<?php
/**
 * This file is part of the LibCurl package.
 *
 * (c) Jerry Anselmi <jerry.anselmi@gmail.com>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PhpTools\LibCurl\API\Exception\LibCurl;

/**
 * This exception thrown when When sending custom "QUOTE" commands to the remote
 * server, one of the commands returned an error code that was 400 or higher
 * (for FTP) or otherwise indicated unsuccessful completion of the command.
 *
 * @author Jerry Anselmi <jerry.anselmi@gmail.com>
 */
class QuoteErrorException extends LibCurlException
{
    protected $code = 21;
}
