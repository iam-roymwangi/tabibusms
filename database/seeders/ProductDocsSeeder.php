<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductDocsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sms = Product::create([
    'name' => 'SMS',
    'slug' => 'sms',
    'description' => 'Scalable messaging for modern apps.'
]);

$cat = $sms->docCategories()->create([
    'name' => 'Sending Messages',
    'slug' => 'sending-messages',
    'order' => 1
]);

$cat->docPages()->create([
    'title' => 'Send Bulk SMS',
    'slug' => 'send-bulk-sms',
    'http_method' => 'POST',
    'endpoint_url' => '/v1/sms/send',
    'content' => 'Use this endpoint to send messages to multiple recipients...',
    'sample_code' => [
        'javascript' => "const sms = require('tabibu');\nsms.send({ to: '+254...', msg: 'Hello' });",
        'php' => "Http::post('api.tabibu.com/v1/sms/send', [...]);"
    ],
    'order' => 1
]);
    }
}
