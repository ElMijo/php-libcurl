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
 * This exception thrown when An unspecified error occurred during the SSH
 * session.
 *
 * @author Jerry Anselmi <jerry.anselmi@gmail.com>
 */
class SshException extends LibCurlException
{
    protected $code = 79;
}
