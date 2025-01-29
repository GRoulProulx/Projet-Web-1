<?php

namespace App\Models;

use App\Models\CRUD;

class Stamp extends CRUD {
    protected $table = "timbre";
    protected $primaryKey = "id";
    protected $fillable = [ 'nom','date','couleur','`condition`','tirage','dimension','certification', 'pays_id'];
}
