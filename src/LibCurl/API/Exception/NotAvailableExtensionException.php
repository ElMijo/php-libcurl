<?php
/**
 * This file is part of the LibCurl package.
 *
 * (c) Jerry Anselmi <jerry.anselmi@gmail.com>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PhpTools\LibCurl\API\Exception;

use RuntimeException;

/**
 * This exception thrown when there is a problem with a data file.
 *
 * @author Jerry Anselmi <jerry.anselmi@gmail.com>
 */
class NotAvailableExtensionException extends RuntimeException
{
    protected $message = 'The PHP cURL extension is not available';
}
