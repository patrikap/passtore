<?php
declare(strict_types = 1);


namespace Patrikap\Passtore\Base\TopLevel;


/**
 * Class WebServiceKeys
 * @package Patrikap\Passtore\Base\TopLevel
 *
 * Web Service Keys
 * Information used to update passes using the web service.
 * If a web service URL is provided, an authentication token is required; otherwise, these keys are not allowed.
 *
 * @copyright U-CARD, Ltd. (ООО «Ю-КАРД» http://u-crd.ru)
 * @project passtore
 * @date 31.05.2020 23:47
 * @author Konstantin.K
 */
class WebServiceKeys
{
    /**
     * @var string The authentication token to use with the web service. The token must be 16 characters or longer.
     */
    protected string $authenticationToken;
    /**
     * @var string The URL of a web service that conforms to the API described in PassKit Web Service Reference.
     * The web service must use the HTTPS protocol; the leading https:// is included in the value of this key.
     * On devices configured for development, there is UI in Settings to allow HTTP web services
     * https://developer.apple.com/library/archive/documentation/PassKit/Reference/PassKit_WebService/WebService.html#//apple_ref/doc/uid/TP40011988
     */
    protected string $webServiceURL;

    /*********************************/
    public function __construct(string $authenticationToken, string $webServiceURL)
    {
        $this->authenticationToken = $authenticationToken;
        $this->webServiceURL = $webServiceURL;
    }
    /*********************************/
}
