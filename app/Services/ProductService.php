<?php

namespace App\Services;

use App\Models\Products;

class ProductService
{

    public function getAnimalType() {
        return Products::select('animal_type')
            ->where('shop',1)
            ->where('animal_type', '!=', '')
            ->groupBy('animal_type')
            ->get();
    }

    public function getByAnimalType($animal_type) {
        return Products::where('shop',1)
            ->where('animal_type', $animal_type)
            ->get();
    }
}