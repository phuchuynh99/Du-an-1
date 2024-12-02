<?php

use Firebase\JWT\Key;
use Firebase\JWT\JWTExceptionWithPayloadInterface;
use Firebase\JWT\ExpiredException;
use Firebase\JWT\SignatureInvalidException;
use Firebase\JWT\BeforeValidException;
use Firebase\JWT\JWT;

class Token
{
    private static $secretKey = 'passsecret';
    public static function create_token($id, $email)
    {
        $payload = [
            'user_id' => $id,
            'email' => $email,
            'exp' => time() + (10 * 60) // 10 minutes
        ];

        $token = JWT::encode($payload, self::$secretKey, 'HS256');
        return $token;
    }
    public static function verify_token($token)
    {
        try {
            $decoded = JWT::decode($token, new Key(self::$secretKey, 'HS256'));
            return $decoded;
        } catch (Exception $e) {
            echo 'Invalid token: ' . $e->getMessage();
        }
    }
}