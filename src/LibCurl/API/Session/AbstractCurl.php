<?php
/**
 * This file is part of the LibCurl package.
 *
 * (c) Jerry Anselmi <jerry.anselmi@gmail.com>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PhpTools\LibCurl\API\Session;

use RuntimeException;
use PhpTools\LibCurl\API\Exception\NotAvailableExtensionException;

/**
 * CuRL abstract class
 * @author Jerry Anselmi <jerry.anselmi@gmail.com>
 */
abstract class AbstractCurl
{
    private $session = null;

    /**
     * The construct and initialize a cURL session.
     *
     * @throw RuntimeException
     * @throw \PhpTools\LibCurl\API\Exception\NotAvailableExtensionException
     */
    public function __construct()
    {
        if (!is_subclass_of($this, 'PhpTools\LibCurl\API\Session\CurlInterface')) {
            throw new RuntimeException(sprintf(
                "Class %s must implement class %s",
                get_class($this),
                "PhpTools\LibCurl\API\Session\CurlInterface"
            ));
        }

        if (!extension_loaded('curl')) {
            throw new NotAvailableExtensionException();
        }

        $this->session = curl_init();
    }

    /**
     * The destructor and close a cURL session.
     */
    public function __destroy()
    {
        curl_close($this->session);
    }

    /**
     * Execute a libcurl session handle.
     * @param  [type]  $options [description]
     * @return
     */
    protected function exceute()
    {
        $this->setOptions();
        $response = curl_exec($this->session);
        $this->hasCurlError();

        var_dump($response, new CurlInfo($this->session));
    }

    /**
     * Reset all options of a libcurl session handle
     *
     * @return self
     */
    protected function reset()
    {
        curl_reset($this->session);
        return $this;
    }

    private function setOptions()
    {
        foreach ($this->getOptions() as $option => $value) {
            curl_setopt($this->session, $option, $value);
        }
        return $this;
    }

    private function hasCurlError()
    {
        $curlErrorCode = curl_errno($this->session);
        $curlErrorEssage = curl_error($this->session);
        if ($curlErrorCode != CURLE_OK) {
            $curlExceptionClass = $this->getCurlExceptionClass($curlErrorCode);
            throw new $curlExceptionClass($curlErrorEssage);
        }
    }

