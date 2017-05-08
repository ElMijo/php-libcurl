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
 * This exception thrown when A file transfer was shorter or larger than
 * expected. This happens when the server first reports an expected transfer
 * size, and then delivers data that doesn't match the previously given size.
 *
 * @author Jerry Anselmi <jerry.anselmi@gmail.com>
 */
class PartialFileException extends LibCurlException
{
    protected $code = 18;
}
