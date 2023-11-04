<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class GenerateAllFilamentResources extends Command
{
    protected $signature = 'filament:generate-all-resources';
    protected $description = 'Generate Filament resources for all models';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        // Get a list of all your models (assuming they follow a specific naming convention).
        $models = [
            'blog',
            'project',
            'category',
            'service',
            'like',
            'comment',
            'User',
        ];

        foreach ($models as $model) {
            // Generate the Filament resource for each model.
            exec("php artisan make:filament-resource {$model} --generate --view");
        }

        $this->info('Filament resources generated for all models.');
    }
}
