<?php

namespace App\Console\Commands;

use App\Models\Position;
use App\Models\Profile;
use App\Models\Worker;
use Illuminate\Console\Command;

class DevCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:dev-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Some description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //
        //$this->prepareData();
//        $profile = Profile::first();
//
//        $worker = Worker::find($profile->worker_id);
//
//        dd($worker->toArray());

        $worker = Worker::find(1);
        $position = Position::find(1);

        dd($position->workers->toArray());

    }

    private function prepareData()
    {
        $positionData1 = [
            'title' => 'Programmer'
        ];
        $positionData2 = [
            'title' => 'Manager'
        ];

        $position1 = Position::create($positionData1);
        $position2 = Position::create($positionData2);


        $workerData1 = [
            'name' => 'Alex',
            'surname' => 'Alexov',
            'email' => 'fsfd@fsd.ru',
            'age' => 36,
            'description' => 'Some',
            'is_married' => true,
            'position_id' => $position1->id,
        ];
        $workerData2 = [
            'name' => 'Nikola',
            'surname' => 'Tesla',
            'email' => 'fsfd@fsd.ru',
            'age' => 55,
            'description' => 'Some des',
            'is_married' => false,
            'position_id' => $position2->id,
        ];
        $workerData3 = [
            'name' => 'Kate',
            'surname' => 'Kras',
            'email' => 'fsfd@fsd.ru',
            'age' => 18,
            'description' => 'Some des',
            'is_married' => false,
            'position_id' => $position1->id,
        ];

        $worker1 = Worker::create($workerData1);
        $worker2 = Worker::create($workerData2);
        $worker3 = Worker::create($workerData3);

        $profileData1 = [
            'worker_id' => $worker1->id,
            'city' => 'Tokio',
            'skill' => 'Coder',
            'experience' => 5,
            'finished_study_at' => '2020-06-01',

        ];
        $profileData2 = [
            'worker_id' => $worker2->id,
            'city' => 'Rio',
            'skill' => 'Boss',
            'experience' => 10,
            'finished_study_at' => '2014-06-01',

        ];
        $profileData3 = [
            'worker_id' => $worker3->id,
            'city' => 'Oslo',
            'skill' => 'Frontend',
            'experience' => 1,
            'finished_study_at' => '2018-06-01',

        ];

        $profile1 = Profile::create($profileData1);
        $profile2 = Profile::create($profileData2);
        $profile3 = Profile::create($profileData3);

        //dd($profile);
    }
}
