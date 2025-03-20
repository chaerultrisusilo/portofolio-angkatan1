class Book extends Model
{
use SoftDeletes; //Tambahkan trait SoftDeletes

protected $filllabel = ['title', 'author_id'];
protected $dates = ['deleted_at']; //Field untuk menyimpan kapan data dihapus
}

public function up()
{
Schema::table('books', function (Blueprint $table) {
$table->softDeletes(); //Menambahkan field deleted_at
});
}

public function destory($id)
{
$book=Book::...findorFail($id);
$book->delete(); //Menghapus data dengan menggunakan metode delete

return redirect()->route('books.index')->with('success', Buku berhasil dihapus(soft delete)");
}