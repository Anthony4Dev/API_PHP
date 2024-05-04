<?php

class Response
{
    public static function json($status = 200, $message = 'sucess', $data = null)
    {
        header('Content-Type: application/json');
        return json_encode(['status' => $status, 'message' => $message, 'data' => $data]);
    }
}