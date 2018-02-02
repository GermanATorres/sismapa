<?php

use Faker\Factory as Faker;
use App\Models\negocios;
use App\Repositories\negociosRepository;

trait MakenegociosTrait
{
    /**
     * Create fake instance of negocios and save it in database
     *
     * @param array $negociosFields
     * @return negocios
     */
    public function makenegocios($negociosFields = [])
    {
        /** @var negociosRepository $negociosRepo */
        $negociosRepo = App::make(negociosRepository::class);
        $theme = $this->fakenegociosData($negociosFields);
        return $negociosRepo->create($theme);
    }

    /**
     * Get fake instance of negocios
     *
     * @param array $negociosFields
     * @return negocios
     */
    public function fakenegocios($negociosFields = [])
    {
        return new negocios($this->fakenegociosData($negociosFields));
    }

    /**
     * Get fake data of negocios
     *
     * @param array $postFields
     * @return array
     */
    public function fakenegociosData($negociosFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'contribuyente_id' => $fake->randomDigitNotNull,
            'rubro_id' => $fake->randomDigitNotNull,
            'nombre' => $fake->word,
            'direccion' => $fake->text,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $negociosFields);
    }
}
