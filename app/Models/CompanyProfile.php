<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyProfile extends Model
{
    protected $table = 'company_excellences';
    protected $fillable = [
        'name', 'description',
        'address', 'phone', 'email', 'website_logo_url'
    ];
}
