<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use DB;
use App\Models\JobType;
use App\Models\Job;
use App\Models\User;

class OldDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::beginTransaction();
    
        DB::table('job_types')->truncate();
        DB::table('jobs')->truncate();
        DB::table('users')->truncate();


        //OLD DATA EXTRACTED FROM OLD CORE PHP DATABASE GIVEN

        $job_types =['full time','part time' ];

        $users=[
            [ 'test', 'user', '226', 'testuser@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'A'],
            [ 'demo', 'user', '225', 'demouser@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'A'],
            [ 'test', 'user', '162', 'test2user@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'A']
        ];

        $jobs=[


            ['1', 'Senior Web Developer', '2', '50', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'php, laravel, HTML, CSS', '2023-01-15 03:07:29','N'],

            ['1', 'Wordpress Developer', '1', '30', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'php, Wordpress', '2023-01-15 03:07:32','N'],

            ['2', '.NET Developer', '2', '60', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '.NET', '2023-01-15 03:07:37','N'],

            ['3', 'Front end Developer', '1', '30', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'HTML, CSS, Bootstrap', '2023-01-15 03:07:40','Y']

        ];


      


        foreach($job_types as $job_type){

            $job_type_create       = new JobType();
            $job_type_create->name = $job_type;
            $job_type_create->save();
    
        }

      
        foreach($users as $user){

            $first_name                 =  $user[0];
            $second_name                =  $user[1];
            $full_name                  =   "$first_name $second_name";
            $country_id                 =  $user[2];
            $email                      =  $user[3];
            $password                   =  $user[4];
            $status                     =  $user[5];

            $user_create               = new User();
            $user_create->email        = $email;
            $user_create->first_name   = $first_name;
            $user_create->last_name    = $second_name;
            $user_create->name         = $full_name;
            $user_create->country_id   = $country_id;
            $user_create->password     = $password;
            $user_create->status       = $status;
            $user_create->save();
        }

        foreach($jobs as $job){

            $user_id                    =  $job[0];
            $title                      =  $job[1];
            $job_type_id                =  $job[2];
            $rate                       =  $job[3];
            $description                =  $job[4];
            $tags                       =  $job[5];
            $created_at                 =  $job[6];
            $deleted_at                 =  ($job[7] == 'Y') ? date('Y-m-d') : null;

            $job_create                = new Job();
            $job_create->user_id       =  $user_id;
            $job_create->title         =  $title;
            $job_create->job_type_id   =  $job_type_id;
            $job_create->rate          =  $rate;
            $job_create->description   =  $description;
            $job_create->tags          =  $tags;
            $job_create->created_at    =  $created_at;
            $job_create->deleted_at    =  $deleted_at;
            $job_create->save();
          
        }




        DB::commit();



       

           
        
    }
}
