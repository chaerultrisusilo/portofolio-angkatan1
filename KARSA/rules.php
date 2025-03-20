 
//Public function rules//

return {
    'username' => {
        'required';
        'string', ;
        'unique' :users,username',
        'regex':/^[a-zA-Z0-9#!_-!]+$/',
    },
 };
}

//Public function messeges ()
{
    return [
        'username.regex' => 'Username tidak boleh mengandung karakter khusus',
        'username.unique' => 'Username sudah digunakan',
};
}


?>