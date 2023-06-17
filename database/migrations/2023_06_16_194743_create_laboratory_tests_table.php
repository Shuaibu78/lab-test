<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaboratoryTestsTable extends Migration
{
    public function up()
    {
        Schema::create('laboratory_tests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->boolean('chest')->default(false);
            $table->boolean('cervical_vertebrae')->default(false);
            $table->boolean('lumbar_vertebrae')->default(false);
            $table->boolean('thoracic_vertebrae')->default(false);
            $table->boolean('lumbo_sacral_vertebrae')->default(false);
            $table->boolean('thoracic_lumbar_vertebrae')->default(false);
            $table->boolean('wrist_joint')->default(false);
            $table->boolean('thoracic_inlet')->default(false);
            $table->boolean('shoulder_joint')->default(false);
            $table->boolean('elbow_joint')->default(false);
            $table->boolean('knee_joint')->default(false);
            $table->boolean('sacro_iliac_joint')->default(false);
            $table->boolean('pelvic_joint')->default(false);
            $table->boolean('hip_joint')->default(false);
            $table->boolean('foot')->default(false);
            $table->boolean('toes')->default(false);
            $table->boolean('fingers')->default(false);
            $table->boolean('humerus')->default(false);
            $table->boolean('tibia_fibula')->default(false);
            $table->boolean('femoral')->default(false);
            $table->boolean('ankle')->default(false);
            $table->boolean('radius_ulner')->default(false);
            $table->boolean('obstetric')->default(false);
            $table->boolean('abdominal')->default(false);
            $table->boolean('breast')->default(false);
            $table->boolean('pelvis')->default(false);
            $table->boolean('prostate')->default(false);
            $table->boolean('thyroid')->default(false);
            $table->string('ct_scan')->nullable();
            $table->string('mri')->nullable();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('laboratory_tests');
    }
}
