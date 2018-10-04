<?php


namespace HttpStatusCodes;

/**
 * Class HttpStatusCodes
 * @package HttpStatusCodes
 * @see https://en.wikipedia.org/wiki/List_of_HTTP_status_codes
 * @see https://github.com/waldemarnt/http-status-codes
 */
class HttpStatusCodes
{
    // 1xx Informational responses
    const HTTP_CONTINUE_CODE = 100;
    const HTTP_CONTINUE_MESSAGE = 'Continue';
    const HTTP_CONTINUE_DESCRIPTION = 'Client should continue with request.';

    const HTTP_SWITCHING_PROTOCOLS_CODE = 101;
    const HTTP_SWITCHING_PROTOCOLS_MESSAGE = 'Switching Protocols';
    const HTTP_SWITCHING_PROTOCOLS_DESCRIPTION = 'Server is switching protocols.';

    const HTTP_PROCESSING_CODE = 102;
    const HTTP_PROCESSING_MESSAGE = 'Processing';
    const HTTP_PROCESSING_DESCRIPTION = 'Server has received and is processing the request.';

    const HTTP_PROCESSING_CHECKPOINT_CODE = 103;
    const HTTP_PROCESSING_CHECKPOINT_MESSAGE = 'Early Hints';
    const HTTP_PROCESSING_CHECKPOINT_DESCRIPTION = 'Used to return some response headers before final HTTP message';

    // 2xx Success
    const HTTP_OK_CODE = 200;
    const HTTP_OK_MESSAGE = 'OK';
    const HTTP_OK_DESCRIPTION = 'The request was fulfilled.';

    const HTTP_CREATED_CODE = 201;
    const HTTP_CREATED_MESSAGE = 'Created';
    const HTTP_CREATED_DESCRIPTION = 'The request has been fulfilled, resulting in the creation of a new resource.';

    const HTTP_ACCEPTED_CODE = 202;
    const HTTP_ACCEPTED_MESSAGE = 'Accepted';
    const HTTP_ACCEPTED_DESCRIPTION = 'The request has been accepted for processing, but the processing has not been completed. The request might or might not be eventually acted upon, and may be disallowed when processing occurs.';

    const HTTP_NON_AUTHORITATIVE_INFORMATION_CODE = 203;
    const HTTP_NON_AUTHORITATIVE_INFORMATION_MESSAGE = 'Non-Authoritative Information';
    const HTTP_NON_AUTHORITATIVE_INFORMATION_DESCRIPTION = 'Non-Authoritative Information (since HTTP/1.1)';

    const HTTP_NO_CONTENT_CODE = 204;
    const HTTP_NO_CONTENT_MESSAGE = 'No Content';
    const HTTP_NO_CONTENT_DESCRIPTION = 'The server successfully processed the request and is not returning any content;';

    const HTTP_RESET_CONTENT_CODE = 205;
    const HTTP_RESET_CONTENT_MESSAGE = 'Reset Content';
    const HTTP_RESET_CONTENT_DESCRIPTION = 'The server successfully processed the request, but is not returning any content. Unlike a 204 response, this response requires that the requester reset the document view.';

    const HTTP_PARTIAL_CONTENT_CODE = 206;
    const HTTP_PARTIAL_CONTENT_MESSAGE = 'Partial Content';
    const HTTP_PARTIAL_CONTENT_DESCRIPTION = 'The server is delivering only part of the resource (byte serving) due to a range header sent by the client. The range header is used by HTTP clients to enable resuming of interrupted downloads, or split a download into multiple simultaneous streams';

    const HTTP_MULTI_STATUS_CODE = 207;
    const HTTP_MULTI_STATUS_MESSAGE = 'Multi-Status';
    const HTTP_MULTI_STATUS_DESCRIPTION = 'The message body that follows is by default an XML message and can contain a number of separate response codes, depending on how many sub-requests were made.';

    const HTTP_ALREADY_REPORTED_CODE = 208;
    const HTTP_ALREADY_REPORTED_MESSAGE = 'Already Reported';
    const HTTP_ALREADY_REPORTED_DESCRIPTION = 'The message body that follows is by default an XML message and can contain a number of separate response codes, depending on how many sub-requests were made.';

