
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('enrollments', function (Blueprint $table) {
            $table->string('prodi', 120)->nullable();
            $table->string('metode', 20)->nullable();
            $table->string('peserta', 30)->nullable();
            $table->string('minat', 30)->nullable();
            $table->text('catatan')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('enrollments', function (Blueprint $table) {
            $table->dropColumn([
                'prodi',
                'metode',
                'peserta',
                'minat',
                'catatan'
            ]);
        });
    }
};
