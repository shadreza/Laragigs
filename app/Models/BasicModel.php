<?php

namespace App\Models;

class BasicModel {
    public static function getAllListings() {
        return [
            [
                'id' => 1,
                'title' => 'listOne',
                'description' => 'this is list one and this is of the best'
            ],
            [
                'id' => 2,
                'title' => 'listTwo',
                'description' => 'this is list two and this is of the best'
            ],
            [
                'id' => 3,
                'title' => 'listThree',
                'description' => 'this is list three and this is of the best'
            ]
        ];
    }

    public static function getListById($id) {
        $listings = self::getAllListings();

        foreach ($listings as $listing) {
            if ($listing['id'] == $id) {
                return $listing;
            }
        }

        return null;
    }
}
