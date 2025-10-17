<template>
  <div class="min-h-screen bg-gradient-to-b from-blue-50 to-white">
    <PublicLayout>

    <!-- Hero Section -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-24">
      <div class="text-center mb-12">
        <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">API Documentation</h1>
        <p class="text-xl text-gray-600 max-w-2xl mx-auto">
          Integrate Tabibu SMS into your application with our comprehensive API documentation. Send, receive, and manage SMS messages with ease.
        </p>
      </div>

      <!-- Quick Links -->
      <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
        <div class="bg-white rounded-lg border border-blue-100 p-6 hover:shadow-lg transition">
          <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
            </svg>
          </div>
          <h3 class="text-lg font-semibold text-gray-900 mb-2">Quick Start</h3>
          <p class="text-gray-600 mb-4">Get up and running in minutes with our quick start guide.</p>
          <a href="#getting-started" class="text-blue-600 hover:text-blue-700 font-medium">Learn more →</a>
        </div>

        <div class="bg-white rounded-lg border border-blue-100 p-6 hover:shadow-lg transition">
          <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path>
            </svg>
          </div>
          <h3 class="text-lg font-semibold text-gray-900 mb-2">API Reference</h3>
          <p class="text-gray-600 mb-4">Complete reference for all API endpoints and parameters.</p>
          <a href="#api-reference" class="text-blue-600 hover:text-blue-700 font-medium">Explore →</a>
        </div>

        <div class="bg-white rounded-lg border border-blue-100 p-6 hover:shadow-lg transition">
          <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4m0 0l-4 4m4-4H3"></path>
            </svg>
          </div>
          <h3 class="text-lg font-semibold text-gray-900 mb-2">Code Examples</h3>
          <p class="text-gray-600 mb-4">Ready-to-use code examples in multiple languages.</p>
          <a href="#code-examples" class="text-blue-600 hover:text-blue-700 font-medium">View examples →</a>
        </div>
      </div>
    </section>

    <!-- Getting Started Section -->
    <section id="getting-started" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
      <h2 class="text-3xl font-bold text-gray-900 mb-8">Getting Started</h2>
      <div class="bg-white rounded-lg border border-blue-100 p-8">
        <div class="space-y-6">
          <div>
            <h3 class="text-lg font-semibold text-gray-900 mb-2">1. Authentication</h3>
            <p class="text-gray-600 mb-4">All API requests require authentication using your API key. Include it in the Authorization header:</p>
            <div class="bg-gray-900 rounded-lg p-4 overflow-x-auto">
              <code class="text-green-400 font-mono text-sm">Authorization: Bearer YOUR_API_KEY</code>
            </div>
          </div>

          <div>
            <h3 class="text-lg font-semibold text-gray-900 mb-2">2. Base URL</h3>
            <p class="text-gray-600 mb-4">All API endpoints are accessible at:</p>
            <div class="bg-gray-900 rounded-lg p-4 overflow-x-auto">
              <code class="text-green-400 font-mono text-sm">https://api.tabibu.com/v1</code>
            </div>
          </div>

          <div>
            <h3 class="text-lg font-semibold text-gray-900 mb-2">3. Response Format</h3>
            <p class="text-gray-600 mb-4">All responses are returned in JSON format with appropriate HTTP status codes.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Send SMS Section -->
    <section id="send-sms" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
      <h2 class="text-3xl font-bold text-gray-900 mb-8">Send SMS</h2>
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <div>
          <h3 class="text-xl font-semibold text-gray-900 mb-4">Simple Text Message</h3>
          <p class="text-gray-600 mb-4">Send a basic SMS message to a single recipient or multiple recipients.</p>
          <ul class="space-y-2 text-gray-600">
            <li class="flex items-start gap-2">
              <span class="text-blue-600 mt-1">✓</span>
              <span>Send to single or multiple recipients</span>
            </li>
            <li class="flex items-start gap-2">
              <span class="text-blue-600 mt-1">✓</span>
              <span>Support for long messages (concatenation)</span>
            </li>
            <li class="flex items-start gap-2">
              <span class="text-blue-600 mt-1">✓</span>
              <span>Delivery status tracking</span>
            </li>
            <li class="flex items-start gap-2">
              <span class="text-blue-600 mt-1">✓</span>
              <span>Scheduled message delivery</span>
            </li>
          </ul>
        </div>
        <div class="bg-gray-900 rounded-lg p-6 overflow-x-auto">
          <code class="text-green-400 font-mono text-sm">
            <pre>{{ smsExample }}</pre>
          </code>
        </div>
      </div>
    </section>

    <!-- Receive SMS Section -->
    <section id="receive-sms" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
      <h2 class="text-3xl font-bold text-gray-900 mb-8">Receive SMS</h2>
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <div class="bg-gray-900 rounded-lg p-6 overflow-x-auto">
          <code class="text-green-400 font-mono text-sm">
            <pre>{{ receiveExample }}</pre>
          </code>
        </div>
        <div>
          <h3 class="text-xl font-semibold text-gray-900 mb-4">Receive Incoming Messages</h3>
          <p class="text-gray-600 mb-4">Receive SMS messages sent to your Tabibu SMS number using two methods:</p>
          <div class="space-y-4">
            <div class="border-l-4 border-blue-600 pl-4">
              <h4 class="font-semibold text-gray-900 mb-1">Pull Method</h4>
              <p class="text-gray-600 text-sm">Periodically poll the API to retrieve new messages.</p>
            </div>
            <div class="border-l-4 border-blue-600 pl-4">
              <h4 class="font-semibold text-gray-900 mb-1">Forward Method</h4>
              <p class="text-gray-600 text-sm">Receive messages via webhook callbacks in real-time.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- API Reference Section -->
    <section id="api-reference" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
      <h2 class="text-3xl font-bold text-gray-900 mb-8">API Reference</h2>
      <div class="space-y-4">
        <div v-for="endpoint in endpoints" :key="endpoint.id" class="bg-white rounded-lg border border-blue-100 p-6 hover:shadow-lg transition">
          <div class="flex items-start justify-between mb-4">
            <div>
              <h3 class="text-lg font-semibold text-gray-900">{{ endpoint.name }}</h3>
              <p class="text-gray-600 text-sm mt-1">{{ endpoint.description }}</p>
            </div>
            <span :class="['px-3 py-1 rounded-full text-sm font-medium', endpoint.method === 'POST' ? 'bg-green-100 text-green-700' : 'bg-blue-100 text-blue-700']">
              {{ endpoint.method }}
            </span>
          </div>
          <div class="bg-gray-50 rounded p-3 font-mono text-sm text-gray-700 overflow-x-auto">
            {{ endpoint.endpoint }}
          </div>
        </div>
      </div>
    </section>

    <!-- Code Examples Section -->
    <section id="code-examples" class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
      <h2 class="text-3xl font-bold text-gray-900 mb-8">Code Examples</h2>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <div>
          <h3 class="text-lg font-semibold text-gray-900 mb-4">JavaScript/Node.js</h3>
          <div class="bg-gray-900 rounded-lg p-6 overflow-x-auto">
            <code class="text-green-400 font-mono text-sm">
              <pre>{{ jsExample }}</pre>
            </code>
          </div>
        </div>
        <div>
          <h3 class="text-lg font-semibold text-gray-900 mb-4">Python</h3>
          <div class="bg-gray-900 rounded-lg p-6 overflow-x-auto">
            <code class="text-green-400 font-mono text-sm">
              <pre>{{ pythonExample }}</pre>
            </code>
          </div>
        </div>
      </div>
    </section>

    <!-- Error Codes Section -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
      <h2 class="text-3xl font-bold text-gray-900 mb-8">Response Status & Error Codes</h2>
      <div class="bg-white rounded-lg border border-blue-100 overflow-hidden">
        <table class="w-full">
          <thead class="bg-blue-50 border-b border-blue-100">
            <tr>
              <th class="px-6 py-3 text-left text-sm font-semibold text-gray-900">Status Code</th>
              <th class="px-6 py-3 text-left text-sm font-semibold text-gray-900">Description</th>
            </tr>
          </thead>
          <tbody class="divide-y divide-blue-100">
            <tr v-for="status in statusCodes" :key="status.code" class="hover:bg-blue-50 transition">
              <td class="px-6 py-3 text-sm font-mono text-gray-900">{{ status.code }}</td>
              <td class="px-6 py-3 text-sm text-gray-600">{{ status.description }}</td>
            </tr>
          </tbody>
        </table>
      </div>
    </section>

    <!-- CTA Section -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
      <div class="bg-gradient-to-r from-blue-600 to-blue-700 rounded-lg p-12 text-center">
        <h2 class="text-3xl font-bold text-white mb-4">Ready to Get Started?</h2>
        <p class="text-blue-100 mb-8 max-w-2xl mx-auto">
          Start integrating Tabibu SMS into your application today. Get your API key and begin sending messages in minutes.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
          <button class="bg-white text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-blue-50 transition">
            Get API Key
          </button>
          <button class="border-2 border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-blue-600 transition">
            Contact Support
          </button>
        </div>
      </div>
    </section>

    </PublicLayout>
  </div>
