<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace SprykerTest\Zed\ProductRelationDataImport\Communication\Plugin;

use Codeception\Test\Unit;
use Generated\Shared\Transfer\DataImporterConfigurationTransfer;
use Generated\Shared\Transfer\DataImporterReaderConfigurationTransfer;
use Generated\Shared\Transfer\ProductAbstractTransfer;
use Spryker\Zed\ProductRelationDataImport\Communication\Plugin\ProductRelationDataImportPlugin;

/**
 * Auto-generated group annotations
 *
 * @group SprykerTest
 * @group Zed
 * @group ProductRelationDataImport
 * @group Communication
 * @group Plugin
 * @group ProductRelationDataImportPluginTest
 * Add your own group annotations below this line
 */
class ProductRelationDataImportPluginTest extends Unit
{
    protected const EXPECTED_IMPORT_COUNT = 2;

    /**
     * @var \SprykerTest\Zed\ProductRelationDataImport\ProductRelationDataImportCommunicationTester
     */
    protected $tester;

    /**
     * @return void
     */
    public function testImportImportsProductRelations(): void
    {
        //Arrange
        $this->tester->haveProductAbstract([
            ProductAbstractTransfer::SKU => '999',
        ]);
        $this->tester->haveProductAbstract([
            ProductAbstractTransfer::SKU => '998',
        ]);
        $this->tester->ensureProductRelationTableIsEmpty();
        $dataImporterReaderConfigurationTransfer = new DataImporterReaderConfigurationTransfer();
        $dataImporterReaderConfigurationTransfer->setFileName(codecept_data_dir() . 'import/product_relation.csv');

        $dataImportConfigurationTransfer = new DataImporterConfigurationTransfer();
        $dataImportConfigurationTransfer->setReaderConfiguration($dataImporterReaderConfigurationTransfer);

        $productRelationDataImportPlugin = new ProductRelationDataImportPlugin();

        //Act
        $dataImporterReportTransfer = $productRelationDataImportPlugin->import($dataImportConfigurationTransfer);

        //Assert
        $this->assertTrue($dataImporterReportTransfer->getIsSuccess(), 'Data import should finish successfully');

        $this->assertSame(
            static::EXPECTED_IMPORT_COUNT,
            $dataImporterReportTransfer->getImportedDataSetCount(),
            sprintf(
                'Imported number of product relations is %s expected %s.',
                $dataImporterReportTransfer->getImportedDataSetCount(),
                static::EXPECTED_IMPORT_COUNT
            )
        );
    }
}
