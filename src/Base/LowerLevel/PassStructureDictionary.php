<?php
declare(strict_types = 1);


namespace Patrikap\Passtore\Base\LowerLevel;


/**
 * Class PassStructureDictionaryKeys
 * @package Patrikap\Passtore\Base\LowerLevel
 *
 * Pass Structure Dictionary Keys
 * Keys that define the structure of the pass.
 * These keys are used for all pass styles and partition the fields into the various parts of the pass.
 *
 * @copyright U-CARD, Ltd. (ООО «Ю-КАРД» http://u-crd.ru)
 * @project passtore
 * @date 02.06.2020 22:01
 * @author Konstantin.K
 */
abstract class PassStructureDictionary
{
    public const TRANSIT_TYPE_AIR     = 'PKTransitTypeAir';
    public const TRANSIT_TYPE_BOAT    = 'PKTransitTypeBoat';
    public const TRANSIT_TYPE_BUS     = 'PKTransitTypeBus';
    public const TRANSIT_TYPE_GENERIC = 'PKTransitTypeGeneric';
    public const TRANSIT_TYPE_TRAIN   = 'PKTransitTypeTrain';
    /** @var array|null Optional. Additional fields to be displayed on the front of the pass. */
    protected array $auxiliaryFields = [];
    /** @var array|null Optional. Fields to be on the back of the pass. */
    protected array $backFields = [];
    /**
     * @var array|null Optional. Fields to be displayed in the header on the front of the pass.
     * Use header fields sparingly; unlike all other fields, they remain visible when a stack of passes are displayed.
     */
    protected array $headerFields = [];
    /** @var array|null Optional. Fields to be displayed prominently on the front of the pass. */
    protected array $primaryFields = [];
    /** @var array|null Optional. Fields to be displayed on the front of the pass. */
    protected array $secondaryFields = [];
    /**
     * @var string|null Required for boarding passes; otherwise not allowed. Type of transit. Must be one of the
     *     following values: PKTransitTypeAir, PKTransitTypeBoat, PKTransitTypeBus,
     *     PKTransitTypeGeneric,PKTransitTypeTrain.
     */
    protected ?string $transitType = null;
}
