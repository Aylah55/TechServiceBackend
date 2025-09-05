<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;

class ListUsers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'list:users';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Liste tous les utilisateurs';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $users = User::all(['id', 'name', 'email', 'role']);
        
        $this->info('Utilisateurs dans la base de données :');
        $this->table(
            ['ID', 'Nom', 'Email', 'Rôle'],
            $users->map(function($user) {
                return [$user->id, $user->name, $user->email, $user->role];
            })
        );
        
        return Command::SUCCESS;
    }
}
