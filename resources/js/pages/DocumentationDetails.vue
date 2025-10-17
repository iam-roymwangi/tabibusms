<template>
  <div class="min-h-screen bg-gradient-to-br from-blue-50 to-white">
    <PublicLayout>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-32">
      <div class="grid grid-cols-1 lg:grid-cols-4 gap-8">
        <!-- Sidebar Navigation -->
        <aside class="lg:col-span-1">
          <div class="sticky top-24 bg-white rounded-lg border border-blue-100 p-6 shadow-sm">
            <h3 class="font-bold text-gray-900 mb-4">API Reference</h3>
            <nav class="space-y-2">
              <a href="#" class="block px-3 py-2 bg-blue-50 text-blue-600 rounded-lg font-medium">
                Simple Textual Message
              </a>
              <a href="#" class="block px-3 py-2 text-gray-600 hover:bg-gray-50 rounded-lg transition">
                Scheduled Messages
              </a>
              <a href="#" class="block px-3 py-2 text-gray-600 hover:bg-gray-50 rounded-lg transition">
                Binary Messages
              </a>
              <a href="#" class="block px-3 py-2 text-gray-600 hover:bg-gray-50 rounded-lg transition">
                Flash Messages
              </a>
              <a href="#" class="block px-3 py-2 text-gray-600 hover:bg-gray-50 rounded-lg transition">
                Delivery Reports
              </a>
              <a href="#" class="block px-3 py-2 text-gray-600 hover:bg-gray-50 rounded-lg transition">
                Inbound Messages
              </a>
            </nav>
          </div>
        </aside>

        <!-- Main Content -->
        <main class="lg:col-span-3">
          <!-- Breadcrumb -->
          <div class="flex items-center gap-2 text-sm text-gray-600 mb-6">
            <a href="#" class="text-blue-600 hover:underline">Documentation</a>
            <span>/</span>
            <a href="#" class="text-blue-600 hover:underline">API Reference</a>
            <span>/</span>
            <span class="text-gray-900 font-medium">Simple Textual Message</span>
          </div>

          <!-- Title Section -->
          <div class="mb-8">
            <h1 class="text-4xl font-bold text-gray-900 mb-3">Simple Textual Message</h1>
            <p class="text-lg text-gray-600">Send a simple text message to one or multiple recipients. This is the most common way to send SMS messages through the Tabibu SMS API.</p>
          </div>

          <!-- Quick Info Cards -->
          <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-8">
            <div class="bg-white border border-blue-100 rounded-lg p-4">
              <div class="text-sm text-gray-600 mb-1">HTTP Method</div>
              <div class="text-lg font-bold text-blue-600">POST</div>
            </div>
            <div class="bg-white border border-blue-100 rounded-lg p-4">
              <div class="text-sm text-gray-600 mb-1">Endpoint</div>
              <div class="text-lg font-bold text-blue-600 break-all">/sms/1/text/single</div>
            </div>
            <div class="bg-white border border-blue-100 rounded-lg p-4">
              <div class="text-sm text-gray-600 mb-1">Rate Limit</div>
              <div class="text-lg font-bold text-blue-600">1000 req/min</div>
            </div>
          </div>

          <!-- Request Section -->
          <section class="bg-white rounded-lg border border-blue-100 p-8 mb-8 shadow-sm">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">Request</h2>
            
            <div class="mb-8">
              <h3 class="text-lg font-semibold text-gray-900 mb-4">Headers</h3>
              <div class="bg-gray-50 rounded-lg p-4 overflow-x-auto">
                <pre class="text-sm text-gray-800"><code>Authorization: Bearer YOUR_API_KEY
