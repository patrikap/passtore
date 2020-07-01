<?php
declare(strict_types = 1);


namespace Patrikap\Passtore\Base\LowerLevel;


/**
 * Class NFCDictionary
 * @package Patrikap\Passtore\Base\LowerLevel
 *
 * NFC Dictionary Keys
 * Information about the NFC payload passed to an Apple Pay terminal.
 *
 * @copyright U-CARD, Ltd. (ООО «Ю-КАРД» http://u-crd.ru)
 * @project passtore
 * @date 02.06.2020 22:19
 * @author Konstantin.K
 */
class NFCDictionary
{
    /**
     * @var string Required. The payload to be transmitted to the Apple Pay terminal. Must be 64 bytes or less.
     *     Messages longer than 64 bytes are truncated by the system.
     */
    protected string $message;
    /**
     * @var string|null Optional. The public encryption key used by the Value Added Services protocol. Use a Base64
     *     encoded X.509 SubjectPublicKeyInfo structure containing a ECDH public key for group P256.
     */
    protected ?string $encryptionPublicKey = null;

    /*********************************/
    /**
     * NFCDictionary constructor.
     * @param string $message
     * @param string|null $encryptionPublicKey
     */
    public function __construct(string $message, ?string $encryptionPublicKey = null)
    {
        $this->message = $message;
        $this->encryptionPublicKey = $encryptionPublicKey;
    }
}
