<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'NO', 'ID_NUMBER', 'ORDERTYPE', 'REGIONAL_BARU', 'DISTRICT_BARU', 'DATEL_BARU', 'STO',
        'REGIONAL_LAMA', 'DISTRICT_LAMA', 'DATEL_LAMA', 'SCORDERNO', 'PACKAGE_NAME', 'CUSTOMER_NAME',
        'CUSTOMER_ADDRESS', 'NO_HP', 'DATECREATED', 'TGL_MANJA', 'AMCREW', 'CHIEF_NAME', 'STATUS',
        'STATUSDATE', 'ERRORCODE', 'SUBERRORCODE', 'ENGINEERMEMO', 'OWNERGROUP', 'CATATAN_TEKNISI',
        'PRODUCT', 'TERRITORY_TIF', 'DISTRICT_TIF'
    ];
}
