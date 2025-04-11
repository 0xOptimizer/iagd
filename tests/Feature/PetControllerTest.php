<?php

namespace Tests\Feature;

use App\Models\Pets;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class PetControllerTest extends TestCase
{
    use RefreshDatabase, WithoutMiddleware;


    /**
     * Test create pet validation
     * @return $this
     * @test
     * @dataProvider invalidFieldsProvider
     *
     */
    public function create_pet_validate_request($field, $invalidValue)
    {

        $data = Pets::factory()->make()->toArray();

        $data[$field] = $invalidValue;

        $response = $this->postJson('/rest/v1/pets/create', $data);

        $response->assertStatus(422);
        $response->assertJson([
            'status' => 'warning',
            'message' => $response['message']
        ]);
    }

    public function create_pet_multiple_upload() {
        
    }
    /**
     * Test delete id not present
     * @return $this
     * @test
     */
    public function delete_pet_requires_id()
    {
        $response = $this->json('DELETE', '/rest/v1/pets/delete'); // Assuming this is your endpoint

        $response->assertStatus(422)
            ->assertJson([
                'status' => 'warning',
                'message' => 'ID not found.'
            ]);
    }


    /**
     * Test delete if pet not found
     * @return $this
     * @test
     */
    public function delete_pet_returns_error_when_pet_not_found()
    {
        $response = $this->json('DELETE', '/rest/v1/pets/delete?id=1');

        $response->assertStatus(404)
            ->assertJson([
                'status' => 'warning',
                'message' => 'Pet not found.'
            ]);
    }

    /**
     * Test delete if success
     * @return $this
     * @test
     */
    public function delete_pet_deletes_a_pet_successfully()
    {
        // First, create a pet
        $pet = Pets::factory()->create();

        // Now, attempt to delete it
        $response = $this->json('DELETE', '/rest/v1/pets/delete', [
            'id' => $pet->id
        ]);

        $response->assertStatus(200)
            ->assertJson([
                'status' => 'success',
                'message' => 'Pet deleted.'
            ]);

        // Check if the pet has actually been deleted
        $this->assertDatabaseMissing('pets', ['id' => $pet->id]);
    }


    /**
     * Invalid pet filed provider
     * @return array
     */
    public static function invalidFieldsProvider()
    {
        return [
            ['pet_name', ''], // required
            ['pet_type', ''], // invalid enum
            // ['stars', 10], // out of range
            // ['owner_uuid', 'not-a-uuid'], // uuid format
            // ['date_of_birth', 'not-a-date'], // invalid date
            // ['colors_body', null], // required if it's set that way
            // add more invalid cases here...
        ];
    }
}
