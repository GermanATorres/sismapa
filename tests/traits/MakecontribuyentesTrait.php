<?php

use Faker\Factory as Faker;
use App\Models\contribuyentes;
use App\Repositories\contribuyentesRepository;

trait MakecontribuyentesTrait
{
    /**
     * Create fake instance of contribuyentes and save it in database
     *
     * @param array $contribuyentesFields
     * @return contribuyentes
     */
    public function makecontribuyentes($contribuyentesFields = [])
    {
        /** @var contribuyentesRepository $contribuyentesRepo */
        $contribuyentesRepo = App::make(contribuyentesRepository::class);
        $theme = $this->fakecontribuyentesData($contribuyentesFields);
        return $contribuyentesRepo->create($theme);
    }

    /**
     * Get fake instance of contribuyentes
     *
     * @param array $contribuyentesFields
     * @return contribuyentes
     */
    public function fakecontribuyentes($contribuyentesFields = [])
    {
        return new contribuyentes($this->fakecontribuyentesData($contribuyentesFields));
    }

    /**
     * Get fake data of contribuyentes
     *
     * @param array $postFields
     * @return array
     */
    public function fakecontribuyentesData($contribuyentesFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'nombre' => $fake->word,
            'dui' => $fake->word,
            'nit' => $fake->word,
            'nacimiento' => $fake->word,
            'telefono' => $fake->word,
            'genero' => $fake->randomDigitNotNull,
            'direccion' => $fake->word,
            'estado' => $fake->word,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $contribuyentesFields);
    }
}
