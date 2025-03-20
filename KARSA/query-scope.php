class Book extends model 
{
    public function scopeSearch($query,$term)
    {
        return $query->where('title','like','%'.$term.'%')
        ->orWhereHas('author',function($q)use($term){
            $q->where('name','like','%'.$term.'%');
        });
    }
}

select * from book where title like '%A%' or author_id in (select id from author where name like '%A')

public function author()
{
    return $this->belongsTo('App\Author');
}
}