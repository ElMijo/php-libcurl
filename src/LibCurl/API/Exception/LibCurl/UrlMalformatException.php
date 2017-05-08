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
 * This exception thrown when Very early initialization code failed. This is
 * likely to be an internal error or problem, or a resource problem where
 * something fundamental couldn't get done at init time.
 *
 * @author Jerry Anselmi <jerry.anselmi@gmail.com>
 */
class UrlMalformatException extends LibCurlException
{
    protected $code = 3;
}
