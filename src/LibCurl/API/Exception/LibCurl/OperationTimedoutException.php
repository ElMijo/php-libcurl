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
 * This exception thrown when Operation timeout. The specified time-out period
 * was reached according to the conditions.
 *
 * @author Jerry Anselmi <jerry.anselmi@gmail.com>
 */
class OperationTimedoutException extends LibCurlException
{
    protected $code = 28;
}
