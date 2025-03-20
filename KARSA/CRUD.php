public function update(Request $request, $id)
{
    $validdateData = $request->validate([
    'title' => 'required | string | max:255',
    'author_id' => required | exists:authors,id'
    ]);

    $book = Book::...($id);//cari buku berdasarkan ID, jika tidak ada, return 404
    $book->...($...);//Perbarui data buku dengan data yang tervalidasi
    
    return...()->...('books.index')->with('success', 'Buku berhasil diperbaharui');
}