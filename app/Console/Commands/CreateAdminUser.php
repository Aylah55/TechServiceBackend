<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class CreateAdminUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:admin';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create admin user for TechService';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // Supprimer l'utilisateur de test existant s'il existe
        User::where('email', 'test@example.com')->delete();
        
        // Supprimer l'ancien utilisateur admin s'il existe
        User::where('email', 'admin@techservice.com')->delete();
        
        // Créer l'utilisateur admin avec le nouvel email
        $admin = User::create([
            'name' => 'Administrateur TechService',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin123'),
            'role' => 'admin',
            'company_name' => 'TechService',
            'phone' => '0123456789',
            'address' => '123 Rue de la Tech',
            'is_vendor_approved' => true,
        ]);

        $this->info('Utilisateur admin créé avec succès !');
        $this->info('Email: admin@gmail.com');
        $this->info('Mot de passe: admin123');
        
        return Command::SUCCESS;
    }
}
