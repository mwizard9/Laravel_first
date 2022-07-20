<?php



use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEducationinfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('educationinfos', function (Blueprint $table) {
            $table->BigIncrement('id');
            $table->unsignedBigInteger('student_id');
            $table->string('institution_name',255);
            $table->string('passed_year',4);
           
            $table->string('symbol_number',15);
            $table->string('board',10);
            $table->string('cgpa_per',5);
            $table->timestamps();
            $table->foreign('student_id')->refrences('id')->on('students')->onDelete('CASCADE');


            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('educationinfos');
    }
}
