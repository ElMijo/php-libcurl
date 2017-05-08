<?php
/**
 * This file is part of the LibCurl package.
 *
 * (c) Jerry Anselmi <jerry.anselmi@gmail.com>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PhpTools\LibCurl\API\Session;

/**
 * CuRL abstract class
 * @author Jerry Anselmi <jerry.anselmi@gmail.com>
 */
class CurlInfo
{
    /**
     * Last effective URL
     * @var string
     */
    public $url = null;

    /**
     * Content-Type: of the requested document. NULL indicates server
     * did not send valid Content-Type: header.
     * @var string
     */
    public $contentType = null;

    /**
     * Last received HTTP code.
     * @var int
     */
    public $httpCode = null;

    /**
     * Total size of all headers received.
     * @var int
     */
    public $headerSize = null;

    /**
     * Total size of issued requests, currently only for HTTP requests.
     * @var int
     */
    public $requestSize = null;

    /**
     * Remote time of the retrieved document, with the CURLOPT_FILETIME enabled;
     * if -1 is returned the time of the document is unknown.
     * @var int
     */
    public $filetime = null;

    /**
     * Result of SSL certification verification requested by
     * setting CURLOPT_SSL_VERIFYPEER.
     * @var int
     */
    public $sslVerifyResult = null;

    /**
     * Number of redirects, with the CURLOPT_FOLLOWLOCATION option enabled.
     * @var int
     */
    public $redirectCount = null;

    /**
     * Total transaction time in seconds for last transfer.
     * @var float
     */
    public $totalTime = null;

    /**
     * Time in seconds until name resolving was complete.
     * @var float
     */
    public $namelookupTime = null;

    /**
     * Time in seconds it took to establish the connection.
     * @var float
     */
    public $connectTime = null;

    /**
     * Time in seconds from start until just before file transfer begins.
     * @var float
     */
    public $pretransferTime = null;

    /**
     * Total number of bytes uploaded.
     * @var float
     */
    public $sizeUpload = null;

    /**
     * Total number of bytes downloaded.
     * @var float
     */
    public $sizeDownload = null;

    /**
     * Average download speed.
     * @var float
     */
    public $speedDownload = null;

    /**
     * Average upload speed.
     * @var float
     */
    public $speedUpload = null;

    /**
     * Content length of download, read from Content-Length: field.
     * @var float
     */
    public $downloadContentLength = null;

    /**
     * Specified size of upload.
     * @var float
     */
    public $uploadContentLength = null;

    /**
     * Time in seconds until the first byte is about to be transferred.
     * @var float
     */
    public $starttransferTime = null;

    /**
     * Time in seconds of all redirection steps before final transaction
     * was started, with the CURLOPT_FOLLOWLOCATION option enabled.
     * @var float
     */
    public $redirectTime = null;

    /**
     * TLS certificate chain.
     * @var array
     */
    public $certinfo = null;

    /**
     * IP address of the most recent connection.
     * @var string
     */
    public $primaryIp = null;

    /**
     * Destination port of the most recent connection.
     * @var int
     */
    public $primaryPort = null;

    /**
     * Local (source) IP address of the most recent connection.
     * @var string
     */
    public $localIp = null;

    /**
     * Local (source) port of the most recent connection.
     * @var int
     */
    public $localPort = null;

    /**
     * With the CURLOPT_FOLLOWLOCATION option disabled: redirect URL found in
     * the last transaction, that should be requested manually next.
     *
     * With the CURLOPT_FOLLOWLOCATION option enabled: this is empty.
     *
     * The redirect URL in this case is available in CURLINFO_EFFECTIVE_URL.
     * @var string
     */
    public $redirectUrl = null;
    /**
     * The request string sent. For this to work, add the CURLINFO_HEADER_OUT
     * option to the handle by calling curl_setopt().
     * @var string
     */
    public $requestHeader = null;

    /**
     * Private data associated with this cURL handle, previously set with
     * the CURLOPT_PRIVATE option of curl_setopt().
     * @var bool
     */
    public $private = null;

    /**
     * The last response code.
     * @var int
     */
    public $responseCode = null;

    /**
     * The CONNECT response code
     * @var int
     */
    public $httpConnectcode = null;

    /**
     * Bitmask indicating the authentication method(s) available according
     * to the previous response.
     * @var int
     */
    public $httpauthAvail = null;

    /**
     * Bitmask indicating the proxy authentication method(s) available
     * according to the previous response.
     * @var int
     */
    public $proxyauthAvail = null;

    /**
     * Errno from a connect failure. The number is OS and system specific.
     * @var int
     */
    public $osErrno = null;

    /**
     * Number of connections curl had to create to achieve the previous transfer.
     * @var int
     */
    public $numConnects = null;

