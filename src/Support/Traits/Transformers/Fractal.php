<?php

namespace WSW\SiftScience\Support\Traits\Transformers;

use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use League\Fractal\Resource\Item;
use WSW\SiftScience\Support\Serializers\SiftScienceSerializer;
use WSW\SiftScience\Transformers\AbstractTransformer;

/**
 * Trait Fractal
 *
 * @package WSW\SiftScience\Support\Traits\Transformers
 * @author Ronaldo Matos Rodrigues <ronaldo@whera.com.br>
 */
trait Fractal
{
    /**
     * @var \League\Fractal\Manager
     */
    private $fractal;

    /**
     * @return \League\Fractal\Manager
     */
    public function getFractal()
    {
        if (!$this->fractal instanceof Manager) {
            $this->fractal = new Manager();
            $this->fractal->setSerializer(new SiftScienceSerializer);
        }

        return $this->fractal;
    }

    /**
     * @param null $data
     * @param \WSW\SiftScience\Transformers\AbstractTransformer $transformer
     *
     * @return \League\Fractal\Scope
     */
    public function loadItem($data = null, AbstractTransformer $transformer = null)
    {
        return $this->getFractal()->createData(new Item($data, $transformer));
    }

    /**
     * @param null $data
     * @param \WSW\SiftScience\Transformers\AbstractTransformer $transformer
     *
     * @return \League\Fractal\Scope
     */
    public function loadCollection($data = null, AbstractTransformer $transformer = null)
    {
        return $this->getFractal()->createData(new Collection($data, $transformer));
    }
}
