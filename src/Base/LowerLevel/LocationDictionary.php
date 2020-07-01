<?php
declare(strict_types = 1);


namespace Patrikap\Passtore\Base\LowerLevel;


/**
 * Class LocationDictionary
 * @package Patrikap\Passtore\Base\LowerLevel
 *
 * Location Dictionary Keys
 * Information about a location.
 *
 * @copyright U-CARD, Ltd. (ООО «Ю-КАРД» http://u-crd.ru)
 * @project passtore
 * @date 02.06.2020 22:10
 * @author Konstantin.K
 */
class LocationDictionary
{
    /** @var float|null Optional. Altitude, in meters, of the location. */
    protected ?float $altitude = null;
    /** @var float Required. Latitude, in degrees, of the location. */
    protected float $latitude;
    /** @var float Required. Longitude, in degrees, of the location. */
    protected float $longitude;
    /**
     * @var string|null Optional. Text displayed on the lock screen when the pass is currently relevant. For example, a
     *     description of the nearby location such as “Store nearby on 1st and Main.”
     */
    protected ?string $relevantText = null;

    /*********************************/
    /**
     * LocationDictionary constructor.
     * @param float $latitude
     * @param float $longitude
     * @param string|null $relevantText
     * @param float|null $altitude
     */
    public function __construct(float $latitude, float $longitude, ?string $relevantText = null, ?float $altitude = null)
    {
        $this->latitude = $latitude;
        $this->longitude = $longitude;
        $this->relevantText = $relevantText;
        $this->altitude = $altitude;
    }
}
