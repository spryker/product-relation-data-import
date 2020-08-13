<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Spryker\Zed\ProductRelationDataImport\Business\Writer\ProductRelation\DataSet;

interface ProductRelationDataSetInterface
{
    public const COL_RELATION_TYPE = 'relation_type';
    public const COL_RULE = 'rule';
    public const COL_IS_ACTIVE = 'is_active';
    public const COL_IS_REBUILD_SCHEDULED = 'is_rebuild_scheduled';
    public const COL_PRODUCT = 'product';
    public const COL_ID_PRODUCT_RELATION_TYPE = 'id_product_relation_type';
    public const COL_PRODUCT_RELATION_KEY = 'product_relation_key';
    public const COL_ID_PRODUCT_ABSTRACT = 'id_product_abstract';
}
