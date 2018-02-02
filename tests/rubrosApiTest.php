<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class rubrosApiTest extends TestCase
{
    use MakerubrosTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreaterubros()
    {
        $rubros = $this->fakerubrosData();
        $this->json('POST', '/api/v1/rubros', $rubros);

        $this->assertApiResponse($rubros);
    }

    /**
     * @test
     */
    public function testReadrubros()
    {
        $rubros = $this->makerubros();
        $this->json('GET', '/api/v1/rubros/'.$rubros->id);

        $this->assertApiResponse($rubros->toArray());
    }

    /**
     * @test
     */
    public function testUpdaterubros()
    {
        $rubros = $this->makerubros();
        $editedrubros = $this->fakerubrosData();

        $this->json('PUT', '/api/v1/rubros/'.$rubros->id, $editedrubros);

        $this->assertApiResponse($editedrubros);
    }

    /**
     * @test
     */
    public function testDeleterubros()
    {
        $rubros = $this->makerubros();
        $this->json('DELETE', '/api/v1/rubros/'.$rubros->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/rubros/'.$rubros->id);

        $this->assertResponseStatus(404);
    }
}
