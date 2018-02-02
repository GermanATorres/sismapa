<?php

use App\Models\negocios;
use App\Repositories\negociosRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class negociosRepositoryTest extends TestCase
{
    use MakenegociosTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var negociosRepository
     */
    protected $negociosRepo;

    public function setUp()
    {
        parent::setUp();
        $this->negociosRepo = App::make(negociosRepository::class);
    }

    /**
     * @test create
     */
    public function testCreatenegocios()
    {
        $negocios = $this->fakenegociosData();
        $creatednegocios = $this->negociosRepo->create($negocios);
        $creatednegocios = $creatednegocios->toArray();
        $this->assertArrayHasKey('id', $creatednegocios);
        $this->assertNotNull($creatednegocios['id'], 'Created negocios must have id specified');
        $this->assertNotNull(negocios::find($creatednegocios['id']), 'negocios with given id must be in DB');
        $this->assertModelData($negocios, $creatednegocios);
    }

    /**
     * @test read
     */
    public function testReadnegocios()
    {
        $negocios = $this->makenegocios();
        $dbnegocios = $this->negociosRepo->find($negocios->id);
        $dbnegocios = $dbnegocios->toArray();
        $this->assertModelData($negocios->toArray(), $dbnegocios);
    }

    /**
     * @test update
     */
    public function testUpdatenegocios()
    {
        $negocios = $this->makenegocios();
        $fakenegocios = $this->fakenegociosData();
        $updatednegocios = $this->negociosRepo->update($fakenegocios, $negocios->id);
        $this->assertModelData($fakenegocios, $updatednegocios->toArray());
        $dbnegocios = $this->negociosRepo->find($negocios->id);
        $this->assertModelData($fakenegocios, $dbnegocios->toArray());
    }

    /**
     * @test delete
     */
    public function testDeletenegocios()
    {
        $negocios = $this->makenegocios();
        $resp = $this->negociosRepo->delete($negocios->id);
        $this->assertTrue($resp);
        $this->assertNull(negocios::find($negocios->id), 'negocios should not exist in DB');
    }
}
