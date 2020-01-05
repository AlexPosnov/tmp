<?php


namespace Handlers;


class ValidationHandler
{
    public static function formDataValidation($data)
    {
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);

        return $data;
    }

    public static function formDataArrayValidation(array $data)
    {
        foreach ($data as &$item) {
            $item = trim($data);
            $item = stripcslashes($data);
            $item = htmlspecialchars($data);
        }
        unset($item);

        return $data;
    }
}