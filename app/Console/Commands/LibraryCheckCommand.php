<?php

namespace App\Console\Commands;

use App\Http\Controllers\Controller;
use Illuminate\Console\Command;

class LibraryCheckCommand extends Command
{
    protected $signature = 'library:check {page}';
    protected $description = 'Check which libraries are called, concatenated, and should be called on a specific page.';

    // public function handle()
    // {
    //     $page = $this->argument('page');
    //     // Your logic to check libraries for the specified page
    //     $this->info("Libraries for page '{$page}': jquery, bootstrap");
    // }
    public function handle()
    {
        $page = $this->argument('page');
        $controllerPath = app_path('Http/Controllers/Login/' . $page . '.php');
    
        if (!file_exists($controllerPath)) {
            $this->error("Controller '{$page}' not found.");
            return;
        }
    
        $controllerContent = file_get_contents($controllerPath);
    
        // Match library imports
        preg_match_all('/use\s+(.*);/', $controllerContent, $matches);
        $librariesUsed = implode(", ", $matches[1]);
    
        // Match concatenations
        preg_match_all('/(\$[a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]\s\.=\s*.*)/', $controllerContent, $matches);
        $concatenations = implode(", ", $matches[1]);
    
        // Check for errors
        preg_match('/\/\/\sERROR:\s(.*)/', $controllerContent, $matches);
        $error = isset($matches[1]) ? $matches[1] : null;
    
        $this->table(['Libraries Used', 'Concatenations', 'Error'], [[$librariesUsed, $concatenations, $error]]);
    }
}