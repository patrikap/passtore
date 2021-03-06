<?php
declare(strict_types = 1);


namespace Patrikap\Passtore\Base\TopLevel;


use Exception;
use Patrikap\Passtore\Base\LowerLevel\PassStructureDictionary;

/**
 * Class StyleKeys
 * @package Patrikap\Passtore\Base\TopLevel
 *
 * Style Keys
 * Keys that specify the pass style
 * Provide exactly one key—the key that corresponds with the pass’s type. The value of this key is a dictionary
 *     containing the keys in Pass Structure Dictionary Keys.
 * https://developer.apple.com/library/archive/documentation/UserExperience/Reference/PassKit_Bundle/Chapters/LowerLevel.html#//apple_ref/doc/uid/TP40012026-CH3-SW14
 * @todo: подумать над оформлением этого класса , в
 * трейт - подгрузить и наполнять только нужное поле
 * или
 * абстрактный - унаследоваться им в потомке и в конструкторе указывать тип карты
 *
 * @copyright U-CARD, Ltd. (ООО «Ю-КАРД» http://u-crd.ru)
 * @project passtore
 * @date 31.05.2020 23:35
 * @author Konstantin.K
 */
class StyleKeys
{
    public const PASS_STYLE_KEYS = ['boardingPass', 'coupon', 'eventTicket', 'generic', 'storeCard'];

    /** @var array|null Information specific to a boarding pass. */
    //protected ?array $boardingPass = null;
    /** @var array|null Information specific to a coupon. */
    //protected ?array $coupon = null;
    /** @var array|null Information specific to an event ticket. */
    //protected ?array $eventTicket = null;
    /** @var array|null Information specific to a generic pass. */
    //protected ?array $generic = null;
    /** @var array|null Information specific to a store card. */
    //protected ?array $storeCard = null;

    protected PassStructureDictionary $body;
    protected string $styleType;

    /*********************************/
    /**
     * StyleKeys constructor.
     * @param string $styleType
     * @param PassStructureDictionary $body
     * @throws Exception
     */
    public function __construct(string $styleType, PassStructureDictionary $body)
    {
        if (!in_array($styleType, static::PASS_STYLE_KEYS)) {
            throw new Exception('Pass style type is not valid value: ' . $styleType);
        }
        $this->styleType = $styleType;
        $this->body = $body;
    }
    /*********************************/
}
