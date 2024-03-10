<?php

namespace App\Console\Commands\Users;

use App\Models\User;
use Illuminate\Console\Command;

class CreateCommand extends Command
{
    protected $signature = 'create:user';

    protected $description = 'Create user in database';

    public function handle(): int
    {
        $email = $this->ask('Enter user`s email');

        $existingUser = User::where('email', '=', $email)
            ->first();

        if ($existingUser) {
            $this->error("User with email [{$email}] already exists");
            return Command::FAILURE;
        }

        $name = $this->ask('Enter user`s name');

        $password = $this->secret('Enter user`s password (min: 8 characters)');

        $user = User::create([
            'name' => $name,
            'email' => $email,
            'password' => $password,
        ]);

        $this->info("User created successfully");

        $this->info("User identifier is [{$user->getKey()}]");

        return Command::SUCCESS;
    }
}
