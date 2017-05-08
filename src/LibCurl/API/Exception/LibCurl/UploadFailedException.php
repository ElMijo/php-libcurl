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
 * This exception thrown when Failed starting the upload. For FTP, the server
 * typically denied the STOR command. The error buffer usually contains the
 * server's explanation for this.
 *
 * @author Jerry Anselmi <jerry.anselmi@gmail.com>
 */
class UploadFailedException extends LibCurlException
{
    protected $code = 25;
}
