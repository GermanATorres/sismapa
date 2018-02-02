<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class negociosApiTest extends TestCase
{
    use MakenegociosTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreatenegocios()
    {
        $negocios = $this->fakenegociosData();
        $this->json('POST', '/api/v1/negocios', $negocios);

        $this->assertApiResponse($negocios);
    }

    /**
     * @test
     */
    public function testReadnegocios()
    {
        $negocios = $this->makenegocios();
        $this->json('GET', '/api/v1/negocios/'.$negocios->id);

        $this->assertApiResponse($negocios->toArray());
    }

    /**
     * @test
     */
    public function testUpdatenegocios()
    {
        $negocios = $this->makenegocios();
        $editednegocios = $this->fakenegociosData();

        $this->json('PUT', '/api/v1/negocios/'.$negocios->id, $editednegocios);

        $this->assertApiResponse($editednegocios);
    }

    /**
     * @test
     */
    public function testDeletenegocios()
    {
        $negocios = $this->makenegocios();
        $this->json('DELETE', '/api/v1/negocios/'.$negocios->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/negocios/'.$negocios->id);

        $this->assertResponseStatus(404);
    }
}
