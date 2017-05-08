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
 * This exception thrown when A file given with FILE:// couldn't be opened.
 * Most likely because the file path doesn't identify an existing file.
 * Did you check file permissions?
 *
 * @author Jerry Anselmi <jerry.anselmi@gmail.com>
 */
class FileCouldNotReadFileException extends LibCurlException
{
    protected $code = 37;
}
