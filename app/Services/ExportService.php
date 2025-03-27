<?php

namespace App\Services;

use App\Patterns\creational\builders\ExportBuilder\ExportType\CsvExportType;

class ExportService
{
    public function export(string $model, string $format = 'csv', array $columns = ['*'], array $filters = []): string
    {
        $exporter = match ($format) {
            default => new CsvExportType()
        };

        return $exporter->setModel($model)
            ->setColumns($columns)
            ->setFilters($filters)
            ->export();
    }
}
