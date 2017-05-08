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
 * This exception thrown when The FTP server does not understand the PRET
 * command at all or does not support the given argument. Be careful when using
 * CURLOPT_CUSTOMREQUEST, a custom LIST command will be sent with PRET CMD
 * before PASV as well. (Added in 7.20.0).
 *
 * @author Jerry Anselmi <jerry.anselmi@gmail.com>
 */
class FtpPretFailedException extends LibCurlException
{
    protected $code = 84;
}
