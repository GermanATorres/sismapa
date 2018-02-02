<?php

use App\Models\rubros;
use App\Repositories\rubrosRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class rubrosRepositoryTest extends TestCase
{
    use MakerubrosTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var rubrosRepository
     */
    protected $rubrosRepo;

    public function setUp()
    {
        parent::setUp();
        $this->rubrosRepo = App::make(rubrosRepository::class);
    }

    /**
     * @test create
     */
    public function testCreaterubros()
    {
        $rubros = $this->fakerubrosData();
        $createdrubros = $this->rubrosRepo->create($rubros);
        $createdrubros = $createdrubros->toArray();
        $this->assertArrayHasKey('id', $createdrubros);
        $this->assertNotNull($createdrubros['id'], 'Created rubros must have id specified');
        $this->assertNotNull(rubros::find($createdrubros['id']), 'rubros with given id must be in DB');
        $this->assertModelData($rubros, $createdrubros);
    }

    /**
     * @test read
     */
    public function testReadrubros()
    {
        $rubros = $this->makerubros();
        $dbrubros = $this->rubrosRepo->find($rubros->id);
        $dbrubros = $dbrubros->toArray();
        $this->assertModelData($rubros->toArray(), $dbrubros);
    }

    /**
     * @test update
     */
    public function testUpdaterubros()
    {
        $rubros = $this->makerubros();
        $fakerubros = $this->fakerubrosData();
        $updatedrubros = $this->rubrosRepo->update($fakerubros, $rubros->id);
        $this->assertModelData($fakerubros, $updatedrubros->toArray());
        $dbrubros = $this->rubrosRepo->find($rubros->id);
        $this->assertModelData($fakerubros, $dbrubros->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleterubros()
    {
        $rubros = $this->makerubros();
        $resp = $this->rubrosRepo->delete($rubros->id);
        $this->assertTrue($resp);
        $this->assertNull(rubros::find($rubros->id), 'rubros should not exist in DB');
    }
}
