<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Glue\ProductsRestApiExtension\Dependency\Plugin;

use Generated\Shared\Transfer\AbstractProductsRestAttributesTransfer;

interface AbstractProductsResourceExpanderPluginInterface
{
    /**
     * Specification:
     *  - Expands abstract-products resource with additional data.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\AbstractProductsRestAttributesTransfer $abstractProductsRestAttributesTransfer
     * @param int $idProductAbstract
     * @param string $localeName
     *
     * @return \Generated\Shared\Transfer\AbstractProductsRestAttributesTransfer
     */
    public function expand(
        AbstractProductsRestAttributesTransfer $abstractProductsRestAttributesTransfer,
        int $idProductAbstract,
        string $localeName
    ): AbstractProductsRestAttributesTransfer;
}
