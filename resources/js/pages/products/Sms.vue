<template>
  <div class="min-h-screen bg-white">
    <PublicLayout>
      <section class="bg-gradient-to-br from-blue-600 to-indigo-800 py-24 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
          <h1 class="text-4xl md:text-6xl font-extrabold mb-6 leading-tight">
            SMS Solutions for <br />
            <span class="text-blue-200">Modern Enterprises</span>
          </h1>
          <p class="text-xl text-blue-100 mb-10 max-w-2xl mx-auto">
            High-throughput, reliable SMS gateways designed to keep you connected with your customers 
            across Kenya and the East African region.
          </p>
          <div class="flex justify-center">
            <a href="/portal/sms" class="bg-white text-blue-600 px-10 py-4 rounded-xl hover:bg-gray-100 transition-all font-bold shadow-lg flex items-center gap-2">
              Launch SMS Portal
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd" />
              </svg>
            </a>
          </div>
        </div>
      </section>

      <section class="py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div class="grid md:grid-cols-3 gap-12">
            <div v-for="feature in smsFeatures" :key="feature.title" class="p-6 bg-gray-50 rounded-2xl border border-gray-100">
              <div class="w-12 h-12 bg-blue-600 text-white rounded-lg flex items-center justify-center mb-6 shadow-md">
                <component :is="feature.icon" class="w-6 h-6" />
              </div>
              <h3 class="text-xl font-bold text-gray-900 mb-3">{{ feature.title }}</h3>
              <p class="text-gray-600 leading-relaxed">{{ feature.description }}</p>
            </div>
          </div>
        </div>
      </section>

      <section class="py-20 bg-gray-900 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div class="flex flex-col lg:flex-row gap-16 items-center">
            <div class="lg:w-1/2">
              <h2 class="text-3xl font-bold mb-6 text-blue-400">Developer-First Integration</h2>
              <p class="text-gray-400 text-lg mb-8">
                Our RESTful API is built to be integrated in minutes. We handle the complexity of carrier 
                routing so you can focus on your product.
              </p>
              <ul class="space-y-4">
                <li v-for="spec in specs" :key="spec" class="flex items-center gap-3">
                  <div class="w-2 h-2 bg-blue-500 rounded-full"></div>
                  <span class="text-gray-300 font-medium">{{ spec }}</span>
                </li>
              </ul>
            </div>
            <div class="lg:w-1/2 w-full">
              <div class="bg-gray-800 rounded-2xl p-6 shadow-2xl border border-gray-700 font-mono text-sm leading-6">
                <div class="flex gap-2 mb-4">
                  <div class="w-3 h-3 rounded-full bg-red-500"></div>
                  <div class="w-3 h-3 rounded-full bg-yellow-500"></div>
                  <div class="w-3 h-3 rounded-full bg-green-500"></div>
                </div>
                <div class="text-blue-400">POST</div> <span class="text-gray-300">/api/v1/sms/send</span>
                <div class="mt-4 text-gray-500">// Request Payload</div>
                <div class="text-white">
                  {<br />
                  &nbsp;&nbsp;<span class="text-green-400">"to"</span>: <span class="text-yellow-400">"+2547XXXXXXXX"</span>,<br />
                  &nbsp;&nbsp;<span class="text-green-400">"message"</span>: <span class="text-yellow-400">"Your OTP is 4921"</span>,<br />
                  &nbsp;&nbsp;<span class="text-green-400">"from"</span>: <span class="text-yellow-400">"TABIBU"</span><br />
                  }
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="py-20 bg-white">
        <div class="max-w-4xl mx-auto px-4 text-center">
          <h2 class="text-3xl font-bold text-gray-900 mb-4">Transparent Pricing</h2>
          <p class="text-gray-600 mb-12">Pay only for what you send. No setup fees or hidden costs.</p>
          <div class="bg-blue-50 rounded-3xl p-8 md:p-12 border border-blue-100">
            <div class="text-5xl font-black text-blue-600 mb-2">KES 0.8</div>
            <div class="text-gray-500 uppercase tracking-widest font-bold text-sm">Per Message</div>
            <p class="mt-6 text-gray-600 max-w-md mx-auto italic">
              *Volume discounts available for over 100,000 messages per month.
            </p>
          </div>
        </div>
      </section>

      <section class="bg-blue-600 py-16">
        <div class="max-w-7xl mx-auto px-4 text-center">
          <h2 class="text-3xl font-bold text-white mb-8">Scale your communications today</h2>
          <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="/portal/register" class="bg-white text-blue-600 px-8 py-3 rounded-lg font-bold hover:bg-blue-50 transition-colors">Create Account</a>
            <a href="/docs/sms" class="border border-blue-400 text-white px-8 py-3 rounded-lg font-bold hover:bg-blue-700 transition-colors">Read Documentation</a>
          </div>
        </div>
      </section>
    </PublicLayout>
  </div>
</template>

<script setup lang="ts">
import PublicLayout from '@/layouts/PublicLayout.vue';
import { 
  ChatBubbleLeftRightIcon, 
  ShieldCheckIcon
} from '@heroicons/vue/24/outline'; // Assumes you have Heroicons installed

const smsFeatures = [
  {
    title: 'Bulk Messaging',
    description: 'Reach thousands of customers instantly with our high-throughput gateway. Perfect for marketing and updates.',
    icon: ChatBubbleLeftRightIcon
  },
  {
    title: 'Custom Sender IDs',
    description: 'Build brand trust by sending messages using your company name (e.g., TABIBU) instead of a random number.',
    icon: ShieldCheckIcon
  },
  {
    title: 'Real-time Analytics',
    description: 'Track delivery rates, open rates, and response metrics in real-time via your dedicated dashboard.',
    icon: ShieldCheckIcon
  }
];

const specs = [
  'Unicode support (Emojis & non-Latin characters)',
  'Concatenated long messages (160+ characters)',
  'Webhook notifications for delivery reports',
  'Scheduled messaging via API',
  'Dynamic template support'
];
</script>