<?php

namespace App\Helpers;

use Firebase\JWT\JWT;
use Exception;
use Firebase\JWT\Key;

class JWTToken
{

    public static function CreateToken($UserEmail, $UserID)
    {
        $key = env('JWT_KEY');
        $payload = [
            'iss' => 'laravel_token',
            'iat' => time(),
            'exp' => time() + 60 * 60,
            'userEmail' => $UserEmail,
            'userID' => $UserID
        ];
        return JWT::encode($payload, $key, 'HS256');
    }

    public static function ReadToken($token): string|object
    {
        try {
            if ($token == null) {
                return 'unauthorized';
            } else {
                $key = env('JWT_KEY');
                return JWT::decode($token, new Key($key, 'HS256'));
            }
        } catch (Exception $e) {
            return 'unauthorized';
        }
    }
}
