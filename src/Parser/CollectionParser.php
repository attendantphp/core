<?php

namespace Attendant\Core\Parser;

use Attendant\Core\Definition\Field\Field;
use Illuminate\Support\Collection;

interface CollectionParser
{
    /**
     * @return Collection<array-key,Field>
     */
    public function fields(): Collection;

    public function sorts(): Collection;
}