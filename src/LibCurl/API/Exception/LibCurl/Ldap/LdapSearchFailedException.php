<?php
/**
 * This file is part of the LibCurl package.
 *
 * (c) Jerry Anselmi <jerry.anselmi@gmail.com>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PhpTools\LibCurl\API\Exception\LibCurl\Ldap;

use PhpTools\LibCurl\API\Exception\LibCurl\LibCurlException;

/**
 * This exception thrown when LDAP search failed.
 *
 * @author Jerry Anselmi <jerry.anselmi@gmail.com>
 */
class LdapSearchFailedException extends LibCurlException
{
    protected $code = 39;
}
