<?php
declare(strict_types = 1);


namespace Patrikap\Passtore\Base\TopLevel;


/**
 * Class RelevanceKeys
 * @package Patrikap\Passtore\Base\TopLevel
 *
 * Relevance Keys
 * Information about where and when a pass is relevant.
 *
 * @copyright U-CARD, Ltd. (ООО «Ю-КАРД» http://u-crd.ru)
 * @project passtore
 * @date 31.05.2020 23:29
 * @author Konstantin.K
 */
trait RelevanceKeys
{
    /**
     * @todo https://developer.apple.com/library/archive/documentation/UserExperience/Reference/PassKit_Bundle/Chapters/LowerLevel.html#//apple_ref/doc/uid/TP40012026-CH3-SW4
     * @var array|null Optional. Beacons marking locations where the pass is relevant.
     * For these dictionaries’ keys, see Beacon Dictionary Keys
     * Available in iOS 7.0.
     */
    protected ?array $beacons = null;
    /**
     * @todo https://developer.apple.com/library/archive/documentation/UserExperience/Reference/PassKit_Bundle/Chapters/LowerLevel.html#//apple_ref/doc/uid/TP40012026-CH3-SW2
     * @var array|null Optional. Locations where the pass is relevant. For example, the location of your store.
     * For these dictionaries’ keys, see Location Dictionary Keys.
     */
    protected ?array $locations = null;
    /**
     * @var int|null Optional. Maximum distance in meters from a relevant latitude and longitude that the pass is
     *     relevant. This number is compared to the pass’s default distance and the smaller value is used. Available in
     *     iOS 7.0.
     */
    protected ?int $maxDistance = null;
    /**
     * @todo change to datetime interface
     * @var string|null Recommended for event tickets and boarding passes; otherwise optional. Date and time when the
     *     pass becomes relevant. For example, the start time of a movie.
     * The value must be a complete date with hours and minutes, and may optionally include seconds.
     */
    protected ?string $relevantDate = null;
}
