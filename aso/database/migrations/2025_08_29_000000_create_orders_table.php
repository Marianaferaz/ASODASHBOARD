<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('NO', 3)->nullable();
            $table->string('ID_NUMBER', 6)->nullable();
            $table->string('ORDERTYPE', 6)->nullable();
            $table->string('REGIONAL_BARU', 1)->nullable();
            $table->string('DISTRICT_BARU', 20)->nullable();
            $table->string('DATEL_BARU', 8)->nullable();
            $table->string('STO', 3)->nullable();
            $table->string('REGIONAL_LAMA', 10)->nullable();
            $table->string('DISTRICT_LAMA', 8)->nullable();
            $table->string('DATEL_LAMA', 8)->nullable();
            $table->string('SCORDERNO', 11)->nullable();
            $table->string('PACKAGE_NAME', 10)->nullable();
            $table->string('CUSTOMER_NAME', 35)->nullable();
            $table->string('CUSTOMER_ADDRESS', 114)->nullable();
            $table->string('NO_HP', 14)->nullable();
            $table->string('DATECREATED', 16)->nullable();
            $table->string('TGL_MANJA', 16)->nullable();
            $table->string('AMCREW', 13)->nullable();
            $table->string('CHIEF_NAME', 44)->nullable();
            $table->string('STATUS', 9)->nullable();
            $table->string('STATUSDATE', 16)->nullable();
            $table->string('ERRORCODE', 17)->nullable();
            $table->string('SUBERRORCODE', 26)->nullable();
            $table->string('ENGINEERMEMO', 139)->nullable();
            $table->string('OWNERGROUP', 25)->nullable();
            $table->string('CATATAN_TEKNISI', 128)->nullable();
            $table->string('PRODUCT', 8)->nullable();
            $table->string('TERRITORY_TIF', 11)->nullable();
            $table->string('DISTRICT_TIF', 10)->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
