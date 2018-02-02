<?php

use Faker\Factory as Faker;
use App\Models\rubros;
use App\Repositories\rubrosRepository;

trait MakerubrosTrait
{
    /**
     * Create fake instance of rubros and save it in database
     *
     * @param array $rubrosFields
     * @return rubros
     */
    public function makerubros($rubrosFields = [])
    {
        /** @var rubrosRepository $rubrosRepo */
        $rubrosRepo = App::make(rubrosRepository::class);
        $theme = $this->fakerubrosData($rubrosFields);
        return $rubrosRepo->create($theme);
    }

    /**
     * Get fake instance of rubros
     *
     * @param array $rubrosFields
     * @return rubros
     */
    public function fakerubros($rubrosFields = [])
    {
        return new rubros($this->fakerubrosData($rubrosFields));
    }

    /**
     * Get fake data of rubros
     *
     * @param array $postFields
     * @return array
     */
    public function fakerubrosData($rubrosFields = [])
    {
        $fake = Faker::create();

        return array_merge([
            'nombre' => $fake->word,
            'porcentaje' => $fake->randomDigitNotNull,
            'estado' => $fake->randomDigitNotNull,
            'icon' => $fake->word,
            'created_at' => $fake->word,
            'updated_at' => $fake->word
        ], $rubrosFields);
    }
}
