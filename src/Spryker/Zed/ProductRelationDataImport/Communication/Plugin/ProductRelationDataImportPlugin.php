<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\ProductRelationDataImport\Communication\Plugin;

use Generated\Shared\Transfer\DataImporterConfigurationTransfer;
use Generated\Shared\Transfer\DataImporterReportTransfer;
use Spryker\Zed\DataImport\Dependency\Plugin\DataImportPluginInterface;
use Spryker\Zed\Kernel\Communication\AbstractPlugin;
use Spryker\Zed\ProductRelationDataImport\ProductRelationDataImportConfig;

/**
 * @method \Spryker\Zed\ProductRelationDataImport\Business\ProductRelationDataImportFacadeInterface getFacade()
 * @method \Spryker\Zed\ProductRelationDataImport\ProductRelationDataImportConfig getConfig()
 * @method \Spryker\Zed\ProductRelationDataImport\Communication\ProductRelationDataImportCommunicationFactory getFactory()
 */
class ProductRelationDataImportPlugin extends AbstractPlugin implements DataImportPluginInterface
{
    /**
     * {@inheritDoc}
     * - Imports product relations data.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\DataImporterConfigurationTransfer|null $dataImporterConfigurationTransfer
     *
     * @return \Generated\Shared\Transfer\DataImporterReportTransfer
     */
    public function import(?DataImporterConfigurationTransfer $dataImporterConfigurationTransfer = null): DataImporterReportTransfer
    {
        $dataImporterReportTransfer = $this->getFacade()->importProductRelations($dataImporterConfigurationTransfer);

        return $dataImporterReportTransfer;
    }

    /**
     * {@inheritDoc}
     * - Returns the name of the product relations DataImporter.
     *
     * @api
     *
     * @return string
     */
    public function getImportType(): string
    {
        return ProductRelationDataImportConfig::IMPORT_TYPE_PRODUCT_RELATION;
    }
}
