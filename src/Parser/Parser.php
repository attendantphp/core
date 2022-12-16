<?php

namespace Attendant\Core\Parser;

use Attendant\Core\Resource;

interface Parser
{
    public function collection(Resource $resource): CollectionParser;

    public function one(Resource $resource): OneParser;

    public function page(Resource $resource): PageParser;
}