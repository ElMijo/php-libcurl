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
 *  CuRL option implementation for string value.
 */
class StringOption extends AbstractOption implements OptionInterface
{
    /**
     * {@inheritDoc}
     */
    public function getType()
    {
        return 'string';
    }

    /**
     * {@inheritDoc}
     */
    public function getOptions()
    {
        return [
            CURLOPT_CAINFO,
            CURLOPT_CAPATH,
            CURLOPT_COOKIE,
            CURLOPT_COOKIEFILE,
            CURLOPT_COOKIEJAR,
            CURLOPT_CUSTOMREQUEST,
            CURLOPT_DEFAULT_PROTOCOL,
            CURLOPT_DNS_INTERFACE,
            CURLOPT_DNS_LOCAL_IP4,
            CURLOPT_DNS_LOCAL_IP6,
            CURLOPT_EGDSOCKET,
            CURLOPT_ENCODING,
            CURLOPT_FTPPORT,
            CURLOPT_INTERFACE,
            CURLOPT_KEYPASSWD,
            CURLOPT_KRB4LEVEL,
            CURLOPT_LOGIN_OPTIONS,
            CURLOPT_PINNEDPUBLICKEY,
            CURLOPT_POSTFIELDS,
            CURLOPT_PRIVATE,
            CURLOPT_PROXY,
            CURLOPT_PROXY_SERVICE_NAME,
            CURLOPT_PROXYUSERPWD,
            CURLOPT_RANDOM_FILE,
            CURLOPT_RANGE,
            CURLOPT_REFERER,
            CURLOPT_SERVICE_NAME,
            CURLOPT_SSH_HOST_PUBLIC_KEY_MD5,
            CURLOPT_SSH_PUBLIC_KEYFILE,
            CURLOPT_SSH_PRIVATE_KEYFILE,
            CURLOPT_SSL_CIPHER_LIST,
            CURLOPT_SSLCERT,
            CURLOPT_SSLCERTPASSWD,
            CURLOPT_SSLCERTTYPE,
            CURLOPT_SSLENGINE,
            CURLOPT_SSLENGINE_DEFAULT,
            CURLOPT_SSLKEY,
            CURLOPT_SSLKEYPASSWD,
            CURLOPT_SSLKEYTYPE,
            CURLOPT_UNIX_SOCKET_PATH,
            CURLOPT_URL,
            CURLOPT_USERAGENT,
            CURLOPT_USERNAME,
            CURLOPT_USERPWD,
            CURLOPT_XOAUTH2_BEARER,
        ];
    }
}
