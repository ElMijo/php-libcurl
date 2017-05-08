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
 * This exception thrown when When doing a send operation curl had to rewind the
 * data to retransmit, but the rewinding operation failed.
 *
 * @author Jerry Anselmi <jerry.anselmi@gmail.com>
 */
class SendFailRewindException extends LibCurlException
{
    protected $code = 65;
}
