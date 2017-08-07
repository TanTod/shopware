<?php declare(strict_types=1);

namespace Shopware\Product\Writer\Field\ProductDetail;

use Shopware\Framework\Validation\ConstraintBuilder;
use Shopware\Product\Writer\Api\DateField;

class ReleaseDateField extends DateField
{
    public function __construct(ConstraintBuilder $constraintBuilder)
    {
        parent::__construct('releaseDate', 'release_date', 'product_detail', $constraintBuilder);
    }
}