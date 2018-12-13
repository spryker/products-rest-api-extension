<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Glue\ProductsRestApiExtension\Dependency\Plugin;

use Generated\Shared\Transfer\ConcreteProductsRestAttributesTransfer;

interface ConcreteProductsResourceExpanderPluginInterface
{
    /**
     * Specification:
     *  - Expands concrete-products resource with additional data.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\ConcreteProductsRestAttributesTransfer $concreteProductsRestAttributesTransfer
     * @param string $concreteProductSku
     * @param string $localeName
     *
     * @return \Generated\Shared\Transfer\ConcreteProductsRestAttributesTransfer
     */
    public function expand(
        ConcreteProductsRestAttributesTransfer $concreteProductsRestAttributesTransfer,
        string $concreteProductSku,
        string $localeName
    ): ConcreteProductsRestAttributesTransfer;
}
