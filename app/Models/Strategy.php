<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Strategy extends Model {

    public function investments() {

        return $this->morphMany('App\Models\Investments', 'investment');
    }
}