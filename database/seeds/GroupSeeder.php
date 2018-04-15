<?php

use Illuminate\Database\Seeder;

use App\Group;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Group::create([
            'name' => 'Skating',
            'info' => 'This group offers skateboards',
            'conditions' => 'Return the skateboard we gave you in the condition you received it.',
            'contacts' => 'Call us on (phone).'
        ]);
    }
}