    const HTTP_IM_USED_CODE = 226;
    const HTTP_IM_USED_MESSAGE = 'IM Used';
    const HTTP_IM_USED_DESCRIPTION = 'The server has fulfilled a request for the resource, and the response is a representation of the result of one or more instance-manipulations applied to the current instance.';

    // 3xx Redirection
    const HTTP_MULTIPLE_CHOICES_CODE = 300;
    const HTTP_MULTIPLE_CHOICES_MESSAGE = 'Multiple Choices';
    const HTTP_MULTIPLE_CHOICES_DESCRIPTION = 'Indicates multiple options for the resource from which the client may choose (via agent-driven content negotiation). For example, this code could be used to present multiple video format options, to list files with different filename extensions, or to suggest word-sense disambiguation.';

    const HTTP_MOVED_PERMANENTLY_CODE = 301;
    const HTTP_MOVED_PERMANENTLY_MESSAGE = 'Moved Permanently';
    const HTTP_MOVED_PERMANENTLY_DESCRIPTION = 'This and all future requests should be directed to the given URI.';

    const HTTP_FOUND_CODE = 302;
    const HTTP_FOUND_MESSAGE = 'Found';
    const HTTP_FOUND_DESCRIPTION = 'Tells the client to look at (browse to) another url. 302 has been superseded by 303 and 307. This is an example of industry practice contradicting the standard. The HTTP/1.0 specification (RFC 1945) required the client to perform a temporary redirect (the original describing phrase was "Moved Temporarily"), but popular browsers implemented 302 with the functionality of a 303 See Other. Therefore, HTTP/1.1 added status codes 303 and 307 to distinguish between the two behaviours. However, some Web applications and frameworks use the 302 status code as if it were the 303.';

    const HTTP_SEE_OTHER_CODE = 303;
    const HTTP_SEE_OTHER_MESSAGE = 'See Other';
    const HTTP_SEE_OTHER_DESCRIPTION = 'The response to the request can be found under another URI using the GET method. When received in response to a POST (or PUT/DELETE), the client should presume that the server has received the data and should issue a new GET request to the given URI.';

    const HTTP_NOT_MODIFIED_CODE = 304;
    const HTTP_NOT_MODIFIED_MESSAGE = 'Not Modified';
    const HTTP_NOT_MODIFIED_DESCRIPTION = 'Indicates that the resource has not been modified since the version specified by the request headers If-Modified-Since or If-None-Match. In such case, there is no need to retransmit the resource since the client still has a previously-downloaded copy.';

    const HTTP_USE_PROXY_CODE = 305;
    const HTTP_USE_PROXY_MESSAGE = 'Use Proxy';
    const HTTP_USE_PROXY_DESCRIPTION = 'The requested resource is available only through a proxy, the address for which is provided in the response. Many HTTP clients (such as Mozilla and Internet Explorer) do not correctly handle responses with this status code, primarily for security reasons.';

    const HTTP_UNUSED_CODE = 306;
    const HTTP_UNUSED_MESSAGE = 'Switch Proxy';
    const HTTP_UNUSED_DESCRIPTION = 'No longer used. Originally meant "Subsequent requests should use the specified proxy.';

    const HTTP_TEMPORARY_REDIRECT_CODE = 307;
    const HTTP_TEMPORARY_REDIRECT_MESSAGE = 'Temporary Redirect';
    const HTTP_TEMPORARY_REDIRECT_DESCRIPTION = 'In this case, the request should be repeated with another URI; however, future requests should still use the original URI. In contrast to how 302 was historically implemented, the request method is not allowed to be changed when reissuing the original request. For example, a POST request should be repeated using another POST request.';

    const HTTP_PERMANENT_REDIRECT_CODE = 308;
    const HTTP_PERMANENT_REDIRECT_MESSAGE = 'Permanent Redirect';
    const HTTP_PERMANENT_REDIRECT_DESCRIPTION = 'The request and all future requests should be repeated using another URI. 307 and 308 parallel the behaviors of 302 and 301, but do not allow the HTTP method to change. So, for example, submitting a form to a permanently redirected resource may continue smoothly.';

