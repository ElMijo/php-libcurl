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
 * This exception thrown when We were denied access to the resource given in the
 * URL. For FTP, this occurs while trying to change to the remote directory.
 *
 * @author Jerry Anselmi <jerry.anselmi@gmail.com>
 */
class RemoteAccessDeniedException extends LibCurlException
{
    protected $code = 9;
}
