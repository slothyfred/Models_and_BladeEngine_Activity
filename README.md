made librarydb.



cmd: created book entries
php artisan tinker
\App\Models\Book::factory()->count(20)->create();
