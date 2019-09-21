<?php
/**
 * Refer to LICENSE.txt distributed with the Temando Shipping module for notice of license
 */
namespace Temando\Shipping\Rest\Response\Fields\Shipment\ExportDeclaration;

/**
 * Temando API Shipment Export Declaration Export Codes Field
 *
 * @package Temando\Shipping\Rest
 * @author  Christoph Aßmann <christoph.assmann@netresearch.de>
 * @license https://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 * @link    https://www.temando.com/
 */
class ExportCodes
{
    /**
     * @var string
     */
    private $exportDeclarationNumber;

    /**
     * @var string
     */
    private $exemptionExclusionLegend;

    /**
     * @var string
     */
    private $electronicExportInformation;

    /**
     * @var string
     */
    private $internalTransactionNumber;

    /**
     * @return string
     */
    public function getExportDeclarationNumber()
    {
        return $this->exportDeclarationNumber;
    }

    /**
     * @param string $exportDeclarationNumber
     */
    public function setExportDeclarationNumber($exportDeclarationNumber)
    {
        $this->exportDeclarationNumber = $exportDeclarationNumber;
    }

    /**
     * @return string
     */
    public function getExemptionExclusionLegend()
    {
        return $this->exemptionExclusionLegend;
    }

    /**
     * @param string $exemptionExclusionLegend
     */
    public function setExemptionExclusionLegend($exemptionExclusionLegend)
    {
        $this->exemptionExclusionLegend = $exemptionExclusionLegend;
    }

    /**
     * @return string
     */
    public function getElectronicExportInformation()
    {
        return $this->electronicExportInformation;
    }

    /**
     * @param string $electronicExportInformation
     */
    public function setElectronicExportInformation($electronicExportInformation)
    {
        $this->electronicExportInformation = $electronicExportInformation;
    }

    /**
     * @return string
     */
    public function getInternalTransactionNumber()
    {
        return $this->internalTransactionNumber;
    }

    /**
     * @param string $internalTransactionNumber
     */
    public function setInternalTransactionNumber($internalTransactionNumber)
    {
        $this->internalTransactionNumber = $internalTransactionNumber;
    }
}
