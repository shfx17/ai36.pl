<?php

namespace App\Patterns\creational\builders\ExportBuilder\ExportType;

use App\Patterns\creational\builders\ExportBuilder\ExportBuilder;
use Exception;

class CsvExportType extends ExportBuilder
{
    /**
     * @throws Exception
     */
    public function export(): string
    {
        $data = $this->getData();

        if ($data->isEmpty()) {
            return '';
        }

        $csv = implode(',', array_keys($data->first()->toArray())) . "\n";

        foreach ($data as $row) {
            $csv .= implode(',', $row->toArray()) . "\n";
        }

        $filePath = storage_path('app/export/csv/export_' . now()->timestamp . '.csv');
        file_put_contents($filePath, $csv);

        return $filePath;
    }
}
