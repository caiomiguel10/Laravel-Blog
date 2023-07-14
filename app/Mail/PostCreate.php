<?php

namespace App\Mail;

use App\Models\Post;


use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class PostCreate extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct(
        public string $titulo,
        public string $conteudo,
        public string $imagem,
        public int $categoria_id,
        public int $user_id,
        public Post $post,
    )
    {
        $this->subject = "Post $titulo Criado";
    }


    public function build()
    {
        return $this->markdown('mail.index');
    }
}