</template>

<script setup lang="ts">
import PublicLayout from '@/layouts/PublicLayout.vue';

const smsExample = `POST /v1/messages/send
Content-Type: application/json
Authorization: Bearer YOUR_API_KEY

{
  "recipients": ["+254712345678"],
  "message": "Hello! Your appointment is confirmed.",
  "senderId": "TABIBU"
}`;

const receiveExample = `GET /v1/messages/receive
Authorization: Bearer YOUR_API_KEY

Response:
{
  "messages": [
    {
      "id": "msg_123",
      "from": "+254712345678",
      "message": "Confirm appointment",
      "timestamp": "2024-01-15T10:30:00Z"
    }
  ]
}`;

const jsExample = `const tabibu = require('tabibu-sms');

const client = new tabibu.Client({
  apiKey: 'YOUR_API_KEY'
});

await client.messages.send({
  recipients: ['+254712345678'],
  message: 'Hello from Tabibu!',
  senderId: 'TABIBU'
});`;

const pythonExample = `import tabibu

client = tabibu.Client(
    api_key='YOUR_API_KEY'
)

client.messages.send(
    recipients=['+254712345678'],
    message='Hello from Tabibu!',
    sender_id='TABIBU'
)`;

const endpoints = [
  {
    id: 1,
    name: 'Send Simple Text Message',
    description: 'Send a basic SMS message to one or more recipients',
    method: 'POST',
    endpoint: 'POST /v1/messages/send'
  },
  {
    id: 2,
    name: 'Send Fully Featured Message',
    description: 'Send SMS with advanced options like scheduling and delivery reports',
    method: 'POST',
    endpoint: 'POST /v1/messages/send-advanced'
  },
  {
    id: 3,
    name: 'Receive SMS (Pull)',
    description: 'Retrieve incoming SMS messages using the pull method',
    method: 'GET',
    endpoint: 'GET /v1/messages/receive'
  },
  {
    id: 4,
    name: 'Receive SMS (Forward)',
    description: 'Configure webhook for real-time message delivery',
    method: 'POST',
    endpoint: 'POST /v1/webhooks/configure'
  },
  {
    id: 5,
    name: 'Number Context',
    description: 'Get information about a phone number',
    method: 'POST',
    endpoint: 'POST /v1/number-context'
  },
  {
    id: 6,
    name: 'Message Status',
    description: 'Check the delivery status of a sent message',
    method: 'GET',
    endpoint: 'GET /v1/messages/:id/status'
  }
];

const statusCodes = [
  { code: '200', description: 'Success - Request completed successfully' },
  { code: '201', description: 'Created - Resource created successfully' },
  { code: '400', description: 'Bad Request - Invalid parameters or malformed request' },
  { code: '401', description: 'Unauthorized - Invalid or missing API key' },
  { code: '403', description: 'Forbidden - Insufficient permissions' },
  { code: '404', description: 'Not Found - Resource not found' },
  { code: '429', description: 'Too Many Requests - Rate limit exceeded' },
  { code: '500', description: 'Internal Server Error - Server error occurred' }
];
</script>

<style scoped>
pre {
  white-space: pre-wrap;
  word-wrap: break-word;
}
</style>