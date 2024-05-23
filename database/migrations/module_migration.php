<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Modules\migrations;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        if(count(migrations::migrations)>0){
            foreach (migrations::migrations as $migration) {
                
            }
        }
    }

};
