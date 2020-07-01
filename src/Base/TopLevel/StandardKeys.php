<?php
declare(strict_types = 1);


namespace Patrikap\Passtore\Base\TopLevel;


/**
 * Class StandardKeys
 * @package Patrikap\Passtore\Base\TopLevel
 *
 * Standard Keys
 * Information that is required for all passes.
 *
 * @copyright U-CARD, Ltd. (ООО «Ю-КАРД» http://u-crd.ru)
 * @project passtore
 * @date 31.05.2020 23:13
 * @author Konstantin.K
 */
class StandardKeys
{
    /**
     * Required. Brief description of the pass, used by the iOS accessibility technologies. Don’t try to include all of
     * the data on the pass in its description, just include enough detail to distinguish passes of the same type.
     * @var string
     */
    protected string $description = '';

    /** @var int Required. Version of the file format. The value must be 1. */
    protected int $formatVersion = 1;

    /** @var string Required. Display name of the organization that originated and signed the pass. */
    protected string $organizationName;

    /** @var string Required. Pass type identifier, as issued by Apple. The value must correspond with your signing certificate. */
    protected string $passTypeIdentifier;

    /** @var string Required. Serial number that uniquely identifies the pass. No two passes with the same pass type identifier may have the same serial number. */
    protected string $serialNumber;

    /** @var string Required. Team identifier of the organization that originated and signed the pass, as issued by Apple. */
    protected string $teamIdentifier;

    /*********************************/
    /**
     * StandardKeys constructor.
     * @param string $teamIdentifier
     * @param string $passTypeIdentifier
     * @param string $serialNumber
     * @param string $organizationName
     * @param string $description
     */
    public function __construct(
        string $teamIdentifier,
        string $passTypeIdentifier,
        string $serialNumber,
        string $organizationName,
        string $description = ''
    ) {
        $this->teamIdentifier = $teamIdentifier;
        $this->passTypeIdentifier = $passTypeIdentifier;
        $this->serialNumber = $serialNumber;
        $this->organizationName = $organizationName;
        $this->description = $description;
    }
    /*********************************/

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    ///**
    // * @param string $description
    // * @return $this
    // */
    //public function setDescription(string $description): self
    //{
    //    $this->description = $description;
    //
    //    return $this;
    //}

    /**
     * @return int
     */
    public function getFormatVersion(): int
    {
        return $this->formatVersion;
    }

    ///**
    // * @param int $formatVersion
    // * @return $this
    // */
    //public function setFormatVersion(int $formatVersion): self
    //{
    //    $this->formatVersion = $formatVersion;
    //
    //    return $this;
    //}

    /**
     * @return string
     */
    public function getOrganizationName(): string
    {
        return $this->organizationName;
    }

    ///**
    // * @param string $organizationName
    // * @return $this
    // */
    //public function setOrganizationName(string $organizationName): self
    //{
    //    $this->organizationName = $organizationName;
    //
    //    return $this;
    //}

    /**
     * @return string
     */
    public function getPassTypeIdentifier(): string
    {
        return $this->passTypeIdentifier;
    }

    ///**
    // * @param string $passTypeIdentifier
    // * @return $this
    // */
    //public function setPassTypeIdentifier(string $passTypeIdentifier): self
    //{
    //    $this->passTypeIdentifier = $passTypeIdentifier;
    //
    //    return $this;
    //}

    /**
     * @return string
     */
    public function getSerialNumber(): string
    {
        return $this->serialNumber;
    }

    ///**
    // * @param string $serialNumber
    // * @return $this
    // */
    //public function setSerialNumber(string $serialNumber): self
    //{
    //    $this->serialNumber = $serialNumber;
    //
    //    return $this;
    //}

    /**
     * @return string
     */
    public function getTeamIdentifier(): string
    {
        return $this->teamIdentifier;
    }

    ///**
    // * @param string $teamIdentifier
    // * @return $this
    // */
    //public function setTeamIdentifier(string $teamIdentifier): self
    //{
    //    $this->teamIdentifier = $teamIdentifier;
    //
    //    return $this;
    //}
}
