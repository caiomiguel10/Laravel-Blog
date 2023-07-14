<?php




namespace App\Repositories;

use Illuminate\Support\Facades\Mail;
use App\Mail\PostCreate;
use App\Models\User;
use App\Http\Requests\PostRequest;
use App\Models\Post;
use Illuminate\Support\Facades\DB;
class PostRepository
{

public function add(PostRequest $request):Post
{

    return DB::transaction(function () use($request,){
                
        $imagemPath = $request->hasFile ('imagem')
        ? $request->file('imagem')->store('post_iamgem','public')
        :null;
        $request->imagemPath = $imagemPath;
        
        $posts = Post::create([
            'titulo'=> $request->titulo,
            'conteudo'=> $request->conteudo,
            'imagem'=> $request->imagemPath,
             'categoria_id' => $request->categoria_id,
             'user_id' => $request->user_id

        ]);


        // $users = User::all();
        // foreach ($users as $index => $user) {

        //     $email = new PostCreate(

        //         $request->titulo,
        //         $request->conteudo,
        //         $request->imagem,
        //         $request->categoria_id,
        //         $request->user_id,
        //         $posts
        //     );

        //     $when = now()->addSeconds($index * 5);
        //     Mail::to($user)->later($when, $email);              
            
        // }
        

        return $posts;

    },5);

}


}

