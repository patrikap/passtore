<?php
declare(strict_types = 1);


namespace Patrikap\Passtore\Base\LowerLevel;


/**
 * Class BeaconDictionary
 * @package Patrikap\Passtore\Base\LowerLevel
 *
 * Beacon Dictionary Keys
 *
 * Information about a location beacon.
 * Available in iOS 7.0.
 *
 * @copyright U-CARD, Ltd. (ООО «Ю-КАРД» http://u-crd.ru)
 * @project passtore
 * @date 02.06.2020 22:06
 * @author Konstantin.K
 */
class BeaconDictionary
{
    /** @var int|null Optional. Major identifier of a Bluetooth Low Energy location beacon. */
    protected ?int $major = null;
    /** @var int|null Optional. Minor identifier of a Bluetooth Low Energy location beacon. */
    protected ?int $minor = null;
    /** @var string Required. Unique identifier of a Bluetooth Low Energy location beacon. */
    protected string $proximityUUID;
    /**
     * @var string|null Optional. Text displayed on the lock screen when the pass is currently relevant. For example, a
     *     description of the nearby location such as “Store nearby on 1st and Main.”
     */
    protected ?string $relevantText = null;

    /*********************************/
    /**
     * BeaconDictionary constructor.
     * @param string $proximityUUID
     * @param string|null $relevantText
     * @param int|null $minor
     * @param int|null $major
     */
    public function __construct(string $proximityUUID, ?string $relevantText = null, ?int $minor = null, ?int $major = null)
    {
        $this->proximityUUID = $proximityUUID;
        $this->relevantText = $relevantText;
        $this->minor = $minor;
        $this->major = $major;
    }
}
