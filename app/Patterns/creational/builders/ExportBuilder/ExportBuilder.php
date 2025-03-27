<?php

namespace App\Patterns\creational\builders\ExportBuilder;

use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use InvalidArgumentException;

abstract class ExportBuilder implements ExportBuilderInterface
{
    protected string $model;
    protected array $columns = ['*'];
    protected array $filters = [];

    public function setModel(string $model): ExportBuilderInterface
    {
        if (!is_subclass_of($model, Model::class)) {
            throw new InvalidArgumentException("Class {$model} is not a valid Eloquent model.");
        }

        $this->model = $model;
        return $this;
    }

    public function setColumns(array $columns): ExportBuilderInterface
    {
        $this->columns = $columns;
        return $this;
    }

    public function setFilters(array $filters): ExportBuilderInterface
    {
        $this->filters = $filters;
        return $this;
    }

    /**
     * @throws Exception
     */
    protected function getData(): Collection
    {
        if (!$this->model) {
            throw new Exception('Model is not set for export.');
        }

        $query = $this->model::select($this->columns);

        foreach ($this->filters as $column => $value) {
            if (is_array($value)) {
                $query->where($value[0], $value[1], $value[2]);
            } else {
                $query->where($column, $value);
            }
        }

        return $query->get();
    }

    abstract public function export(): string;
}
