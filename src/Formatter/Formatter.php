<?php

namespace Attendant\Core\Formatter;

use Attendant\Core\Resource;
use Illuminate\Support\Collection;

interface Formatter
{
    public function collection(Resource $resource, Collection $collection): mixed;

    public function one(Resource $resource, mixed $entity): mixed;

    public function page(Resource $resource, mixed $page): mixed;
}