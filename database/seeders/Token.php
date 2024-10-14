<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Token extends Seeder
{
    public function run()
    {
        // Generate 404 tokens
        for ($i = 0; $i < 404; $i++) {
            DB::table('users')->insert([
                'token' => $this->generateToken(), // Menggunakan fungsi generateToken untuk membuat token
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }


    private function generateToken($length = 8)
    {
        // Characters available for token
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $token = '';

        // Create token with random characters
        for ($i = 0; $i < $length; $i++) {
            $token .= $characters[rand(0, $charactersLength - 1)];
        }

        return $token;
    }
}