Content-Type: application/json
Accept: application/json</code></pre>
              </div>
            </div>

            <div class="mb-8">
              <h3 class="text-lg font-semibold text-gray-900 mb-4">Request Body Parameters</h3>
              <div class="overflow-x-auto">
                <table class="w-full text-sm">
                  <thead>
                    <tr class="border-b border-gray-200">
                      <th class="text-left py-3 px-4 font-semibold text-gray-900">Parameter</th>
                      <th class="text-left py-3 px-4 font-semibold text-gray-900">Type</th>
                      <th class="text-left py-3 px-4 font-semibold text-gray-900">Required</th>
                      <th class="text-left py-3 px-4 font-semibold text-gray-900">Description</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="border-b border-gray-100 hover:bg-blue-50 transition">
                      <td class="py-3 px-4 font-mono text-blue-600">to</td>
                      <td class="py-3 px-4 text-gray-600">String</td>
                      <td class="py-3 px-4"><span class="bg-red-100 text-red-700 px-2 py-1 rounded text-xs font-semibold">Yes</span></td>
                      <td class="py-3 px-4 text-gray-600">Recipient phone number in international format (e.g., +254712345678)</td>
                    </tr>
                    <tr class="border-b border-gray-100 hover:bg-blue-50 transition">
                      <td class="py-3 px-4 font-mono text-blue-600">text</td>
                      <td class="py-3 px-4 text-gray-600">String</td>
                      <td class="py-3 px-4"><span class="bg-red-100 text-red-700 px-2 py-1 rounded text-xs font-semibold">Yes</span></td>
                      <td class="py-3 px-4 text-gray-600">The message content (max 160 characters for single SMS)</td>
                    </tr>
                    <tr class="border-b border-gray-100 hover:bg-blue-50 transition">
                      <td class="py-3 px-4 font-mono text-blue-600">from</td>
                      <td class="py-3 px-4 text-gray-600">String</td>
                      <td class="py-3 px-4"><span class="bg-green-100 text-green-700 px-2 py-1 rounded text-xs font-semibold">No</span></td>
                      <td class="py-3 px-4 text-gray-600">Sender ID or phone number (must be registered)</td>
                    </tr>
                    <tr class="border-b border-gray-100 hover:bg-blue-50 transition">
                      <td class="py-3 px-4 font-mono text-blue-600">callbackUrl</td>
                      <td class="py-3 px-4 text-gray-600">String</td>
                      <td class="py-3 px-4"><span class="bg-green-100 text-green-700 px-2 py-1 rounded text-xs font-semibold">No</span></td>
                      <td class="py-3 px-4 text-gray-600">URL to receive delivery reports</td>
                    </tr>
                    <tr class="hover:bg-blue-50 transition">
                      <td class="py-3 px-4 font-mono text-blue-600">validityPeriod</td>
                      <td class="py-3 px-4 text-gray-600">Integer</td>
                      <td class="py-3 px-4"><span class="bg-green-100 text-green-700 px-2 py-1 rounded text-xs font-semibold">No</span></td>
                      <td class="py-3 px-4 text-gray-600">Message validity period in seconds (default: 2880)</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>

            <div>
              <h3 class="text-lg font-semibold text-gray-900 mb-4">Example Request</h3>
              <div class="bg-gray-900 rounded-lg p-4 overflow-x-auto">
                <pre class="text-sm text-gray-100"><code>{`curl -X POST https://api.tabibu.com/sms/1/text/single \\
  -H "Authorization: Bearer YOUR_API_KEY" \\
  -H "Content-Type: application/json" \\
  -d '{
    "to": "+254712345678",
    "text": "Hello! This is a test message from Tabibu SMS.",
    "from": "TABIBU",
    "callbackUrl": "https://yourapp.com/delivery-report"
  }'`}</code></pre>
              </div>
            </div>
          </section>

          <!-- Response Section -->
          <section class="bg-white rounded-lg border border-blue-100 p-8 mb-8 shadow-sm">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">Response</h2>
            
            <div class="mb-8">
              <h3 class="text-lg font-semibold text-gray-900 mb-4">Response Parameters</h3>
              <div class="overflow-x-auto">
                <table class="w-full text-sm">
                  <thead>
                    <tr class="border-b border-gray-200">
                      <th class="text-left py-3 px-4 font-semibold text-gray-900">Parameter</th>
                      <th class="text-left py-3 px-4 font-semibold text-gray-900">Type</th>
                      <th class="text-left py-3 px-4 font-semibold text-gray-900">Description</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="border-b border-gray-100 hover:bg-blue-50 transition">
                      <td class="py-3 px-4 font-mono text-blue-600">bulkId</td>
                      <td class="py-3 px-4 text-gray-600">String</td>
                      <td class="py-3 px-4 text-gray-600">Unique identifier for the bulk request (when sending to multiple recipients)</td>
                    </tr>
                    <tr class="border-b border-gray-100 hover:bg-blue-50 transition">
                      <td class="py-3 px-4 font-mono text-blue-600">messages</td>
                      <td class="py-3 px-4 text-gray-600">Array</td>
                      <td class="py-3 px-4 text-gray-600">Array of message response objects</td>
                    </tr>
                    <tr class="border-b border-gray-100 hover:bg-blue-50 transition">
                      <td class="py-3 px-4 font-mono text-blue-600">messages[].to</td>
                      <td class="py-3 px-4 text-gray-600">String</td>
                      <td class="py-3 px-4 text-gray-600">Recipient phone number</td>
                    </tr>
                    <tr class="border-b border-gray-100 hover:bg-blue-50 transition">
                      <td class="py-3 px-4 font-mono text-blue-600">messages[].messageId</td>
                      <td class="py-3 px-4 text-gray-600">String</td>
                      <td class="py-3 px-4 text-gray-600">Unique identifier for the sent message</td>
                    </tr>
                    <tr class="border-b border-gray-100 hover:bg-blue-50 transition">
                      <td class="py-3 px-4 font-mono text-blue-600">messages[].status</td>
                      <td class="py-3 px-4 text-gray-600">Object</td>
                      <td class="py-3 px-4 text-gray-600">Message status object with groupId, groupName, id, name, description, and action</td>
                    </tr>
                    <tr class="hover:bg-blue-50 transition">
                      <td class="py-3 px-4 font-mono text-blue-600">messages[].smsCount</td>
                      <td class="py-3 px-4 text-gray-600">Integer</td>
                      <td class="py-3 px-4 text-gray-600">Number of SMS segments used</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>

            <div>
              <h3 class="text-lg font-semibold text-gray-900 mb-4">Success Response (200 OK)</h3>
              <div class="bg-gray-900 rounded-lg p-4 overflow-x-auto">
                <pre class="text-sm text-gray-100"><code>{`{
  "bulkId": "507f1f77bcf86cd799439011",
  "messages": [
    {
      "to": "+254712345678",
      "status": {
        "groupId": 1,
        "groupName": "PENDING",
        "id": 7,
        "name": "PENDING_ENROUTE",
        "description": "Message pending - waiting to be sent",
        "action": null
      },
      "messageId": "507f1f77bcf86cd799439012",
      "smsCount": 1
    }
  ]
}`}</code></pre>
              </div>
            </div>
          </section>

          <!-- Code Examples Section -->
          <section class="bg-white rounded-lg border border-blue-100 p-8 mb-8 shadow-sm">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">Code Examples</h2>
            
            <div class="space-y-8">
              <!-- JavaScript Example -->
              <div>
                <h3 class="text-lg font-semibold text-gray-900 mb-3 flex items-center gap-2">
                  <span class="w-6 h-6 bg-yellow-100 rounded flex items-center justify-center text-sm font-bold text-yellow-700">JS</span>
                  JavaScript
                </h3>
                <div class="bg-gray-900 rounded-lg p-4 overflow-x-auto">
                  <pre class="text-sm text-gray-100"><code>{`const axios = require('axios');

const sendSMS = async () => {
  try {
    const response = await axios.post(
      'https://api.tabibu.com/sms/1/text/single',
      {
        to: '+254712345678',
        text: 'Hello from Tabibu SMS!',
        from: 'TABIBU'
      },
      {
        headers: {
          'Authorization': 'Bearer YOUR_API_KEY',
          'Content-Type': 'application/json'
        }
      }
    );
    console.log('Message sent:', response.data);
  } catch (error) {
    console.error('Error:', error.response.data);
  }
};

sendSMS();`}</code></pre>
                </div>
              </div>

              <!-- Python Example -->
              <div>
                <h3 class="text-lg font-semibold text-gray-900 mb-3 flex items-center gap-2">
                  <span class="w-6 h-6 bg-blue-100 rounded flex items-center justify-center text-sm font-bold text-blue-700">PY</span>
                  Python
                </h3>
                <div class="bg-gray-900 rounded-lg p-4 overflow-x-auto">
                  <pre class="text-sm text-gray-100"><code>{`import requests

def send_sms():
    url = 'https://api.tabibu.com/sms/1/text/single'
    headers = {
        'Authorization': 'Bearer YOUR_API_KEY',
        'Content-Type': 'application/json'
    }
    payload = {
        'to': '+254712345678',
        'text': 'Hello from Tabibu SMS!',
        'from': 'TABIBU'
    }
    
    try:
        response = requests.post(url, json=payload, headers=headers)
        print('Message sent:', response.json())
    except requests.exceptions.RequestException as e:
        print('Error:', e)

send_sms()`}</code></pre>
                </div>
              </div>

              <!-- PHP Example -->
              <div>
                <h3 class="text-lg font-semibold text-gray-900 mb-3 flex items-center gap-2">
                  <span class="w-6 h-6 bg-purple-100 rounded flex items-center justify-center text-sm font-bold text-purple-700">PHP</span>
                  PHP
                </h3>
                <div class="bg-gray-900 rounded-lg p-4 overflow-x-auto">
                  <pre class="text-sm text-gray-100"><code v-pre v-text="phpCodeExample"></code></pre>
                </div>
              </div>
            </div>
          </section>

          <!-- Status Codes Section -->
          <section class="bg-white rounded-lg border border-blue-100 p-8 mb-8 shadow-sm">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">HTTP Status Codes</h2>
            <div class="space-y-3">
              <div class="flex items-start gap-4 p-4 bg-green-50 rounded-lg border border-green-200">
                <div class="font-bold text-green-700 min-w-fit">200 OK</div>
                <div class="text-gray-700">Message sent successfully</div>
              </div>
              <div class="flex items-start gap-4 p-4 bg-yellow-50 rounded-lg border border-yellow-200">
                <div class="font-bold text-yellow-700 min-w-fit">400 Bad Request</div>
                <div class="text-gray-700">Invalid request parameters or missing required fields</div>
              </div>
              <div class="flex items-start gap-4 p-4 bg-red-50 rounded-lg border border-red-200">
                <div class="font-bold text-red-700 min-w-fit">401 Unauthorized</div>
                <div class="text-gray-700">Invalid or missing API key</div>
              </div>
              <div class="flex items-start gap-4 p-4 bg-red-50 rounded-lg border border-red-200">
                <div class="font-bold text-red-700 min-w-fit">429 Too Many Requests</div>
                <div class="text-gray-700">Rate limit exceeded</div>
              </div>
              <div class="flex items-start gap-4 p-4 bg-red-50 rounded-lg border border-red-200">
                <div class="font-bold text-red-700 min-w-fit">500 Internal Server Error</div>
                <div class="text-gray-700">Server error - please try again later</div>
              </div>
            </div>
          </section>

          <!-- Use Cases Section -->
          <section class="bg-white rounded-lg border border-blue-100 p-8 mb-8 shadow-sm">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">Common Use Cases</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
              <div class="p-4 bg-blue-50 rounded-lg border border-blue-200">
                <h4 class="font-semibold text-gray-900 mb-2">Appointment Reminders</h4>
                <p class="text-gray-600 text-sm">Send SMS reminders to patients about upcoming appointments</p>
              </div>
              <div class="p-4 bg-blue-50 rounded-lg border border-blue-200">
                <h4 class="font-semibold text-gray-900 mb-2">OTP Verification</h4>
                <p class="text-gray-600 text-sm">Send one-time passwords for two-factor authentication</p>
              </div>
              <div class="p-4 bg-blue-50 rounded-lg border border-blue-200">
                <h4 class="font-semibold text-gray-900 mb-2">Medication Alerts</h4>
                <p class="text-gray-600 text-sm">Notify patients about medication schedules and refills</p>
              </div>
              <div class="p-4 bg-blue-50 rounded-lg border border-blue-200">
                <h4 class="font-semibold text-gray-900 mb-2">Transactional Alerts</h4>
                <p class="text-gray-600 text-sm">Send payment confirmations and transaction updates</p>
              </div>
            </div>
          </section>

          <!-- Related Topics -->
          <section class="bg-white rounded-lg border border-blue-100 p-8 shadow-sm">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">Related Topics</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
              <a href="#" class="p-4 border border-gray-200 rounded-lg hover:border-blue-400 hover:bg-blue-50 transition">
                <div class="font-semibold text-gray-900 mb-1">Scheduled Messages</div>
                <p class="text-sm text-gray-600">Send messages at a specific time in the future</p>
              </a>
              <a href="#" class="p-4 border border-gray-200 rounded-lg hover:border-blue-400 hover:bg-blue-50 transition">
                <div class="font-semibold text-gray-900 mb-1">Delivery Reports</div>
                <p class="text-sm text-gray-600">Track message delivery status and get callbacks</p>
              </a>
              <a href="#" class="p-4 border border-gray-200 rounded-lg hover:border-blue-400 hover:bg-blue-50 transition">
                <div class="font-semibold text-gray-900 mb-1">Inbound Messages</div>
                <p class="text-sm text-gray-600">Receive and process incoming SMS messages</p>
              </a>
              <a href="#" class="p-4 border border-gray-200 rounded-lg hover:border-blue-400 hover:bg-blue-50 transition">
                <div class="font-semibold text-gray-900 mb-1">Error Handling</div>
                <p class="text-sm text-gray-600">Best practices for handling API errors</p>
              </a>
            </div>
          </section>
        </main>
      </div>
    </div>

    </PublicLayout>
  </div>
</template>

<script setup lang="ts">
import PublicLayout from '@/layouts/PublicLayout.vue';

/* eslint-disable-next-line @typescript-eslint/no-unused-vars */
const phpCodeExample = `<?php
$url = 'https://api.tabibu.com/sms/1/text/single';
$apiKey = 'YOUR_API_KEY';

$data = [
    'to' => '+254712345678',
    'text' => 'Hello from Tabibu SMS!',
    'from' => 'TABIBU'
];

$options = [
    'http' => [
        'header' => "Authorization: Bearer $apiKey\\r\\n" .
                   "Content-Type: application/json\\r\\n",
        'method' => 'POST',
        'content' => json_encode($data)
    ]
];

$context = stream_context_create($options);
$response = file_get_contents($url, false, $context);
echo json_decode($response, true);
?>`;
</script>

<style scoped>
/* Smooth transitions */
a {
  transition: all 0.3s ease;
}

/* Code block styling */
pre {
  font-family: 'Monaco', 'Menlo', 'Ubuntu Mono', monospace;
  line-height: 1.5;
}

/* Table hover effects */
table tbody tr {
  transition: background-color 0.2s ease;
}
</style>