    // 4xx Client errors
    const HTTP_BAD_REQUEST_CODE = 400;
    const HTTP_BAD_REQUEST_MESSAGE = 'Bad Request';
    const HTTP_BAD_REQUEST_DESCRIPTION = 'The server cannot or will not process the request due to an apparent client error (e.g., malformed request syntax, size too large, invalid request message framing, or deceptive request routing).';

    const HTTP_UNAUTHORIZED_CODE = 401;
    const HTTP_UNAUTHORIZED_MESSAGE = 'Unauthorized';
    const HTTP_UNAUTHORIZED_DESCRIPTION = 'Similar to 403 Forbidden, but specifically for use when authentication is required and has failed or has not yet been provided. The response must include a WWW-Authenticate header field containing a challenge applicable to the requested resource.';

    const HTTP_PAYMENT_REQUIRED_CODE = 402;
    const HTTP_PAYMENT_REQUIRED_MESSAGE = 'Payment Required';
    const HTTP_PAYMENT_REQUIRED_DESCRIPTION = 'Reserved for future use. The original intention was that this code might be used as part of some form of digital cash or micropayment scheme.';

    const HTTP_FORBIDDEN_CODE = 403;
    const HTTP_FORBIDDEN_MESSAGE = 'Forbidden';
    const HTTP_FORBIDDEN_DESCRIPTION = 'The request was valid, but the server is refusing action. The user might not have the necessary permissions for a resource, or may need an account of some sort.';

    const HTTP_NOT_FOUND_CODE = 404;
    const HTTP_NOT_FOUND_MESSAGE = 'Not Found';
    const HTTP_NOT_FOUND_DESCRIPTION = 'The requested resource could not be found but may be available in the future. Subsequent requests by the client are permissible.';

    const HTTP_METHOD_NOT_ALLOWED_CODE = 405;
    const HTTP_METHOD_NOT_ALLOWED_MESSAGE = 'Method Not Allowed';
    const HTTP_METHOD_NOT_ALLOWED_DESCRIPTION = 'A request method is not supported for the requested resource; for example, a GET request on a form that requires data to be presented via POST, or a PUT request on a read-only resource.';

    const HTTP_NOT_ACCEPTABLE_CODE = 406;
    const HTTP_NOT_ACCEPTABLE_MESSAGE = 'Not Acceptable';
    const HTTP_NOT_ACCEPTABLE_DESCRIPTION = 'The requested resource is capable of generating only content not acceptable according to the Accept headers sent in the request';

    const HTTP_PROXY_AUTHENTICATION_REQUIRED_CODE = 407;
    const HTTP_PROXY_AUTHENTICATION_REQUIRED_MESSAGE = 'Proxy Authentication Required';
    const HTTP_PROXY_AUTHENTICATION_REQUIRED_DESCRIPTION = 'The client must first authenticate itself with the proxy.';

    const HTTP_REQUEST_TIMEOUT_CODE = 408;
    const HTTP_REQUEST_TIMEOUT_MESSAGE = 'Request Timeout';
    const HTTP_REQUEST_TIMEOUT_DESCRIPTION = 'The server timed out waiting for the request. According to HTTP specifications: "The client did not produce a request within the time that the server was prepared to wait. The client MAY repeat the request without modifications at any later time.';

    const HTTP_CONFLICT_CODE = 409;
    const HTTP_CONFLICT_MESSAGE = 'Conflict';
    const HTTP_CONFLICT_DESCRIPTION = 'Indicates that the request could not be processed because of conflict in the current state of the resource, such as an edit conflict between multiple simultaneous updates.';

    const HTTP_GONE_CODE = 410;
    const HTTP_GONE_MESSAGE = 'Gone';
    const HTTP_GONE_DESCRIPTION = 'Indicates that the resource requested is no longer available and will not be available again. This should be used when a resource has been intentionally removed and the resource should be purged. Upon receiving a 410 status code, the client should not request the resource in the future. Clients such as search engines should remove the resource from their indices. Most use cases do not require clients and search engines to purge the resource, and a "404 Not Found" may be used instead.';

