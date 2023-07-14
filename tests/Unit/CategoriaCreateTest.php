<?php

namespace Tests\Unit;
use App\Models\Categoria;
use Mockery;
use PHPUnit\Framework\TestCase;

class CategoriaCreateTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_create_categoria(): void
    {
        $expectedResult = true;
        $categoriaMock = Mockery::mock(Categoria::class);

        $categoriaMock->shouldReceive('create')->once()->with([
            'Nome' => 'categoria x',
            
        ])->andReturn($expectedResult);
            
        $result = $categoriaMock->create([
            'Nome' => 'categoria x',
        ]);
        
        $this->assertEquals($expectedResult, $result);
        
        Mockery::close();
    }
}
