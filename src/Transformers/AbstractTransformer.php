<?php

namespace WSW\SiftScience\Transformers;

use League\Fractal\TransformerAbstract;
use stdClass;
use WSW\SiftScience\Events\BaseEvent;

/**
 * Class AbstractTransformer
 *
 * @package WSW\SiftScience\Transformers
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
abstract class AbstractTransformer extends TransformerAbstract
{
    /**
     * @param \WSW\SiftScience\Events\BaseEvent $event
     * @param array $data
     *
     * @return array
     */
    public function result(BaseEvent $event, array $data = [])
    {
        $result = $data;

        if ($event->getCustomFields() instanceof stdClass) {
            $result = array_merge($data, (array) $event->getCustomFields());
        }

        return array_filter($result);
    }
}
