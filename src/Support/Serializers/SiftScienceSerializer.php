<?php

namespace WSW\SiftScience\Support\Serializers;

use League\Fractal\Serializer\ArraySerializer;
use Symfony\Component\VarDumper\Dumper\DataDumperInterface;

/**
 * Class SiftScienceSerializer
 *
 * @package WSW\Money\Support\Serializers
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
class SiftScienceSerializer extends ArraySerializer
{
    /**
     * @param string $resourceKey
     * @param array $data
     *
     * @return array
     */
    public function collection($resourceKey, array $data)
    {
        return $this->item($resourceKey, $data);
    }
}
