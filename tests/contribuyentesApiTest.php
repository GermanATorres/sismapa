<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class contribuyentesApiTest extends TestCase
{
    use MakecontribuyentesTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreatecontribuyentes()
    {
        $contribuyentes = $this->fakecontribuyentesData();
        $this->json('POST', '/api/v1/contribuyentes', $contribuyentes);

        $this->assertApiResponse($contribuyentes);
    }

    /**
     * @test
     */
    public function testReadcontribuyentes()
    {
        $contribuyentes = $this->makecontribuyentes();
        $this->json('GET', '/api/v1/contribuyentes/'.$contribuyentes->id);

        $this->assertApiResponse($contribuyentes->toArray());
    }

    /**
     * @test
     */
    public function testUpdatecontribuyentes()
    {
        $contribuyentes = $this->makecontribuyentes();
        $editedcontribuyentes = $this->fakecontribuyentesData();

        $this->json('PUT', '/api/v1/contribuyentes/'.$contribuyentes->id, $editedcontribuyentes);

        $this->assertApiResponse($editedcontribuyentes);
    }

    /**
     * @test
     */
    public function testDeletecontribuyentes()
    {
        $contribuyentes = $this->makecontribuyentes();
        $this->json('DELETE', '/api/v1/contribuyentes/'.$contribuyentes->id);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/contribuyentes/'.$contribuyentes->id);

        $this->assertResponseStatus(404);
    }
}
