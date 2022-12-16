<?php

namespace Attendant\Core\Resolver;

use Attendant\Core\Parser\CollectionParser;
use Attendant\Core\Parser\OneParser;
use Attendant\Core\Parser\PageParser;
use Attendant\Core\Resource;
use Illuminate\Support\Collection;

interface Resolver
{
    public function collection(Resource $resource, CollectionParser $parser): Collection;

    public function one(Resource $resource, OneParser $parser): mixed;

    public function page(Resource $resource, PageParser $parser): mixed;
}