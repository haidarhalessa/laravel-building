<?php

namespace Structure\Project\Models;

use Illuminate\Database\Eloquent\Model;
use Sushi\Sushi;

class FloorTitle extends Model
{
    use Sushi;

    protected array $rows = [
        ['id' => 1, 'title' => 'Ground Floor', 'slug' => 'ground-floor', 'abbr' => 'GF', 'order_column' => 1],
        ['id' => 2, 'title' => 'First Floor', 'slug' => 'first-floor', 'abbr' => 'FF', 'order_column' => 2],
        ['id' => 3, 'title' => 'Second Floor', 'slug' => 'second-floor', 'abbr' => 'SF', 'order_column' => 3],
        ['id' => 4, 'title' => 'Third Floor', 'slug' => 'third-floor', 'abbr' => 'TF', 'order_column' => 4],
        ['id' => 5, 'title' => 'Fourth Floor', 'slug' => 'fourth-floor', 'abbr' => '4F', 'order_column' => 5],
        ['id' => 6, 'title' => 'Fifth Floor', 'slug' => 'fifth-floor', 'abbr' => '5F', 'order_column' => 6],
        ['id' => 7, 'title' => 'Sixth Floor', 'slug' => 'sixth-floor', 'abbr' => '6F', 'order_column' => 7],
        ['id' => 8, 'title' => 'Seventh Floor', 'slug' => 'seventh-floor', 'abbr' => '7F', 'order_column' => 8],
        ['id' => 9, 'title' => 'Roof Deck', 'slug' => 'roof-deck', 'abbr' => 'RD', 'order_column' => 9],
    ];

    public static function findBySlug(string $slug): FloorTitle
    {
        return FloorTitle::where('slug', $slug)->firstOrFail();
    }

    public static function groundFloor(): FloorTitle
    {
        return FloorTitle::where('title', 'Ground Floor')->first();
    }

    public static function firstFloor(): FloorTitle
    {
        return FloorTitle::where('title', 'First Floor')->first();
    }

    public static function secondFloor(): FloorTitle
    {
        return FloorTitle::where('title', 'Second Floor')->first();
    }

    public static function thirdFloor(): FloorTitle
    {
        return FloorTitle::where('title', 'Third Floor')->first();
    }

    public static function fourthFloor(): FloorTitle
    {
        return FloorTitle::where('title', 'Fourth Floor')->first();
    }

    public static function fifthFloor(): FloorTitle
    {
        return FloorTitle::where('title', 'Fifth Floor')->first();
    }

    public static function sixthFloor(): FloorTitle
    {
        return FloorTitle::where('title', 'Sixth Floor')->first();
    }

    public static function seventhFloor(): FloorTitle
    {
        return FloorTitle::where('title', 'Seventh Floor')->first();
    }

    public static function roofDeck(): FloorTitle
    {
        return FloorTitle::where('title', 'Roof Deck')->first();
    }
}
