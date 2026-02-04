<?php

use GuzzleHttp\Client;
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
        Schema::table('Users',function (Blueprint $table){
          
            $table->enum('role',['Admin','Client']);
        });
    }
    
    public function down(): void
    {
        schema::dropIfExists('Users');
    }
};