    const HTTP_LENGTH_REQUIRED_CODE = 411;
    const HTTP_LENGTH_REQUIRED_MESSAGE = 'Length Required';
    const HTTP_LENGTH_REQUIRED_DESCRIPTION = 'The request did not specify the length of its content, which is required by the requested resource';

    const HTTP_PRECONDITION_FAILED_CODE = 412;
    const HTTP_PRECONDITION_FAILED_MESSAGE = 'Precondition Failed';
    const HTTP_PRECONDITION_FAILED_DESCRIPTION = 'The server does not meet one of the preconditions that the requester put on the request.';

    const HTTP_REQUEST_ENTITY_TOO_LARGE_CODE = 413;
    const HTTP_REQUEST_ENTITY_TOO_LARGE_MESSAGE = 'Payload Too Large';
    const HTTP_REQUEST_ENTITY_TOO_LARGE_DESCRIPTION = 'The request is larger than the server is willing or able to process. Previously called "Request Entity Too Large".';

    const HTTP_REQUEST_URI_TOO_LONG_CODE = 414;
    const HTTP_REQUEST_URI_TOO_LONG_MESSAGE = 'URI Too Long';
    const HTTP_REQUEST_URI_TOO_LONG_DESCRIPTION = 'The URI provided was too long for the server to process. Often the result of too much data being encoded as a query-string of a GET request, in which case it should be converted to a POST request. Called "Request-URI Too Long" previously.';

    const HTTP_UNSUPPORTED_MEDIA_TYPE_CODE = 415;
    const HTTP_UNSUPPORTED_MEDIA_TYPE_MESSAGE = 'Unsupported Media Type';
    const HTTP_UNSUPPORTED_MEDIA_TYPE_DESCRIPTION = 'The request entity has a media type which the server or resource does not support. For example, the client uploads an image as image/svg+xml, but the server requires that images use a different format.';

    const HTTP_REQUESTED_RANGE_NOT_SATISFIABLE_CODE = 416;
    const HTTP_REQUESTED_RANGE_NOT_SATISFIABLE_MESSAGE = 'Range Not Satisfiable';
    const HTTP_REQUESTED_RANGE_NOT_SATISFIABLE_DESCRIPTION = 'The client has asked for a portion of the file (byte serving), but the server cannot supply that portion. For example, if the client asked for a part of the file that lies beyond the end of the file. Called "Requested Range Not Satisfiable" previously".';

    const HTTP_EXPECTATION_FAILED_CODE = 417;
    const HTTP_EXPECTATION_FAILED_MESSAGE = 'Expectation Failed';
    const HTTP_EXPECTATION_FAILED_DESCRIPTION = 'The server cannot meet the requirements of the Expect request-header field.';

    const HTTP_IM_A_TEAPOT_CODE = 418;
    const HTTP_IM_A_TEAPOT_MESSAGE = 'I\'m a teapot';
    const HTTP_IM_A_TEAPOT_DESCRIPTION = 'This code was defined in 1998 as one of the traditional IETF April Fools\' jokes, in RFC 2324, Hyper Text Coffee Pot Control Protocol, and is not expected to be implemented by actual HTTP servers';

    const HTTP_MISDIRECTED_REQUEST_CODE = 421;
    const HTTP_MISDIRECTED_REQUEST_MESSAGE = 'Misdirected Request';
    const HTTP_MISDIRECTED_REQUEST_DESCRIPTION = 'The request was directed at a server that is not able to produce a response (for example because of connection reuse).';

    const HTTP_UNPROCESSABLE_ENTITY_CODE = 422;
    const HTTP_UNPROCESSABLE_ENTITY_MESSAGE = 'Unprocessable Entity';
    const HTTP_UNPROCESSABLE_ENTITY_DESCRIPTION = 'The request was well-formed but was unable to be followed due to semantic errors.';

