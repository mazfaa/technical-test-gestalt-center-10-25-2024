<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $books = collect([
            ['title' => 'One Piece', 'author' => 'Eiichiro Oda', 'price_rent' => 3000, 'book_category' => 'MANGA'],
            ['title' => 'Naruto', 'author' => 'Masashi Kishimoto', 'price_rent' => 4000, 'book_category' => 'MANGA'],
            ['title' => 'The Great Gatsby', 'author' => 'F. Scott Fitzgerald', 'price_rent' => 12.00, 'book_category' => 'NOVEL'],
            ['title' => 'Harry Potter and the Sorcerer\'s Stone', 'author' => 'J.K. Rowling', 'price_rent' => 14.75, 'book_category' => 'NOVEL'],
            ['title' => 'National Geographic - October Edition', 'author' => 'Various', 'price_rent' => 8.25, 'book_category' => 'MAGAZINE'],
            ['title' => 'TIME Magazine - Special Issue', 'author' => 'Various', 'price_rent' => 9.99, 'book_category' => 'MAGAZINE'],
            ['title' => 'Attack on Titan: Humanity in Chains', 'author' => 'Hajime Isayama', 'price_rent' => 16.50, 'book_category' => 'MANGA'],
            ['title' => 'To Kill a Mockingbird', 'author' => 'Harper Lee', 'price_rent' => 13.99, 'book_category' => 'NOVEL'],
            ['title' => 'Forbes Magazine - Business Innovators Edition', 'author' => 'Various', 'price_rent' => 10.25, 'book_category' => 'MAGAZINE'],
            ['title' => 'Death Note: Black Edition', 'author' => 'Tsugumi Ohba', 'price_rent' => 17.25, 'book_category' => 'MANGA'],
            ['title' => 'Sherlock Holmes: The Complete Collection', 'author' => 'Arthur Conan Doyle', 'price_rent' => 1550, 'book_category' => 'NOVEL'],
            ['title' => 'Dragon Ball Z: Saiyan Saga', 'author' => 'Akira Toriyama', 'price_rent' => 1600, 'book_category' => 'MANGA'],
            ['title' => 'Pride and Prejudice', 'author' => 'Jane Austen', 'price_rent' => 1300, 'book_category' => 'NOVEL'],
            ['title' => 'Vogue Magazine - Fall Fashion Issue', 'author' => 'Various', 'price_rent' => 1050, 'book_category' => 'MAGAZINE'],
            ['title' => 'Bleach: Soul Society Arc', 'author' => 'Tite Kubo', 'price_rent' => 1550, 'book_category' => 'MANGA'],
            ['title' => 'The Hobbit', 'author' => 'J.R.R. Tolkien', 'price_rent' => 1450, 'book_category' => 'NOVEL'],
        ]);

        $books->each(function ($book) {
            Book::create($book);
        });
    }
}
