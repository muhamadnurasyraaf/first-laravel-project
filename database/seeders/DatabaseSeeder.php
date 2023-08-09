<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       // \App\Models\User::factory(10)->create();
        User::factory(5)->create();
        //User::create([
        //    'name' => 'Muhamad Nur Asyraaf',
        //    'email' => 'masyraaf14@gmail.com',
        //    'password' => bcrypt('asyraaf123')
        //]);
//
        //User::create([
        //    'name' => 'Noor Raihan',
        //    'email' => 'noorraihan12@gmail.com',
        //    'password' => bcrypt('raihan123')
        //]);
//
        /*Category::create([
            'name' => 'Web Programming',
        ]);
//
        Category::create([
            'name' => 'Gaming',
        ]);
//
        Category::create([
            'name' => 'Personal'
        ]);*/

        Post::factory(5)->create();
//
        //Post::create([
        //    'title' => 'First Title',
        //    'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel rem harum ex facilis autem sint enim culpa, excepturi unde eos omnis vitae maxime odio amet saepe error fuga architecto quis, ullam pariatur.',
        //    'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel rem harum ex facilis autem sint enim culpa, excepturi unde eos omnis vitae maxime odio amet saepe error fuga architecto quis, ullam pariatur. 
        //    Quia neque porro consequatur modi, fuga quas iste est enim at error sed nam autem amet rerum ipsum optio, laborum pariatur voluptatibus maiores. Dicta ea dolorem doloremque magnam assumenda mollitia aliquid, qui unde voluptatum nemo nisi et 
        //    exercitationem nihil veritatis reiciendis harum quisquam inventore repellat maxime minima sapiente voluptatem hic voluptates illum! Sequi vel, fuga temporibus delectus facilis obcaecati libero! Facilis quia quo molestiae maxime, quasi ea recusandae.',
        //    'category_id' => 1,
        //    'user_id' => 1
        //]);
//
        //Post::create([
        //    'title' => 'Second Title',
        //    'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel rem harum ex facilis autem sint enim culpa, excepturi unde eos omnis vitae maxime odio amet saepe error fuga architecto quis, ullam pariatur.',
        //    'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel rem harum ex facilis autem sint enim culpa, excepturi unde eos omnis vitae maxime odio amet saepe error fuga architecto quis, ullam pariatur. 
        //    Quia neque porro consequatur modi, fuga quas iste est enim at error sed nam autem amet rerum ipsum optio, laborum pariatur voluptatibus maiores. Dicta ea dolorem doloremque magnam assumenda mollitia aliquid, qui unde voluptatum nemo nisi et 
        //    exercitationem nihil veritatis reiciendis harum quisquam inventore repellat maxime minima sapiente voluptatem hic voluptates illum! Sequi vel, fuga temporibus delectus facilis obcaecati libero! Facilis quia quo molestiae maxime, quasi ea recusandae.',
        //    'category_id' => 1,
        //    'user_id' => 1
        //]);
        //Post::create([
        //    'title' => 'Third Title',
        //    'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel rem harum ex facilis autem sint enim culpa, excepturi unde eos omnis vitae maxime odio amet saepe error fuga architecto quis, ullam pariatur.',
        //    'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel rem harum ex facilis autem sint enim culpa, excepturi unde eos omnis vitae maxime odio amet saepe error fuga architecto quis, ullam pariatur. 
        //    Quia neque porro consequatur modi, fuga quas iste est enim at error sed nam autem amet rerum ipsum optio, laborum pariatur voluptatibus maiores. Dicta ea dolorem doloremque magnam assumenda mollitia aliquid, qui unde voluptatum nemo nisi et 
        //    exercitationem nihil veritatis reiciendis harum quisquam inventore repellat maxime minima sapiente voluptatem hic voluptates illum! Sequi vel, fuga temporibus delectus facilis obcaecati libero! Facilis quia quo molestiae maxime, quasi ea recusandae.',
        //    'category_id' => 2,
        //    'user_id' => 1
        //]);
        //Post::create([
        //    'title' => 'Fourth Title',
        //    'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel rem harum ex facilis autem sint enim culpa, excepturi unde eos omnis vitae maxime odio amet saepe error fuga architecto quis, ullam pariatur.',
        //    'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel rem harum ex facilis autem sint enim culpa, excepturi unde eos omnis vitae maxime odio amet saepe error fuga architecto quis, ullam pariatur. 
        //    Quia neque porro consequatur modi, fuga quas iste est enim at error sed nam autem amet rerum ipsum optio, laborum pariatur voluptatibus maiores. Dicta ea dolorem doloremque magnam assumenda mollitia aliquid, qui unde voluptatum nemo nisi et 
        //    exercitationem nihil veritatis reiciendis harum quisquam inventore repellat maxime minima sapiente voluptatem hic voluptates illum! Sequi vel, fuga temporibus delectus facilis obcaecati libero! Facilis quia quo molestiae maxime, quasi ea recusandae.',
        //    'category_id' => 2,
        //    'user_id' => 2
        //]);
        //Post::create([
        //    'title' => 'Fifth Title',
        //    'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel rem harum ex facilis autem sint enim culpa, excepturi unde eos omnis vitae maxime odio amet saepe error fuga architecto quis, ullam pariatur.',
        //    'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel rem harum ex facilis autem sint enim culpa, excepturi unde eos omnis vitae maxime odio amet saepe error fuga architecto quis, ullam pariatur. 
        //    Quia neque porro consequatur modi, fuga quas iste est enim at error sed nam autem amet rerum ipsum optio, laborum pariatur voluptatibus maiores. Dicta ea dolorem doloremque magnam assumenda mollitia aliquid, qui unde voluptatum nemo nisi et 
        //    exercitationem nihil veritatis reiciendis harum quisquam inventore repellat maxime minima sapiente voluptatem hic voluptates illum! Sequi vel, fuga temporibus delectus facilis obcaecati libero! Facilis quia quo molestiae maxime, quasi ea recusandae.',
        //    'category_id' => 3,
        //    'user_id' => 2
        //]);
    }
}
