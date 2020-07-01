<?php
declare(strict_types = 1);


namespace Patrikap\Passtore\Base\LowerLevel;


use Exception;

/**
 * Class BarcodeDictionary
 * @package Patrikap\Passtore\Base\LowerLevel
 *
 * Barcode Dictionary Keys
 * Information about a pass’s barcode.
 *
 * @copyright U-CARD, Ltd. (ООО «Ю-КАРД» http://u-crd.ru)
 * @project passtore
 * @date 02.06.2020 22:13
 * @author Konstantin.K
 */
class BarcodeDictionary
{
    public const BARCODE_FORMAT_QR    = 'PKBarcodeFormatQR';
    public const BARCODE_FORMAT_PDF   = 'PKBarcodeFormatPDF417';
    public const BARCODE_FORMAT_AZTEC = 'PKBarcodeFormatAztec';
    public const BARCODE_FORMAT_128   = 'PKBarcodeFormatCode128';
    /**
     * @var string|null Optional. Text displayed near the barcode. For example, a human-readable version of the barcode
     *     data in case the barcode doesn’t scan.
     */
    protected ?string $altText = null;
    /**
     * @var string Required. Barcode format. For the barcode dictionary, you can use only the following values:
     *     PKBarcodeFormatQR, PKBarcodeFormatPDF417, or PKBarcodeFormatAztec. For dictionaries in the barcodes array,
     *     you may also use PKBarcodeFormatCode128.
     */
    protected string $format;
    /** @var string Required. Message or payload to be displayed as a barcode. */
    protected string $message;
    /**
     * @var string Required. Text encoding that is used to convert the message from the string representation to a data
     *     representation to render the barcode. The value is typically iso-8859-1, but you may use another encoding
     *     that is supported by your barcode scanning infrastructure.
     */
    protected string $messageEncoding = 'iso-8859-1';

    /*********************************/
    /**
     * BarcodeDictionary constructor.
     * @param string $format
     * @param string $message
     * @throws Exception
     */
    public function __construct(string $format, string $message)
    {
        if (!in_array($format, [self::BARCODE_FORMAT_128, self::BARCODE_FORMAT_AZTEC, self::BARCODE_FORMAT_PDF, self::BARCODE_FORMAT_QR])) {
            throw new Exception('Not supported format barcode: ' . $format);
        }
        $this->format = $format;
        $this->message = $message;
    }
}
