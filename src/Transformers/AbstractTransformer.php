<?php

namespace WSW\SiftScience\Transformers;

use League\Fractal\Serializer\ArraySerializer;
use League\Fractal\TransformerAbstract;

/**
 * Class AbstractTransformer
 *
 * @package WSW\SiftScience\Transformers
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
abstract class AbstractTransformer extends TransformerAbstract
{
    /**
     * @param mixed $data
     * @param AbstractTransformer $transformer
     *
     * @return array
     */
    protected function loadItem($data = null, AbstractTransformer $transformer = null)
    {
        return $this->getCurrentScope()
                    ->getManager()
                    ->createData($this->item($data, $transformer))
                    ->toArray();
    }

    /**
     * @param mixed $data
     * @param AbstractTransformer $transformer
     *
     * @return array
     */
    protected function loadCollection($data = null, AbstractTransformer $transformer = null)
    {
        $result = $this->getCurrentScope()
                    ->getManager()
                    ->setSerializer(new ArraySerializer)
                    ->createData($this->collection($data, $transformer))->toArray();

        return (isset($result['data'])) ? $result['data'] : $result;
    }
}
