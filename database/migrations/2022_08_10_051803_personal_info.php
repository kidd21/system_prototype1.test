<?php

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
        //creating table for personal information
        Schema::create('personal_infos', function (Blueprint $table) 
        {
            $table->id();
            $table->string('last_name');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('sex');
            $table->string('contact_number');
            $table->string('religion');
            $table->string('email');
            $table->string('cell_number');
            $table->integer('age');
            $table->date('date_of_birth');
            $table->string('place_of_birth');
            $table->string('nationality');
            $table->string('permanent_add');
            $table->timestamps();
        });

        //creating table for family back ground
        Schema::create('family_bgs', function (Blueprint $table)
        {
            $table->foreignId('personal_info_id');
            $table->string('name_father');
            $table->string('name_mother');
            $table->integer('age_father');
            $table->integer('age_mother');
            $table->string('educational_attain_father');
            $table->string('educational_attain_mother');
            $table->string('school_attended_father');
            $table->string('school_attended_mother');
            $table->string('occupation_father');
            $table->string('occupation_mother');
            $table->string('company_add_father');
            $table->string('company_add_mother');
            $table->string('contact_number_father');
            $table->string('contact_number_mother');
            $table->string('marital_status');
            $table->timestamps();
        });

        //creating table for siblings
        Schema::create('siblings', function (Blueprint $table){
            $table->foreignId('personal_info_id');
            $table->string('name_sibling');
            $table->integer('age');
            $table->string('educational_attain');
            $table->string('school_attended');
            $table->string('occupation');
            $table->timestamps();
        });

        //creating table for health and physical development
        Schema::create('health_physical_devs', function (Blueprint $table){
            $table->foreignId('personal_info_id');
            $table->string('height');
            $table->string('weight');
            $table->string('sight');
            $table->string('hearing');
            $table->string('speech');
            $table->string('general_health');
            $table->string('question_a1');
            $table->string('question_a2')->nullable();
            $table->string('question_b1');
            $table->string('question_b2')->nullable();
            $table->timestamps();
        });

        //creating table for Residence
        Schema::create('residences', function (Blueprint $table) {
            $table->foreignId('personal_info_id');
            $table->integer('family_home');
            $table->integer('guardians_home');
            $table->string('school_dormitory');
            $table->string('others_a');
            $table->integer('public_transport');
            $table->integer('family_vehicle');
            $table->integer('car-pool');
            $table->integer('services');
            $table->string('others_b');
            $table->string('question_a');
            $table->timestamps();
        });

        //creating table for educational background
        Schema::create('educational_bg_as', function (Blueprint $table){
            $table->foreignId('personal_info_id');
            $table->string('school_last_attended');
            $table->string('public/private');
            $table->string('school_address');
            $table->string('coed/exclusive');
            $table->string('honors/awards_received');
            $table->string('sectarian/non-sect');
        //
            $table->string('subject_like_best');
            $table->string('subject_like_least');
            $table->string('subject_find_difficult');
            $table->string('subject_learned_most');
            $table->string('subject_learned_least');
            $table->string('subject_taught_best');
            $table->string('subject_taught_worst');
        });
        //creating another table for eduaction background
        Schema::create('educational_bg_bs', function (Blueprint $table){
            $table->foreignId('personal_info_id');
            $table->string('grade_level');
            $table->string('section');
            $table->string('scholarship_status');
            $table->string('academic_status');
        });

        //creating database for social profile
        Schema::create('social_profiles', function (Blueprint $table){
            $table->foreignId('personal_info_id');
            $table->integer('friends_same_age');
            $table->integer('friends_older');
            $table->integer('friends_younger');
            $table->integer('friends_boys');
            $table->integer('friends_girls');
            $table->integer('friend_other_school');
            $table->integer('from_this_school');
            $table->longText('list_friends');
            $table->longText('list_talents_hobbies'); 
            $table->timestamps();
        });

        //creating table for students self-assessment
        Schema::create('students_self_assessments', function (Blueprint $table){
            $table->foreignId('personal_info_id');
            $table->integer('physical_well_being');
            $table->integer('mental_comprehension');
            $table->integer('speech_english');
            $table->integer('speech_filipino');
            $table->integer('written_communication_skills');
            $table->integer('personality');
            $table->longText('general_make_up');
            $table->string('statement_1');
            $table->string('statement_2');
            $table->string('statement_3');
            $table->string('statement_4');
            $table->string('statement_5');
            $table->string('statement_6');
            $table->string('statement_7');
            $table->string('statement_8');
            $table->string('statement_9');
            $table->string('statement_10');
            $table->timestamp();  
        });
        //creating table for extra curricular activities
        Schema::create('extra_curricular_acts', function (Blueprint $table){
            $table->foreignId('personal_info_id');
            //add grade foreignkey
            $table->string('position');
            $table->string('org/club');
            $table->string('activity');
            $table->string('extent_activity');
            $table->string('nature_evolvement');
            $table->timestamp();
        });

        //creating table for vacational planning
        // Schema::create('vocational_planning', function (Blueprint $table){
        //     $table->foreignId('');
        // });

        //creating table for psychological test profile
        Schema::create('psychological_test_profiles', function (Blueprint $table){
            
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personal_infos');
        Schema::dropIfExists('family_bgs');
        Schema::dropIfExists('siblings');
        Schema::dropIfExists('health_physical_devs');
        Schema::drapIfExists('social_profiles');
    }
};
