<?php

namespace Tests\Feature;

use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductControllerTest extends TestCase
{
    public function test_json_structure_api_product_index(): void
    {
        $response = $this->get('/api/shop/products');

        $response->assertStatus(200);

        $response->assertJsonStructure([
            'data' => [
                '*' => [
                    'id',
                    'name',
                    'price',
                    'price_in_time',
                    'quantity',
                    'on_sale',
                    'saleable',
                    'images',
                    'ingredients',
                ]
            ]
        ]);
    }

    public function test_json_structure_api_product_search(): void
    {
        $response = $this->get('/api/shop/products');

        $response->assertStatus(200);

        $response->assertJsonStructure([
            'data' => [
                '*' => [
                    'id',
                    'name',
                    'price',
                    'price_in_time',
                    'quantity',
                    'on_sale',
                    'saleable',
                    'images',
                    'ingredients',
                ]
            ]
        ]);
    }

    public function test_json_structure_api_product_show(): void
    {
        $model_id = Product::first()?->id;

        if (!$model_id) {
            $this->markTestSkipped('No products in database.');
        }

        $response = $this->get('/api/shop/products/'.$model_id);

        $response->assertStatus(200);

        $response->assertJsonStructure([
            'data' => [
                'id',
                'name',
                'price',
                'price_in_time',
                'quantity',
                'on_sale',
                'saleable',
                'images',
                'ingredients',
            ]
        ]);
    }
}
