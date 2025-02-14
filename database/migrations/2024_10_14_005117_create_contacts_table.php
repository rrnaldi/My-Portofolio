<?php

use App\Models\contact;
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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('key');
            $table->string('label');
            $table->string('value')->nullable();
            $table->string('type');
            $table->timestamps();
        });

        contact::create([
            'key' => '_WA',
            'label' => 'Nomor Whatsapp',
            'value' => '088213351902',
            'type' => 'text',
        ]);

        contact::create([
            'key' => '_email',
            'label' => 'Email',
            'value' => 'renaldi240402@gmail.com',
            'type' => 'text',
        ]);

        contact::create([
            'key' => '_instagram',
            'label' => 'Instagram',
            'value' => 'https://instagram.com/rnaldi24',
            'type' => 'text',
        ]);

        contact::create([
            'key' => '_linkedin',
            'label' => 'LinkedIn',
            'value' => 'www.linkedin.com/in/renaldi-bba92014a',
            'type' => 'text',
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contacts');
    }
};
