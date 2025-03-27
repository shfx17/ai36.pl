<?php

namespace App\Patterns\creational\builders\ExportBuilder;

interface ExportBuilderInterface
{
    public function setModel(string $model): self;
    public function setColumns(array $columns): self;
    public function setFilters(array $filters): self;
    public function export(): string;
}
