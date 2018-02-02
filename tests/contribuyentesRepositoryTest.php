<?php

use App\Models\contribuyentes;
use App\Repositories\contribuyentesRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class contribuyentesRepositoryTest extends TestCase
{
    use MakecontribuyentesTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var contribuyentesRepository
     */
    protected $contribuyentesRepo;

    public function setUp()
    {
        parent::setUp();
        $this->contribuyentesRepo = App::make(contribuyentesRepository::class);
    }

    /**
     * @test create
     */
    public function testCreatecontribuyentes()
    {
        $contribuyentes = $this->fakecontribuyentesData();
        $createdcontribuyentes = $this->contribuyentesRepo->create($contribuyentes);
        $createdcontribuyentes = $createdcontribuyentes->toArray();
        $this->assertArrayHasKey('id', $createdcontribuyentes);
        $this->assertNotNull($createdcontribuyentes['id'], 'Created contribuyentes must have id specified');
        $this->assertNotNull(contribuyentes::find($createdcontribuyentes['id']), 'contribuyentes with given id must be in DB');
        $this->assertModelData($contribuyentes, $createdcontribuyentes);
    }

    /**
     * @test read
     */
    public function testReadcontribuyentes()
    {
        $contribuyentes = $this->makecontribuyentes();
        $dbcontribuyentes = $this->contribuyentesRepo->find($contribuyentes->id);
        $dbcontribuyentes = $dbcontribuyentes->toArray();
        $this->assertModelData($contribuyentes->toArray(), $dbcontribuyentes);
    }

    /**
     * @test update
     */
    public function testUpdatecontribuyentes()
    {
        $contribuyentes = $this->makecontribuyentes();
        $fakecontribuyentes = $this->fakecontribuyentesData();
        $updatedcontribuyentes = $this->contribuyentesRepo->update($fakecontribuyentes, $contribuyentes->id);
        $this->assertModelData($fakecontribuyentes, $updatedcontribuyentes->toArray());
        $dbcontribuyentes = $this->contribuyentesRepo->find($contribuyentes->id);
        $this->assertModelData($fakecontribuyentes, $dbcontribuyentes->toArray());
    }

    /**
     * @test delete
     */
    public function testDeletecontribuyentes()
    {
        $contribuyentes = $this->makecontribuyentes();
        $resp = $this->contribuyentesRepo->delete($contribuyentes->id);
        $this->assertTrue($resp);
        $this->assertNull(contribuyentes::find($contribuyentes->id), 'contribuyentes should not exist in DB');
    }
}
