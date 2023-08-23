<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        \App\Models\MeasurementUnit::create([
            'name' => 'Grammi',
            'abbreviation' => 'g'
        ]);

        \App\Models\MeasurementUnit::create([
            'name' => 'Chilogrammi',
            'abbreviation' => 'kg'
        ]);

        \App\Models\MeasurementUnit::create([
            'name' => 'Litri',
            'abbreviation' => 'l'
        ]);

        \App\Models\MeasurementUnit::create([
            'name' => 'Centilitri',
            'abbreviation' => 'cl'
        ]);

        \App\Models\MeasurementUnit::create([
            'name' => 'Millilitri',
            'abbreviation' => 'ml'
        ]);

        \App\Models\MeasurementUnit::create([
            'name' => 'Pezzi',
            'abbreviation' => 'pz'
        ]);

        \App\Models\MeasurementUnit::create([
            'name' => 'Cucchiaio',
            'abbreviation' => 'cucchiaio'
        ]);

        \App\Models\MeasurementUnit::create([
            'name' => 'Cucchiaino',
            'abbreviation' => 'cucchiaino'
        ]);

        \App\Models\MeasurementUnit::create([
            'name' => 'Tazza',
            'abbreviation' => 'tazza'
        ]);

        \App\Models\MeasurementUnit::create([
            'name' => 'Quanto basta',
            'abbreviation' => 'q.b.'
        ]);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        \App\Models\MeasurementUnit::whereRaw('1=1')->delete();
    }
};
