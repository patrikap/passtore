<?php
declare(strict_types = 1);


namespace Patrikap\Passtore\Base\TopLevel;


/**
 * Class CompanionAppKeys
 * @package Patrikap\Passtore\Base\TopLevel
 *
 * Companion App Keys
 * Custom information about a pass provided for a companion app to use.
 *
 * @copyright U-CARD, Ltd. (ООО «Ю-КАРД» http://u-crd.ru)
 * @project passtore
 * @date 31.05.2020 23:20
 * @author Konstantin.K
 */
trait CompanionAppKeys
{
    /** @var array|null Optional. Custom information for companion apps. This data is not displayed to the user.
     * For example, a pass for a cafe could include information about the user’s favorite drink and sandwich in a
     * machine-readable form for the companion app to read, making it easy to place an order for “the usual” from the
     * app. Available in iOS 7.0.
     */
    protected ?array $userInfo = [];

    /**
     * @return array|null
     */
    public function getUserInfo(): ?array
    {
        return $this->userInfo;
    }

    /**
     * @todo: change ti interface in Lower Level
     * @param array|null $userInfo
     * @return $this
     */
    public function setUserInfo(?array $userInfo): self
    {
        $this->userInfo = $userInfo;

        return $this;
    }
}
