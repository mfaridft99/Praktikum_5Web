<?php

namespace App\Models;

use CodeIgniter\Model;

class DeviceModel extends Model {
    private static $sample = [
        [
            "id" => 1,
            "device_name" => "Laptop",
            "device_brand" => "Asus",
            "device_quantity" => 8,
            "device_status" => 1
        ],
        [
            "id" => 2,
            "device_name" => "Kulkas",
            "device_brand" => "Polytron",
            "device_quantity" => 1,
            "device_status" => 0
        ],
        [
            "id" => 3,
            "device_name" => "Air Conditioner",
            "device_brand" => "Sharp",
            "device_quantity" => 4,
            "device_status" => 1
        ],
        [
            "id" => 4,
            "device_name" => "Water Dispenser",
            "device_brand" => "Samsung",
            "device_quantity" => 3,
            "device_status" => 1
        ],
        
    ];
    public function data()
    {
        return self::$sample;
    }
}