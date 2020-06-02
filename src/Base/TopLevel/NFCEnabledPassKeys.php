<?php
declare(strict_types = 1);


namespace Patrikap\Passtore\Base\TopLevel;


/**
 * Class NFCEnabledPassKeys
 * @package Patrikap\Passtore\Base\TopLevel
 *
 * NFC-Enabled Pass Keys
 * NFC-enabled pass keys support sending reward card information as part of an Apple Pay transaction.
 *
 * Important: NFC-enabled pass keys are only supported in passes that contain an Enhanced Passbook/NFC certificate. For
 *     more information, contact merchant support at https://developer.apple.com/contact/passkit/.
 *
 * Passes can send reward card information to a terminal as part of an Apple Pay transaction. This feature requires a
 *     payment terminal that supports NFC-entitled passes. Specifically, the terminal must implement the Value Added
 *     Services Protocol.
 * Passes provide the required information using the nfc key. The value of this key is a dictionary containing the keys
 *     described in NFC Dictionary Keys. This functionality allows passes to act as the user’s credentials in the
 *     context of the NFC Value Added Service Protocol. It is available only for storeCard style passes.
 *
 * @copyright U-CARD, Ltd. (ООО «Ю-КАРД» http://u-crd.ru)
 * @project passtore
 * @date 31.05.2020 23:50
 * @author Konstantin.K
 */
trait NFCEnabledPassKeys
{
    /**
     * @todo https://developer.apple.com/library/archive/documentation/UserExperience/Reference/PassKit_Bundle/Chapters/LowerLevel.html#//apple_ref/doc/uid/TP40012026-CH3-SW5
     * @var array|null Optional. Information used for Value Added Service Protocol transactions. For this dictionary’s
     *     keys, see NFC Dictionary Keys. Available in iOS 9.0
     */
    protected ?array $nfc = null;
}
