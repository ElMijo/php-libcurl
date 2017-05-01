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
 * CuRL option implementation for int value.
 */
class IntOption extends AbstractOption implements OptionInterface
{
    /**
     * {@inheritDoc}
     */
    public function getType()
    {
        return 'int';
    }

    /**
     * {@inheritDoc}
     */
    public function getOptionList()
    {
        return [
            'CURLOPT_BUFFERSIZE',
            'CURLOPT_CLOSEPOLICY',
            'CURLOPT_CONNECTTIMEOUT',
            'CURLOPT_CONNECTTIMEOUT_MS',
            'CURLOPT_DNS_CACHE_TIMEOUT',
            'CURLOPT_EXPECT_100_TIMEOUT_MS',
            'CURLOPT_FTPSSLAUTH',
            'CURLOPT_HEADEROPT',
            'CURLOPT_HTTP_VERSION',
            'CURLOPT_HTTPAUTH',
            'CURLOPT_INFILESIZE',
            'CURLOPT_LOW_SPEED_LIMIT',
            'CURLOPT_LOW_SPEED_TIME',
            'CURLOPT_MAXCONNECTS',
            'CURLOPT_MAXREDIRS',
            'CURLOPT_PORT',
            'CURLOPT_POSTREDIR',
            'CURLOPT_PROTOCOLS',
            'CURLOPT_PROXYAUTH',
            'CURLOPT_PROXYPORT',
            'CURLOPT_PROXYTYPE',
            'CURLOPT_REDIR_PROTOCOLS',
            'CURLOPT_RESUME_FROM',
            'CURLOPT_SSL_OPTIONS',
            'CURLOPT_SSL_VERIFYHOST',
            'CURLOPT_SSLVERSION',
            'CURLOPT_STREAM_WEIGHT',
            'CURLOPT_TIMECONDITION',
            'CURLOPT_TIMEOUT',
            'CURLOPT_TIMEOUT_MS',
            'CURLOPT_TIMEVALUE',
            'CURLOPT_MAX_RECV_SPEED_LARGE',
            'CURLOPT_MAX_SEND_SPEED_LARGE',
            'CURLOPT_SSH_AUTH_TYPES',
            'CURLOPT_IPRESOLVE',
            'CURLOPT_FTP_FILEMETHOD',
        ];
    }
}
