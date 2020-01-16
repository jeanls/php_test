<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Incident extends Model
{
    protected $fillable = ['title', 'description', 'criticality', 'type', 'status'];
}
