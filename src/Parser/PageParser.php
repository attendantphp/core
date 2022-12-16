<?php

namespace Attendant\Core\Parser;

interface PageParser extends CollectionParser
{
    public function page(): int|string;

    public function perPage(): int;
}