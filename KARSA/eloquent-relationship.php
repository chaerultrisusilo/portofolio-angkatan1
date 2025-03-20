class Author extends Model
{
public function books()
{
return $this->hasMany(Book::class);// Relasi one-to-many dengan model books
}
}

class Book extends Model
{
public function author()
{
return $this->belongsTo(Author::class);// Relasi one-to-many dengan model author
}
}

public function show ($id)
{
$author = Author::with('books')->findOrFail($id);//Cari author dengan buku-bukunya
return view('author.show', compact('author'));
}