    private function getCurlExceptionClass($curlErrorCode)
    {
        return [
            1  => 'PhpTools\LibCurl\API\Exception\LibCurl\UnsupportedProtocolException',
            2  => 'PhpTools\LibCurl\API\Exception\LibCurl\FailedInitException',
            3  => 'PhpTools\LibCurl\API\Exception\LibCurl\UrlMalformatException',
            4  => 'PhpTools\LibCurl\API\Exception\LibCurl\UrlMalformatUserException',
            5  => 'PhpTools\LibCurl\API\Exception\LibCurl\CouldNotResolveProxyException',
            6  => 'PhpTools\LibCurl\API\Exception\LibCurl\CouldNotResolveHostException',
            7  => 'PhpTools\LibCurl\API\Exception\LibCurl\CouldNotConnectException',
            8  => 'PhpTools\LibCurl\API\Exception\LibCurl\Ftp\FtpWeirdServerReplyException',
            9  => 'PhpTools\LibCurl\API\Exception\LibCurl\RemoteAccessDeniedException',
            11 => 'PhpTools\LibCurl\API\Exception\LibCurl\Ftp\FtpWeirdPassReplyException',
            13 => 'PhpTools\LibCurl\API\Exception\LibCurl\Ftp\FtpWeirdPasvReplyException',
            14 => 'PhpTools\LibCurl\API\Exception\LibCurl\Ftp\FtpWeird227FormatException',
            15 => 'PhpTools\LibCurl\API\Exception\LibCurl\Ftp\FtpCanNotGetHostException',
            17 => 'PhpTools\LibCurl\API\Exception\LibCurl\Ftp\FtpCouldNotSetTypeException',
            18 => 'PhpTools\LibCurl\API\Exception\LibCurl\PartialFileException',
            19 => 'PhpTools\LibCurl\API\Exception\LibCurl\Ftp\FtpCouldNotRetrFileException',
            21 => 'PhpTools\LibCurl\API\Exception\LibCurl\QuoteErrorException',
            22 => 'PhpTools\LibCurl\API\Exception\LibCurl\HttpReturnedErrorException',
            23 => 'PhpTools\LibCurl\API\Exception\LibCurl\WriteErrorException',
            25 => 'PhpTools\LibCurl\API\Exception\LibCurl\UploadFailedException',
            26 => 'PhpTools\LibCurl\API\Exception\LibCurl\ReadErrorException',
            27 => 'PhpTools\LibCurl\API\Exception\LibCurl\OutOfMemoryException',
            28 => 'PhpTools\LibCurl\API\Exception\LibCurl\OperationTimedoutException',
            30 => 'PhpTools\LibCurl\API\Exception\LibCurl\Ftp\FtpPortFailedException',
            31 => 'PhpTools\LibCurl\API\Exception\LibCurl\Ftp\FtpCouldNotUseRestException',
            33 => 'PhpTools\LibCurl\API\Exception\LibCurl\RangeErrorException',
            34 => 'PhpTools\LibCurl\API\Exception\LibCurl\HttpPostErrorException',
            35 => 'PhpTools\LibCurl\API\Exception\LibCurl\Ssl\SslConnectErrorException',
            36 => 'PhpTools\LibCurl\API\Exception\LibCurl\BadDownloadResumeException',
            37 => 'PhpTools\LibCurl\API\Exception\LibCurl\FileCouldNotReadFileException',
            38 => 'PhpTools\LibCurl\API\Exception\LibCurl\Ldap\LdapCanNotBindException',
            39 => 'PhpTools\LibCurl\API\Exception\LibCurl\Ldap\LdapSearchFailedException',
            41 => 'PhpTools\LibCurl\API\Exception\LibCurl\FunctionNotFoundException',
            42 => 'PhpTools\LibCurl\API\Exception\LibCurl\AbortedByCallbackException',
            43 => 'PhpTools\LibCurl\API\Exception\LibCurl\BadFunctionArgumentException',
            45 => 'PhpTools\LibCurl\API\Exception\LibCurl\InterfaceFailedException',
            47 => 'PhpTools\LibCurl\API\Exception\LibCurl\TooManyRedirectsException',
            48 => 'PhpTools\LibCurl\API\Exception\LibCurl\UnknownTelnetOptionException',
            49 => 'PhpTools\LibCurl\API\Exception\LibCurl\TelnetOptionSyntaxException',
            51 => 'PhpTools\LibCurl\API\Exception\LibCurl\PeerFailedVerificationException',
            52 => 'PhpTools\LibCurl\API\Exception\LibCurl\GotNothingException',
            53 => 'PhpTools\LibCurl\API\Exception\LibCurl\Ssl\SslEngineNotfoundException',
            54 => 'PhpTools\LibCurl\API\Exception\LibCurl\Ssl\SslEngineSetfailedException',
            55 => 'PhpTools\LibCurl\API\Exception\LibCurl\SendErrorException',
            56 => 'PhpTools\LibCurl\API\Exception\LibCurl\RecvErrorException',
            58 => 'PhpTools\LibCurl\API\Exception\LibCurl\Ssl\SslCertproblemException',
            59 => 'PhpTools\LibCurl\API\Exception\LibCurl\Ssl\SslCipherException',
            60 => 'PhpTools\LibCurl\API\Exception\LibCurl\Ssl\SslCacertException',
            61 => 'PhpTools\LibCurl\API\Exception\LibCurl\BadContentEncodingException',
            62 => 'PhpTools\LibCurl\API\Exception\LibCurl\Ldap\LdapInvalidUrlException',
            63 => 'PhpTools\LibCurl\API\Exception\LibCurl\FilesizeExceededException',
            64 => 'PhpTools\LibCurl\API\Exception\LibCurl\UseSslFailedException',
            65 => 'PhpTools\LibCurl\API\Exception\LibCurl\SendFailRewindException',
            66 => 'PhpTools\LibCurl\API\Exception\LibCurl\Ssl\SslEngineInitfailedException',
            67 => 'PhpTools\LibCurl\API\Exception\LibCurl\LoginDeniedException',
            68 => 'PhpTools\LibCurl\API\Exception\LibCurl\Tftp\TftpNotfoundException',
            69 => 'PhpTools\LibCurl\API\Exception\LibCurl\Tftp\TftpPermException',
            70 => 'PhpTools\LibCurl\API\Exception\LibCurl\RemoteDiskFullException',
            71 => 'PhpTools\LibCurl\API\Exception\LibCurl\Tftp\TftpIllegalException',
            72 => 'PhpTools\LibCurl\API\Exception\LibCurl\Tftp\TftpUnknownidException',
            73 => 'PhpTools\LibCurl\API\Exception\LibCurl\RemoteFileExistsException',
            74 => 'PhpTools\LibCurl\API\Exception\LibCurl\Tftp\TftpNosuchuserException',
            75 => 'PhpTools\LibCurl\API\Exception\LibCurl\ConvFailedException',
            76 => 'PhpTools\LibCurl\API\Exception\LibCurl\ConvReqdException',
            77 => 'PhpTools\LibCurl\API\Exception\LibCurl\Ssl\SslCacertBadfileException',
            78 => 'PhpTools\LibCurl\API\Exception\LibCurl\RemoteFileNotFoundException',
            79 => 'PhpTools\LibCurl\API\Exception\LibCurl\SshException',
            80 => 'PhpTools\LibCurl\API\Exception\LibCurl\Ssl\SslShutdownFailedException',
            81 => 'PhpTools\LibCurl\API\Exception\LibCurl\AgainException',
            82 => 'PhpTools\LibCurl\API\Exception\LibCurl\Ssl\SslCrlBadfileException',
            83 => 'PhpTools\LibCurl\API\Exception\LibCurl\Ssl\SslIssuerErrorException',
            84 => 'PhpTools\LibCurl\API\Exception\LibCurl\Ftp\FtpPretFailedException',
            85 => 'PhpTools\LibCurl\API\Exception\LibCurl\RtspCseqErrorException',
            86 => 'PhpTools\LibCurl\API\Exception\LibCurl\RtspSessionErrorException',
            87 => 'PhpTools\LibCurl\API\Exception\LibCurl\Ftp\FtpBadFileListException',
            88 => 'PhpTools\LibCurl\API\Exception\LibCurl\ChunkFailedException',
        ][$curlErrorCode];
    }
}
