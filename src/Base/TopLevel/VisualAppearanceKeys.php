<?php
declare(strict_types = 1);


namespace Patrikap\Passtore\Base\TopLevel;


/**
 * Class VisualAppearanceKeys
 * @package Patrikap\Passtore\Base\TopLevel
 *
 * Visual Appearance Keys
 * Keys that define the visual style and appearance of the pass.
 *
 * With the release of iOS 9, there are two ways to display a barcode:
 * * The barcodes key (new and required for iOS 9 and later)
 * * The barcode key (for iOS 8 and earlier)
 * To support older versions of iOS, use both keys. The system automatically selects the barcodes array for iOS 9 and
 *     later and uses the barcode dictionary for iOS 8 and earlier.
 *
 * @copyright U-CARD, Ltd. (ООО «Ю-КАРД» http://u-crd.ru)
 * @project passtore
 * @date 31.05.2020 23:41
 * @author Konstantin.K
 */
trait VisualAppearanceKeys
{
    /**
     * @todo https://developer.apple.com/library/archive/documentation/UserExperience/Reference/PassKit_Bundle/Chapters/LowerLevel.html#//apple_ref/doc/uid/TP40012026-CH3-SW3
     * @var array|null Optional. Information specific to the pass’s barcode. For this dictionary’s keys, see Barcode
     *     Dictionary Keys.
     * Note:Deprecated in iOS 9.0 and later; use barcodes instead.
     */
    protected ?array $barcode = [];
    /**
     * @var array|null Optional. Information specific to the pass’s barcode. The system uses the first valid
     *     barcode dictionary in the array. Additional dictionaries can be added as fallbacks. For this dictionary’s
     *     keys, see Barcode Dictionary Keys. Note: Available only in iOS 9.0 and later.
     */
    protected ?array $barcodes = [];
    /**
     * @var string|null Optional. Background color of the pass, specified as an CSS-style RGB triple. For example,
     *     rgb(23, 187, 82).
     */
    protected ?string $backgroundColor = null;
    /**
     * @var string|null Optional. Foreground color of the pass, specified as a CSS-style RGB triple. For example,
     *     rgb(100, 10, 110).
     */
    protected ?string $foregroundColor = null;
    /**
     * @var string|null Optional. Color of the label text, specified as a CSS-style RGB triple. For example, rgb(255,
     *     255, 255).
     * If omitted, the label color is determined automatically.
     */
    protected ?string $labelColor = null;
    /**
     * @var string|null Optional for event tickets and boarding passes; otherwise not allowed. Identifier used to group
     *     related passes. If a grouping identifier is specified, passes with the same style, pass type identifier, and
     *     grouping identifier are displayed as a group. Otherwise, passes are grouped automatically.
     * Use this to group passes that are tightly related, such as the boarding passes for different connections of the
     *     same trip.
     * Available in iOS 7.0.
     */
    protected ?string $groupingIdentifier = null;
    /** @var string|null Optional. Text displayed next to the logo on the pass. */
    protected ?string $logoText = null;
    /**
     * @var bool|null Optional. If true, the strip image is displayed without a shine effect. The default value prior
     *     to iOS 7.0 is false. In iOS 7.0, a shine effect is never applied, and this key is deprecated.
     */
    protected ?bool $suppressStripShine = false;

}
