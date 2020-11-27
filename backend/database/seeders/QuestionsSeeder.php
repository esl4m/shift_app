<?php

namespace Database\Seeders;

use App\Models\Questions;
use Illuminate\Database\Seeder;

class QuestionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Questions::factory(10)->create();
        $this->addQuestions();
    }

    private function addQuestions()
    {
        Questions::create(array(
            'q_num' => 'Q1',
            'text' => 'You find it takes effort to introduce yourself to other people.', 
            'dimension' => 'EI',
            'direction' => '1',
            'meaning' => 'I',
            'min_rank' => 1,
            'max_rank' => 7,
            'created_at' => now(),
            'updated_at' => now()));
        
        Questions::create(array(
            'q_num' => 'Q2',
            'text' => 'You consider yourself more practical than creative.',  
            'dimension' => 'SN',
            'direction' => '-1',
            'meaning' => 'S',
            'min_rank' => 1,
            'max_rank' => 7,
            'created_at' => now(),
            'updated_at' => now()));
        
        Questions::create(array(
            'q_num' => 'Q3',
            'text' => 'Winning a debate matters less to you than making sure no one gets upset.', 
            'dimension' => 'TF',
            'direction' => '1',
            'meaning' => 'F',
            'min_rank' => 1,
            'max_rank' => 7,
            'created_at' => now(),
            'updated_at' => now()));
            
        Questions::create(array(
            'q_num' => 'Q4',
            'text' => 'You get energized going to social events that involve many interactions.', 
            'dimension' => 'EI',
            'direction' => '-1',
            'meaning' => 'E',
            'min_rank' => 1,
            'max_rank' => 7,
            'created_at' => now(),
            'updated_at' => now()));
        
        Questions::create(array(
            'q_num' => 'Q5',
            'text' => 'You often spend time exploring unrealistic and impractical yet intriguing ideas.', 
            'dimension' => 'SN',
            'direction' => '1',
            'meaning' => 'N',
            'min_rank' => 1,
            'max_rank' => 7,
            'created_at' => now(),
            'updated_at' => now()));
        
        Questions::create(array(
            'q_num' => 'Q6',
            'text' => 'Deadlines seem to you to be of relative rather than absolute importance.', 
            'dimension' => 'JP',
            'direction' => '1',
            'meaning' => 'P',
            'min_rank' => 1,
            'max_rank' => 7,
            'created_at' => now(),
            'updated_at' => now()));
        
        Questions::create(array(
            'q_num' => 'Q7',
            'text' => 'Logic is usually more important than heart when it comes to making important decisions.', 
            'dimension' => 'TF',
            'direction' => '-1',
            'meaning' => 'T',
            'min_rank' => 1,
            'max_rank' => 7,
            'created_at' => now(),
            'updated_at' => now()));
            
        Questions::create(array(
            'q_num' => 'Q8',
            'text' => 'Your home and work environments are quite tidy.', 
            'dimension' => 'JP',
            'direction' => '-1',
            'meaning' => 'J',
            'min_rank' => 1,
            'max_rank' => 7,
            'created_at' => now(),
            'updated_at' => now()));
        
        Questions::create(array(
            'q_num' => 'Q9',
            'text' => 'You do not mind being at the center of attention.', 
            'dimension' => 'EI',
            'direction' => '-1',
            'meaning' => 'E',
            'min_rank' => 1,
            'max_rank' => 7,
            'created_at' => now(),
            'updated_at' => now()));
            
        Questions::create(array(
            'q_num' => 'Q10',
            'text' => 'Keeping your options open is more important than having a to-do list.', 
            'dimension' => 'JP',
            'direction' => '1',
            'meaning' => 'P',
            'min_rank' => 1,
            'max_rank' => 7,
            'created_at' => now(),
            'updated_at' => now()));
    }
}
