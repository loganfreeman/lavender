<?php
namespace Lavender\Store\Database;

use Lavender\Entity\Database\Entity;
use Lavender\Support\Traits\BootableEntity;

class Store extends Entity
{
    use BootableEntity;

    protected $entity = 'store';

    protected $table = 'store';

    public $timestamps = false;
}