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
 * This exception thrown when The download could not be resumed because the
 * specified offset was out of the file boundary.
 *
 * @author Jerry Anselmi <jerry.anselmi@gmail.com>
 */
class BadDownloadResumeException extends LibCurlException
{
    protected $code = 36;
}
