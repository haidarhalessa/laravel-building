<?php

namespace Structure\Project\Models;

use Illuminate\Database\Eloquent\Model;
use Sushi\Sushi;

class UnitTitle extends Model
{
    use Sushi;

    protected $rows = [
        ['id' => 1, 'title' => 'Villa', 'type' => 'residential'],
        ['id' => 2, 'title' => 'House', 'type' => 'residential'],
        ['id' => 3, 'title' => 'Flat', 'type' => 'residential'],
    ];

    public static function villa(): UnitTitle
    {
        return UnitTitle::where('title', 'Villa')->first();
    }

    public static function house(): UnitTitle
    {
        return UnitTitle::where('title', 'House')->first();
    }

    public static function flat(): UnitTitle
    {
        return UnitTitle::where('title', 'flat')->first();
    }
}
