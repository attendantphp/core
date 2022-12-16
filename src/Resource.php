<?php

namespace Attendant\Core;

use Attendant\Core\Definition\Field\Field;
use Attendant\Core\Formatter\Formatter;
use Attendant\Core\Parser\Parser;
use Attendant\Core\Resolver\Resolver;
use Illuminate\Support\Collection;

abstract class Resource
{
    public function __construct(
        protected Parser $parser,
        protected Resolver $resolver,
        protected Formatter $formatter
    ) {}

    public function one(): mixed
    {
        $request = $this->parser->one($this);

        $entity = $this->resolver->one($this, $request);

        return $this->formatter->one($this, $entity);
    }

    public function collection(): mixed
    {
        $request = $this->parser->collection($this);

        $entities = $this->resolver->collection($this, $request);

        return $this->formatter->collection($this, $entities);
    }

    public function paginate(): mixed
    {
        $request = $this->parser->page($this);

        $entities = $this->resolver->page($this, $request);

        return $this->formatter->page($this, $entities);
    }

    /**
     * @return Collection<array-key,Field>
     */
    abstract public function getFields(): Collection;

    abstract public function getRelationships(): Collection;

    abstract public function getId(): Field;

    abstract public function getType(): string;
}
