<?php

use App\Models\Fast;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fasts', function (Blueprint $table) {
            $table->id();
            $table->string('titleLil');
            $table->string('textLil');
            $table->string('authorLil');
            $table->string('pictureLil');
            $table->timestamps();
        });
    }

    public function destroy($id){
        $delete = Fast::find($id);
        $delete->delete();
        return redirect('/adminog');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fasts');
    }
};
