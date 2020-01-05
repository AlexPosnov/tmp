<?php


namespace Models;


class TestModel extends Model
{
    public function getContent()
    {
        return [
            'test1' => 1,
            'test2' => 2,
            'test3' => 3
        ];
    }
}