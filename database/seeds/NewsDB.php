<?php
use App\News;
use Illuminate\Database\Seeder;

class NewsDB extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0 ; $i<10 ; $i++) {

        	$add = new News;
        	$add->title = 'new title'.rand(0,9); 
        	$add->add_by = 1;
        	$add->desc = 'new desc'.rand(0,9);
        	$add->content = 'new content'.rand(0,9);
        	$add->status = 'active';
        	$add->save();


        }
    }
}
