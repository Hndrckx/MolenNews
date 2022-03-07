<?php

use App\Models\Article;
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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('titleOg');
            $table->string('textOg');
            $table->string('authorOg');
            $table->string('pictureOg');
            $table->timestamps();
        });
    }

    public function destroy($id){
        $delete = Article::find($id);
        $delete->delete();
        return redirect('/adminlil');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articles');
    }
};
