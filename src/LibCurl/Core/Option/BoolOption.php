<?php
/**
 * This file is part of the LibCurl package.
 *
 * (c) Jerry Anselmi <jerry.anselmi@gmail.com>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PhpTools\LibCurl\Core\Option;

use PhpTools\LibCurl\API\Option\AbstractOption;
use PhpTools\LibCurl\API\Option\OptionInterface;

/**
 * CuRL option implementation for bool value.
 */
class BoolOption extends AbstractOption implements OptionInterface
{
    /**
     * {@inheritDoc}
     */
    public function getType()
    {
        return 'bool';
    }

    /**
     * {@inheritDoc}
     */
    public function getOptionList()
    {
        return [
            'CURLOPT_AUTOREFERER',
            'CURLOPT_BINARYTRANSFER',
            'CURLOPT_COOKIESESSION',
            'CURLOPT_CERTINFO',
            'CURLOPT_CRLF',
            'CURLOPT_DNS_USE_GLOBAL_CACHE',
            'CURLOPT_FAILONERROR',
            'CURLOPT_FILETIME',
            'CURLOPT_FOLLOWLOCATION',
            'CURLOPT_FORBID_REUSE',
            'CURLOPT_FRESH_CONNECT',
            'CURLOPT_FTP_USE_EPRT',
            'CURLOPT_FTP_USE_EPSV',
            'CURLOPT_FTP_CREATE_MISSING_DIRS',
            'CURLOPT_FTPAPPEND',
            'CURLOPT_TCP_NODELAY',
            'CURLOPT_FTPLISTONLY',
            'CURLOPT_HEADER',
            'CURLOPT_HTTPGET',
            'CURLOPT_HTTPPROXYTUNNEL',
            'CURLOPT_NETRC',
            'CURLOPT_NOBODY',
            'CURLOPT_NOPROGRESS',
            'CURLOPT_NOSIGNAL',
            'CURLOPT_POST',
            'CURLOPT_PUT',
            'CURLOPT_RETURNTRANSFER',
            'CURLOPT_SSL_VERIFYPEER',
            'CURLOPT_TRANSFERTEXT',
            'CURLOPT_UNRESTRICTED_AUTH',
            'CURLOPT_UPLOAD',
            'CURLOPT_VERBOSE',
            'CURLOPT_CONNECT_ONLY',
            'CURLOPT_SSL_FALSESTART',
            'CURLOPT_FTPASCII',
            'CURLOPT_MUTE',
            'CURLOPT_PATH_AS_IS',
            'CURLOPT_PIPEWAIT',
            'CURLOPT_SAFE_UPLOAD',
            'CURLOPT_SASL_IR',
            'CURLOPT_SSL_ENABLE_ALPN',
            'CURLOPT_SSL_ENABLE_NPN',
            'CURLOPT_SSL_VERIFYSTATUS',
            'CURLOPT_TCP_FASTOPEN',
            'CURLOPT_TFTP_NO_OPTIONS',
        ];
    }
}