    const HTTP_LOCKED_CODE = 423;
    const HTTP_LOCKED_MESSAGE = 'Locked';
    const HTTP_LOCKED_DESCRIPTION = 'The resource that is being accessed is locked.';

    const HTTP_FAILED_DEPENDENCY_CODE = 424;
    const HTTP_FAILED_DEPENDENCY_MESSAGE = 'Failed Dependency';
    const HTTP_FAILED_DEPENDENCY_DESCRIPTION = '';

    const HTTP_UPGRADE_REQUIRED_CODE = 426;
    const HTTP_UPGRADE_REQUIRED_MESSAGE = 'Upgrade Required';
    const HTTP_UPGRADE_REQUIRED_DESCRIPTION = 'The client should switch to a different protocol such as TLS/1.0, given in the Upgrade header field.';

    const HTTP_PRECONDITION_REQUIRED_CODE = 428;
    const HTTP_PRECONDITION_REQUIRED_MESSAGE = 'Precondition Required';
    const HTTP_PRECONDITION_REQUIRED_DESCRIPTION = 'The origin server requires the request to be conditional. Intended to prevent the \'lost update\' problem, where a client GETs a resource\'s state, modifies it, and PUTs it back to the server, when meanwhile a third party has modified the state on the server, leading to a conflict.';

    const HTTP_TOO_MANY_REQUESTS_CODE = 429;
    const HTTP_TOO_MANY_REQUESTS_MESSAGE = 'Too Many Requests';
    const HTTP_TOO_MANY_REQUESTS_DESCRIPTION = 'The user has sent too many requests in a given amount of time. Intended for use with rate-limiting schemes.';

    const HTTP_REQUEST_HEADER_FIELDS_TOO_LARGE_CODE = 431;
    const HTTP_REQUEST_HEADER_FIELDS_TOO_LARGE_MESSAGE = 'Request Header Fields Too Large';
    const HTTP_REQUEST_HEADER_FIELDS_TOO_LARGE_DESCRIPTION = 'The server is unwilling to process the request because either an individual header field, or all the header fields collectively, are too large.';

    const HTTP_UNAVAILABLE_FOR_LEGAL_REASONS_CODE = 451;
    const HTTP_UNAVAILABLE_FOR_LEGAL_REASONS_MESSAGE = 'Unavailable For Legal Reasons';
    const HTTP_UNAVAILABLE_FOR_LEGAL_REASONS_DESCRIPTION = 'A server operator has received a legal demand to deny access to a resource or to a set of resources that includes the requested resource. The code 451 was chosen as a reference to the novel Fahrenheit 451 (see the Acknowledgements in the RFC).';

    // 5xx Server errors
    const HTTP_INTERNAL_SERVER_ERROR_CODE = 500;
    const HTTP_INTERNAL_SERVER_ERROR_MESSAGE = 'Internal Server Error';
    const HTTP_INTERNAL_SERVER_ERROR_DESCRIPTION = 'A generic error message, given when an unexpected condition was encountered and no more specific message is suitable.';

    const HTTP_NOT_IMPLEMENTED_CODE = 501;
    const HTTP_NOT_IMPLEMENTED_MESSAGE = 'Not Implemented';
    const HTTP_NOT_IMPLEMENTED_DESCRIPTION = 'The server either does not recognize the request method, or it lacks the ability to fulfil the request. Usually this implies future availability (e.g., a new feature of a web-service API)';

    const HTTP_BAD_GATEWAY_CODE = 502;
    const HTTP_BAD_GATEWAY_MESSAGE = 'Bad Gateway';
    const HTTP_BAD_GATEWAY_DESCRIPTION = 'The server was acting as a gateway or proxy and received an invalid response from the upstream server.';

    const HTTP_SERVICE_UNAVAILABLE_CODE = 503;
    const HTTP_SERVICE_UNAVAILABLE_MESSAGE = 'Service Unavailable';
    const HTTP_SERVICE_UNAVAILABLE_DESCRIPTION = 'The server is currently unavailable (because it is overloaded or down for maintenance). Generally, this is a temporary state.';

