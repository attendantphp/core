<?php

namespace Attendant\Core\Definition\Field;

class Field
{
    private string $columnName;

    private string $queryName;

    public static function make(string $column): self
    {
        return new self($column);
    }

    public function __construct(string $columnName)
    {
        $this
            ->columnName($columnName)
            ->queryName($columnName);
    }

    public function columnName(string $columnName): self
    {
        $this->columnName = $columnName;

        return $this;
    }

    public function getColumnName(): string
    {
        return $this->columnName;
    }

    public function queryName(string $queryName): self
    {
        $this->queryName = $queryName;

        return $this;
    }

    public function getQueryName(): string
    {
        return $this->queryName;
    }
}