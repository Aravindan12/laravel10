<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Base\Traits\Uuid\UuidModel;

class Admin extends Model
{
    use HasFactory, UuidModel;

    protected $table = "admin";
}
