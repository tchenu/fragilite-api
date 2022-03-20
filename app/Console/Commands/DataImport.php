<?php

namespace App\Console\Commands;

use App\Models\Iris;
use League\Csv\Reader;
use League\Csv\MapIterator;
use Illuminate\Console\Command;

class DataImport extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'data:import {--fresh}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import data from a CSV file';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $fresh = $this->option('fresh');

        if ($fresh) {
            Iris::truncate();
        }

        $records = $this->getRecords();

        collect($records)->map(function($record) {
            Iris::insert($this->map($record));
        });

        return 0;
    }

    private function map(array $row): array
    {
        $mapping = config('import.mapping');

        $mappedRow = [];

        foreach ($mapping as $key => $field) {
            if (is_callable($field)) {
                $mappedRow[$key] = $field($row);
            } else {
                $mappedRow[$key] = $row[$field] ?? null;
            }
        }

        return $mappedRow;
    }

    private function getRecords(): ?MapIterator
    {
        $csv = Reader::createFromPath(config('import.filepath'), 'r');
        $csv->setDelimiter(config('import.delimiter'));
        $csv->setHeaderOffset(config('import.headerOffset'));

        return $csv->getRecords();
    }
}
