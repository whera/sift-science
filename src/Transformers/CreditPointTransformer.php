<?php

namespace WSW\SiftScience\Transformers;

use WSW\SiftScience\Entities\CreditPoint;

/**
 * Class CreditPointTransformer
 *
 * @package WSW\SiftScience\Transformers
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
