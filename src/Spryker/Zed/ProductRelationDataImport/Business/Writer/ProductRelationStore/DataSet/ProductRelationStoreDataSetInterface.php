<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Spryker\Zed\ProductRelationDataImport\Business\Writer\ProductRelationStore\DataSet;

interface ProductRelationStoreDataSetInterface
{
    /**
     * @var string
     */
    public const COL_PRODUCT_RELATION_KEY = 'product_relation_key';

    /**
     * @var string
     */
    public const COL_ID_PRODUCT_RELATION = 'id_product_relation';

    /**
     * @var string
     */
    public const COL_STORE_NAME = 'store_name';

    /**
     * @var string
     */
    public const COL_ID_STORE = 'id_store';
}
