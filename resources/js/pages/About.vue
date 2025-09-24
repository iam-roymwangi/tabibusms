<template>
  <div class="min-h-screen bg-gray-50">
   <PublicLayout>

    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-blue-50 to-blue-100 py-20">
      <div class="max-w-7xl mx-auto px-4 py-8 sm:px-6 lg:px-8 text-center">
        <h1 class="text-4xl md:text-6xl font-bold mb-6">About Tabibu</h1>
        <p class="text-xl md:text-2xl text-blue-500 max-w-3xl mx-auto">
          Empowering Kenya's businesses with reliable communication and payment solutions
        </p>
      </div>
    </section>

    <!-- Mission Section -->
    <section class="py-20">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
          <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Our Mission</h2>
          <p class="text-xl text-gray-600 max-w-3xl mx-auto">
            To simplify business communication across Kenya by providing robust, 
            affordable, and easy-to-integrate APIs that help businesses connect with their customers.
          </p>
        </div>

        <div class="grid md:grid-cols-2 gap-12 items-center">
          <div>
            <h3 class="text-2xl font-bold text-gray-900 mb-6">Why We Started Tabibu</h3>
            <p class="text-gray-600 mb-4">
              Kenya's business landscape is rapidly evolving, with mobile technology at the forefront 
              of this transformation. We recognized that many businesses struggled with fragmented 
              communication solutions that were either too expensive or too complex to implement.
            </p>
            <p class="text-gray-600 mb-4">
              Founded with the vision of democratizing business communication, Tabibu bridges the gap 
              between advanced technology and practical business needs. We believe every business, 
              regardless of size, should have access to professional-grade communication tools.
            </p>
            <p class="text-gray-600">
              Our platform is built specifically for the Kenyan market, understanding local needs, 
              regulations, and business practices to deliver solutions that truly work.
            </p>
          </div>
          <div class="bg-blue-50 p-8 rounded-lg">
            <div class="grid grid-cols-2 gap-6">
              <div class="text-center">
                <div class="text-3xl font-bold text-blue-600 mb-2">500+</div>
                <div class="text-gray-600">Active Businesses</div>
              </div>
              <div class="text-center">
                <div class="text-3xl font-bold text-blue-600 mb-2">1M+</div>
                <div class="text-gray-600">Messages Sent</div>
              </div>
              <div class="text-center">
                <div class="text-3xl font-bold text-blue-600 mb-2">99.9%</div>
                <div class="text-gray-600">Uptime</div>
              </div>
              <div class="text-center">
                <div class="text-3xl font-bold text-blue-600 mb-2">24/7</div>
                <div class="text-gray-600">Support</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Values Section -->
    <section class="py-20 bg-white">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
          <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Our Values</h2>
          <p class="text-xl text-gray-600">The principles that guide everything we do</p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
          <div class="text-center p-6">
            <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
              <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
              </svg>
            </div>
            <h3 class="text-xl font-bold text-gray-900 mb-3">Reliability</h3>
            <p class="text-gray-600">
              We build systems you can depend on, with 99.9% uptime and robust infrastructure 
              that scales with your business needs.
            </p>
          </div>

          <div class="text-center p-6">
            <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
              <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
              </svg>
            </div>
            <h3 class="text-xl font-bold text-gray-900 mb-3">Simplicity</h3>
            <p class="text-gray-600">
              Complex technology made simple. Our APIs are designed to be intuitive and 
              easy to integrate, so you can focus on your business.
            </p>
          </div>

          <div class="text-center p-6">
            <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
              <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
              </svg>
            </div>
            <h3 class="text-xl font-bold text-gray-900 mb-3">Local Focus</h3>
            <p class="text-gray-600">
              Built for Kenya, by people who understand the local market, regulations, 
              and unique challenges businesses face.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Team Section -->
    <section class="py-20 bg-gray-50">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
          <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Our Commitment</h2>
          <p class="text-xl text-gray-600 max-w-3xl mx-auto">
            We're committed to supporting Kenya's digital transformation by providing 
            world-class communication infrastructure that's accessible to all businesses.
          </p>
        </div>

        <div class="grid md:grid-cols-2 gap-12">
          <div class="bg-white p-8 rounded-lg shadow-sm">
            <h3 class="text-xl font-bold text-gray-900 mb-4">For Developers</h3>
            <p class="text-gray-600 mb-4">
              Clean, well-documented APIs with comprehensive SDKs and examples. 
              We provide the tools you need to integrate quickly and efficiently.
            </p>
            <ul class="text-gray-600 space-y-2">
              <li class="flex items-center">
                <svg class="w-5 h-5 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                </svg>
                RESTful APIs with clear documentation
              </li>
              <li class="flex items-center">
                <svg class="w-5 h-5 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                </svg>
                SDKs for popular programming languages
              </li>
              <li class="flex items-center">
                <svg class="w-5 h-5 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                </svg>
                Sandbox environment for testing
              </li>
            </ul>
          </div>

          <div class="bg-white p-8 rounded-lg shadow-sm">
            <h3 class="text-xl font-bold text-gray-900 mb-4">For Businesses</h3>
            <p class="text-gray-600 mb-4">
              Transparent pricing, reliable service, and dedicated support to help 
              your business communicate effectively with customers.
            </p>
            <ul class="text-gray-600 space-y-2">
              <li class="flex items-center">
                <svg class="w-5 h-5 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                </svg>
                Pay-as-you-use pricing model
              </li>
              <li class="flex items-center">
                <svg class="w-5 h-5 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                </svg>
                24/7 customer support
              </li>
              <li class="flex items-center">
                <svg class="w-5 h-5 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                </svg>
                Real-time analytics and reporting
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-blue-600">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-white mb-6">
          Ready to Transform Your Business Communication?
        </h2>
        <p class="text-xl text-blue-100 mb-8 max-w-2xl mx-auto">
          Join hundreds of Kenyan businesses already using Tabibu to connect with their customers.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
          <button class="bg-white text-blue-600 px-8 py-3 rounded-md font-semibold hover:bg-gray-50">
            Get Started Free
          </button>
          <button class="border-2 border-white text-white px-8 py-3 rounded-md font-semibold hover:bg-white hover:text-blue-600">
            Contact Sales
          </button>
        </div>
      </div>
    </section>

    </PublicLayout>
  </div>
</template>

<script setup lang="ts">
import PublicLayout from '@/layouts/PublicLayout.vue';

// No reactive data needed for this static about page
</script>

<style scoped>
/* Additional custom styles if needed */
</style>