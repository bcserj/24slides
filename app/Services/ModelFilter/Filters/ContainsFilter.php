<?php

namespace App\Services\ModelFilter\Filters;

use App\Services\ModelFilter\Filter;
use Illuminate\Database\Eloquent\Builder;

class ContainsFilter extends Filter
{
    public function __construct(Builder $query, string $column, string $value)
    {
        parent::__construct($query, $column, $value);
    }

    public function apply(): void
    {
        if (empty($this->values)) {
            return;
        }

        $this->query->whereFullText($this->column, $this->values, ['mode' => 'boolean']);
    }
}
