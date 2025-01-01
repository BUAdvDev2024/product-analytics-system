<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;

class CreateUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'CreateUser';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Creates a Admin user if one does not already exist';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $adminUser = User::where('email', 'admin@southpizzas.com')->first();

        if ($adminUser) {
            $this->info('Admin user already exists.');
        } else {
            User::create([
                'name' => 'Admin User',
                'email' => 'admin@southpizzas.com',
                'password' => bcrypt('SecurePassword123'), // Set a default password
            ]);

            $this->info('Admin user created successfully.');
        }
    }
}
