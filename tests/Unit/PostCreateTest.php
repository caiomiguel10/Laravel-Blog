<?php

namespace Tests\Unit;
use Mockery;
use App\Models\Post;
use PHPUnit\Framework\TestCase;

class PostCreateTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_create_post(): void
    {

        $expectedResult = true;
        $postMock = Mockery::mock(Post::class);

        $postMock->shouldReceive('create')->once()->with([
            'titulo' => 'Título do post',
            'conteudo' => 'Conteúdo do post',
            'categoria_id' => 1,
            'user_id' => 1,
        ])->andReturn($expectedResult);
            
        $result = $postMock->create([
            'titulo' => 'Título do post',
            'conteudo' => 'Conteúdo do post',
            'categoria_id' => 1,
            'user_id' => 1,
        ]);
        
        $this->assertEquals($expectedResult, $result);
        
        Mockery::close();
    }
    
}
