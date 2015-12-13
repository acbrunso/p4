<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HostingPlan extends Model
{
  
  public function user() {
        # Author has many Books
        # Define a one-to-many relationship.
        return $this->hasMany('\App\User');
    }

}