    /**
     * OpenSSL crypto-engines supported.
     * @var array
     */
    public $sslEngines = null;

    /**
     * All known cookies.
     * @var array
     */
    public $cookielist = null;

    /**
     * Entry path in FTP server.
     * @var bool
     */
    public $ftpEntryPath = null;

    /**
     * Time in seconds it took from the start until the SSL/SSH
     * connect/handshake to the remote host was completed.
     * @var float
     */
    public $appconnectTime = null;

    /**
     * Info on unmet time conditional.
     * @var int
     */
    public $conditionUnmet = null;

    /**
     * Next RTSP client CSeq.
     * @var int
     */
    public $rtspClientCseq = null;

    /**
     * Recently received CSeq.
     * @var int
     */
    public $rtspCseqRecv = null;

    /**
     * Next RTSP server CSeq.
     * @var int
     */
    public $rtspServerCseq = null;

    /**
     * RTSP session ID.
     * @var bool
     */
    public $rtspSessionId = null;

    public function __construct($session)
    {
        foreach ($this->getCurlInfoOptions() as $option => $attribute) {
            if (defined($option)) {
                $this->{$attribute} = curl_getinfo($session, constant($option));
            }
        }
    }

    /**
     * Get the cURL Info Option List
     * @return array
     */
    private function getCurlInfoOptions()
    {
        return [
            'CURLINFO_EFFECTIVE_URL' => 'url',
            'CURLINFO_CONTENT_TYPE' => 'contentType',
            'CURLINFO_HTTP_CODE' => 'httpCode',
            'CURLINFO_HEADER_SIZE' => 'headerSize',
            'CURLINFO_REQUEST_SIZE' => 'requestSize',
            'CURLINFO_FILETIME' => 'filetime',
            'CURLINFO_SSL_VERIFYRESULT' => 'sslVerifyResult',
            'CURLINFO_REDIRECT_COUNT' => 'redirectCount',
            'CURLINFO_TOTAL_TIME' => 'totalTime',
            'CURLINFO_NAMELOOKUP_TIME' => 'namelookupTime',
            'CURLINFO_CONNECT_TIME' => 'connectTime',
            'CURLINFO_PRETRANSFER_TIME' => 'pretransferTime',
            'CURLINFO_SIZE_UPLOAD' => 'sizeUpload',
            'CURLINFO_SIZE_DOWNLOAD' => 'sizeDownload',
            'CURLINFO_SPEED_DOWNLOAD' => 'speedDownload',
            'CURLINFO_SPEED_UPLOAD' => 'speedUpload',
            'CURLINFO_CONTENT_LENGTH_DOWNLOAD' => 'downloadContentLength',
            'CURLINFO_CONTENT_LENGTH_UPLOAD' => 'uploadContentLength',
            'CURLINFO_STARTTRANSFER_TIME' => 'starttransferTime',
            'CURLINFO_REDIRECT_TIME' => 'redirectTime',
            'CURLINFO_CERTINFO' => 'certinfo',
            'CURLINFO_PRIMARY_IP' => 'primaryIp',
            'CURLINFO_PRIMARY_PORT' => 'primaryPort',
            'CURLINFO_LOCAL_IP' => 'localIp',
            'CURLINFO_LOCAL_PORT' => 'localPort',
            'CURLINFO_REDIRECT_URL' => 'redirectUrl',
            'CURLINFO_HEADER_OUT' => 'requestHeader',
            'CURLINFO_PRIVATE' => 'private',
            'CURLINFO_RESPONSE_CODE' => 'responseCode',
            'CURLINFO_HTTP_CONNECTCODE' => 'httpConnectcode',
            'CURLINFO_HTTPAUTH_AVAIL' => 'httpauthAvail',
            'CURLINFO_PROXYAUTH_AVAIL' => 'proxyauthAvail',
            'CURLINFO_OS_ERRNO' => 'osErrno',
            'CURLINFO_NUM_CONNECTS' => 'numConnects',
            'CURLINFO_SSL_ENGINES' => 'sslEngines',
            'CURLINFO_COOKIELIST' => 'cookielist',
            'CURLINFO_FTP_ENTRY_PATH' => 'ftpEntryPath',
            'CURLINFO_APPCONNECT_TIME' => 'appconnectTime',
            'CURLINFO_CONDITION_UNMET' => 'conditionUnmet',
            'CURLINFO_RTSP_CLIENT_CSEQ' => 'rtspClientCseq',
            'CURLINFO_RTSP_CSEQ_RECV' => 'rtspCseqRecv',
            'CURLINFO_RTSP_SERVER_CSEQ' => 'rtspServerCseq',
            'CURLINFO_RTSP_SESSION_ID' => 'rtspSessionId',
        ];
    }
}
