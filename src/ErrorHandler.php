<?php

namespace QuickApi;

class ErrorHandler
{
    public static function handleError(
        int    $errno,
        string $errstr,
        string $errfile,
        int    $errline,
        array  $errcontext
    ): void
    {
        try {
            throw new \ErrorException($errstr);
        } catch (\ErrorException $exception) {
            echo $exception->getMessage();
        }
    }

    public static function handleException(\Throwable $exception): void
    {
        http_response_code(500);

        echo json_encode([
            "code" => $exception->getCode(),
            "message" => $exception->getMessage(),
            "file" => $exception->getFile(),
            "line" => $exception->getLine()
        ]);
    }
}