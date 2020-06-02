<?php
declare(strict_types = 1);


namespace Patrikap\Passtore\Base\TopLevel;


/**
 * Class AssociatedAppKeys
 * @package Patrikap\Passtore\Base\TopLevel
 *
 * Associated App Keys
 * Information about an app that is associated with a pass.
 *
 * @copyright U-CARD, Ltd. (ООО «Ю-КАРД» http://u-crd.ru)
 * @project passtore
 * @date 31.05.2020 23:15
 * @author Konstantin.K
 */
trait AssociatedAppKeys
{
    /** @var string|null Optional. A URL to be passed to the associated app when launching it.
     * The app receives this URL in the application:didFinishLaunchingWithOptions: and application:openURL:options:
     * methods of its app delegate.
     * If this key is present, the associatedStoreIdentifiers key must also be present. */
    protected ?string $appLaunchURL = null;

    /** @var array|int[]|null Optional. A list of iTunes Store item identifiers for the associated apps.
     * Only one item in the list is used—the first item identifier for an app compatible with the current device. If
     * the app is not installed, the link opens the App Store and shows the app. If the app is already installed, the
     * link launches the app. */
    protected ?array $associatedStoreIdentifiers = [];

    /**
     * @return string|null
     */
    public function getAppLaunchURL(): ?string
    {
        return $this->appLaunchURL;
    }

    /**
     * @param string|null $appLaunchURL
     * @return $this
     */
    public function setAppLaunchURL(?string $appLaunchURL): self
    {
        $this->appLaunchURL = $appLaunchURL;

        return $this;
    }

    /**
     * @return array|int[]|null
     */
    public function getAssociatedStoreIdentifiers()
    {
        return $this->associatedStoreIdentifiers;
    }

    /**
     * @param array|int[]|null $associatedStoreIdentifiers
     * @return $this
     */
    public function setAssociatedStoreIdentifiers(array $associatedStoreIdentifiers): self
    {
        $this->associatedStoreIdentifiers = $associatedStoreIdentifiers;

        return $this;
    }

}
