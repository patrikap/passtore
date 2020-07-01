<?php
declare(strict_types = 1);


namespace Patrikap\Passtore\Base\TopLevel;


/**
 * Class ExpirationKeys
 * @package Patrikap\Passtore\Base\TopLevel
 *
 * Expiration Keys
 * Information about when a pass expires and whether it is still valid.
 * A pass is marked as expired if the current date is after the pass’s expiration date, or if the pass has been
 *     explicitly marked as voided.
 *
 * @copyright U-CARD, Ltd. (ООО «Ю-КАРД» http://u-crd.ru)
 * @project passtore
 * @date 31.05.2020 23:24
 * @author Konstantin.K
 */
class ExpirationKeys
{
    /**
     * @todo change to datetime interface
     * @var string|null Optional. Date and time when the pass expires.
     * The value must be a complete date with hours and minutes, and may optionally include seconds.
     * Available in iOS 7.0.
     */
    protected ?string $expirationDate = null;

    /** @var bool|null Optional. Indicates that the pass is void—for example, a one time use coupon that has been redeemed.
     * The default value is false. Available in iOS 7.0.
     */
    protected ?bool $voided = null;

    /*********************************/
    /**
     * ExpirationKeys constructor.
     * @param string $expirationDate
     * @param bool $voided
     */
    public function __construct(string $expirationDate, bool $voided)
    {
        $this->expirationDate = $expirationDate;
        $this->voided = $voided;
    }
    /*********************************/
    /**
     * @return string|null
     */
    public function getExpirationDate(): ?string
    {
        return $this->expirationDate;
    }

    /**
     * @return bool|null
     */
    public function getVoided(): ?bool
    {
        return $this->voided;
    }
}
