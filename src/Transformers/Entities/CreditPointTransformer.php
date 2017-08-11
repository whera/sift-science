<?php

namespace WSW\SiftScience\Transformers\Entities;

use WSW\SiftScience\Entities\CreditPoint;
use WSW\SiftScience\Transformers\AbstractTransformer;

/**
 * Class CreditPointTransformer
 *
 * @package WSW\SiftScience\Transformers\Entities
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
class CreditPointTransformer extends AbstractTransformer
{
    /**
     * @param CreditPoint $creditPoint
     *
     * @return array
     */
    public function transform(CreditPoint $creditPoint)
    {
        return array_filter([
            '$amount' => $creditPoint->getAmount(),
            '$credit_point_type' => $creditPoint->getCreditPointType()
        ]);
    }
}
