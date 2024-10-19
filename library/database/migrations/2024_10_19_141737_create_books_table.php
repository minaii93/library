<?php

use App\Models\Book;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id('book_id'); 
            $table->string('title');
            $table->string('author');
            $table->integer('pieces')->default(100); //alapértelmezés
            $table->timestamps();
        });

        Book::create([
            'title' => 'Virágot Aragonnak',
             'author' => 'Daniel Keyes',
              'pieces'=> '20',
              ]);
        
              Book::create([
                'title' => 'Máté Gábor',
                 'author' => 'Szétszórt elmék',
                  'pieces'=> '20',
                  ]);

                  

              
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
