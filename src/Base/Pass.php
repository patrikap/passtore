<?php
declare(strict_types = 1);


namespace Patrikap\Passtore\Base;


use JsonSerializable;
use Patrikap\Passtore\Base\TopLevel\AssociatedAppKeys;
use Patrikap\Passtore\Base\TopLevel\CompanionAppKeys;
use Patrikap\Passtore\Base\TopLevel\ExpirationKeys;
use Patrikap\Passtore\Base\TopLevel\NFCEnabledPassKeys;
use Patrikap\Passtore\Base\TopLevel\RelevanceKeys;
use Patrikap\Passtore\Base\TopLevel\StandardKeys;
use Patrikap\Passtore\Base\TopLevel\StyleKeys;
use Patrikap\Passtore\Base\TopLevel\VisualAppearanceKeys;
use Patrikap\Passtore\Base\TopLevel\WebServiceKeys;

/**
 * Class Pass
 * @package Patrikap\Passtore\Base
 *
 * @copyright CDEK.MARKET, Ltd. (ООО «СДЭК.МАРКЕТ» http://cdek.market)
 * @project passtore
 * @date 01.07.2020 13:35
 * @author Konstantin.K
 */
abstract class Pass implements JsonSerializable
{
    protected StandardKeys $standardKeys;
    protected ?AssociatedAppKeys $associatedAppKeys = null;
    protected ?CompanionAppKeys $companionAppKeys = null;
    protected ?ExpirationKeys $expirationKeys = null;
    protected ?RelevanceKeys $relevanceKeys = null;
    protected StyleKeys $styleKeys;
    protected ?VisualAppearanceKeys $visualAppearanceKeys = null;
    protected ?WebServiceKeys $webServiceKeys = null;
    protected ?NFCEnabledPassKeys $nfcEnabledPassKeys = null;

    public function __construct(StandardKeys $standardKeys, StyleKeys $styleKeys)
    {
        $this->standardKeys = $standardKeys;
        $this->styleKeys = $styleKeys;
    }

    public function setAssociatedAppKeys(AssociatedAppKeys $associatedAppKeys): self
    {
        $this->associatedAppKeys = $associatedAppKeys;

        return $this;
    }

    public function setCompanionAppKeys(CompanionAppKeys $companionAppKeys): self
    {
        $this->companionAppKeys = $companionAppKeys;

        return $this;
    }

    public function setExpirationKeys(ExpirationKeys $expirationKeys): self
    {
        $this->expirationKeys = $expirationKeys;

        return $this;
    }

    public function setRelevanceKeys(RelevanceKeys $relevanceKeys): self
    {
        $this->relevanceKeys = $relevanceKeys;

        return $this;
    }

    public function setWebServiceKeys(WebServiceKeys $webServiceKeys): self
    {
        $this->webServiceKeys = $webServiceKeys;

        return $this;
    }

    public function setNfcEnabledPassKeys(NFCEnabledPassKeys $nfc): self
    {
        $this->nfcEnabledPassKeys = $nfc;

        return $this;
    }

    public function setVisualAppearanceKeys(VisualAppearanceKeys $visualAppearanceKeys): self
    {
        $this->visualAppearanceKeys = $visualAppearanceKeys;

        return $this;
    }

    public function jsonSerialize(): array
    {
        $json = [];
        $vars = get_object_vars($this);
        //foreach ($vars as $property => $value) {
        //    if (!empty($value)) {
        //        $json = array_merge($json,$value->jsonSerialize());
        //    }
        //}

        return $json;
    }
}
