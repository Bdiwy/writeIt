<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Support\Facades\Schema;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic test example.
     */
    protected function setUp(): void
    {
        parent::setUp();

        echo "✅ Database migrated\n";
    }
    public function test_database_is_configured_correctly()
    {
        $this->assertTrue(Schema::hasTable('migrations')); // يتأكد إن القاعدة موجودة
    }
    

    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    public function test_user_settings_table_has_expected_columns()
    {
        $this->assertTrue(Schema::hasTable('user_settings'), 'Table user_settings does not exist.');

        $columns = Schema::getColumnListing('user_settings');

        $expected = [
            'id',
            'user_id',
            'avatar',
            'status',
            'interests',
            'gender',
            'bio',
            'created_at',
            'updated_at',
        ];

        foreach ($expected as $column) {
            $this->assertContains($column, $columns, "Missing column: $column");
        }
    }

}
