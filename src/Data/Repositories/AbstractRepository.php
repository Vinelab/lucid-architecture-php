<?php

namespace Directory\Data\Repositories;

/**
 * @author Abed Halawi <abed.halawi@vinelab.com>
 */
abstract class AbstractRepository
{
    public function __construct($entity)
    {
        $this->entity = $entity;
    }
}
