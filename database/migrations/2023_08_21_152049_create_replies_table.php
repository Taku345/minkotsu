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
        Schema::create('replies', function (Blueprint $table) {
            $table->foreignID('trick_id')->constrained();
            $table->bigIncrements('no');
            $table->foreignID('user_id')->constrained();
            $table->text('body')->nullable(false);
            $table->unsignedInteger('good_count')->nullable(false)->default(0);
            $table->timestamps();

            //Increments属性を含む複合キー追加の手順
            //Increments属性をもつカラムはSQL側で勝手に主キーにされてしまう
            $table->unique('no');
            $table->dropPrimary();
            $table->primary(['trick_id','no']);
        });

        Schema::table('replies', function (Blueprint $table) {
          // $table->bigIncrements('no')->change();
      });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('replies');
    }
};