    const HTTP_GATEWAY_TIMEOUT_CODE = 504;
    const HTTP_GATEWAY_TIMEOUT_MESSAGE = 'Gateway Timeout';
    const HTTP_GATEWAY_TIMEOUT_DESCRIPTION = 'The server was acting as a gateway or proxy and did not receive a timely response from the upstream server.';

    const HTTP_VERSION_NOT_SUPPORTED_CODE = 505;
    const HTTP_VERSION_NOT_SUPPORTED_MESSAGE = 'HTTP Version Not Supported';
    const HTTP_VERSION_NOT_SUPPORTED_DESCRIPTION = 'The server does not support the HTTP protocol version used in the request.';

    const HTTP_VARIANT_ALSO_NEGOTIATES_CODE = 506;
    const HTTP_VARIANT_ALSO_NEGOTIATES_MESSAGE = 'Variant Also Negotiates';
    const HTTP_VARIANT_ALSO_NEGOTIATES_DESCRIPTION = 'Transparent content negotiation for the request results in a circular reference.';

    const HTTP_INSUFFICIENT_STORAGE_CODE = 507;
    const HTTP_INSUFFICIENT_STORAGE_MESSAGE = 'Insufficient Storage';
    const HTTP_INSUFFICIENT_STORAGE_DESCRIPTION = 'The server is unable to store the representation needed to complete the request.';

    const HTTP_LOOP_DETECTED_CODE = 508;
    const HTTP_LOOP_DETECTED_MESSAGE = 'Loop Detected';
    const HTTP_LOOP_DETECTED_DESCRIPTION = 'The server detected an infinite loop while processing the request (sent in lieu of 208 Already Reported).';

    const HTTP_NOT_EXTENDED_CODE = 510;
    const HTTP_NOT_EXTENDED_MESSAGE = 'Not Extended';
    const HTTP_NOT_EXTENDED_DESCRIPTION = 'Further extensions to the request are required for the server to fulfil it.';

    const HTTP_NETWORK_AUTHENTICATION_REQUIRED_CODE = 511;
    const HTTP_NETWORK_AUTHENTICATION_REQUIRED_MESSAGE = 'Network Authentication Required';
    const HTTP_NETWORK_AUTHENTICATION_REQUIRED_DESCRIPTION = 'The client needs to authenticate to gain network access. Intended for use by intercepting proxies used to control access to the network (e.g., "captive portals" used to require agreement to Terms of Service before granting full Internet access via a Wi-Fi hotspot)';

    const MESSAGE = 'message';
    const DESCRIPTION = 'description';

    /**
     * @var array
     */
    protected static $mapping = [];

    /**
     * @param int $code
     * @return string
     * @throws \OutOfRangeException
     */
    public static function getMessage($code)
    {
        return self::get($code)[self::MESSAGE];
    }

    /**
     * @param int $code
     * @return array
     * @throws \OutOfRangeException
     */
    protected static function get($code)
    {
        self::createMapping();

        if (self::has($code)) {
            return self::$mapping[$code];
        }

        throw new \OutOfRangeException('Status code ' . $code . ' not recognised.');
    }

    /**
     * @return void
     */
    protected static function createMapping()
    {
        if ([] !== self::$mapping) {
            return;
        }

        try {
            $constants = (new \ReflectionClass(__CLASS__))->getConstants();
        } catch (\ReflectionException $e) {
            $constants = [];
        }

        foreach ($constants as $name => $content) {
            if (false !== strpos($name, '_CODE')) {
                $nameCleaned = str_replace('_CODE', '', $name);
                self::$mapping[$content] = [
                    self::MESSAGE     => $constants[$nameCleaned . '_MESSAGE'],
                    self::DESCRIPTION => $constants[$nameCleaned . '_DESCRIPTION'],
                ];
            }
        }
    }

    /**
     * @param int $code
     * @return bool
     */
    public static function has($code)
    {
        return isset(self::$mapping[$code]);
    }

    /**
     * @param int $code
     * @return string
     * @throws \OutOfRangeException
     */
    public static function getDescription($code)
    {
        return self::get($code)[self::DESCRIPTION];
    }
}
