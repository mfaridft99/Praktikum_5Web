<?php

namespace App\Controllers;

use App\Models\DeviceModel as ModelsDevice;

class Device extends BaseController
{
    public function index(){
        $model = new ModelsDevice();
        $data['sample']=$model->data();
        return view('halamandevice', $data);
    }

        
}