<template>
  <div class="min-h-screen font-sans text-gray-900">
     <!-- Header  -->
    <header :class="`fixed top-0 left-0 right-0 z-50 transition-all duration-300 ${isScrolled ? 'bg-white shadow-md py-4' : 'bg-transparent py-4'}`">
      <div class="container mx-auto px-4 flex justify-between items-center">
        <div class="flex items-center">
          <div class="h-10 md:h-16 flex items-center">
            <Link href="/">
              <img src="/images/tabibusms-logo.png" alt="Tabibu SMS Logo" class="h-8 md:h-12 w-auto rounded-2xl">
            </Link>
          </div>
        </div>
        
        <nav class="hidden md:flex items-center space-x-8">
          <Link href="/" class="font-medium text-gray-800 hover:text-primary transition-colors">Home</Link>
          <Link href="/products" class="font-medium text-gray-800 hover:text-primary transition-colors">Products</Link>
          <Link href="/contact" class="font-medium text-gray-800 hover:text-primary transition-colors">Contact</Link>
          <Link href="/about" class="font-medium text-gray-800 hover:text-primary transition-colors">About</Link>
          <Link href="/docs" class="font-medium text-gray-800 hover:text-primary transition-colors">API Docs</Link>
          <Link href="#docs" class="font-medium text-gray-800 hover:text-primary transition-colors">Pricing</Link>
        </nav>
        
        <div class="hidden md:flex items-center space-x-4">
          <a href="#portal" class="px-4 py-2 text-primary border border-primary rounded-lg hover:bg-primary hover:text-white transition-colors">
            Login
          </a>
        </div>
        
        <button class="md:hidden text-gray-800" @click="toggleMobileMenu">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
        </button>
      </div>
    </header>

    <!-- Mobile Menu -->
    <transition
      enter-active-class="transition ease-out duration-200"
      enter-from-class="opacity-0 -translate-y-4"
      enter-to-class="opacity-100 translate-y-0"
      leave-active-class="transition ease-in duration-150"
      leave-from-class="opacity-100 translate-y-0"
      leave-to-class="opacity-0 -translate-y-4"
    >
      <div v-if="showMobileMenu" class="fixed inset-0 bg-white z-40 flex flex-col py-6 px-4 shadow-lg md:hidden">
        <div class="flex justify-between items-center mb-8">
          <Link href="/" @click="closeMobileMenu">
            <img src="/images/tabibusms-logo.png" alt="Tabibu SMS Logo" class="h-8 md:h-12 w-auto">
          </Link>
          <button @click="toggleMobileMenu" class="text-gray-800">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>

        <nav class="flex flex-col space-y-4 mb-8">
          <Link href="/" class="font-medium text-gray-800 hover:text-primary transition-colors text-lg" @click="closeMobileMenu">Home</Link>
          <Link href="/products" class="font-medium text-gray-800 hover:text-primary transition-colors text-lg" @click="closeMobileMenu">Products</Link>
          <Link href="/contact" class="font-medium text-gray-800 hover:text-primary transition-colors text-lg" @click="closeMobileMenu">Contact</Link>
          <Link href="/about" class="font-medium text-gray-800 hover:text-primary transition-colors text-lg" @click="closeMobileMenu">About</Link>
          <Link href="/docs" class="font-medium text-gray-800 hover:text-primary transition-colors text-lg" @click="closeMobileMenu">API Docs</Link>
          <Link href="#docs" class="font-medium text-gray-800 hover:text-primary transition-colors text-lg" @click="closeMobileMenu">Pricing</Link>
        </nav>

        <div class="flex flex-col space-y-4">
          <a href="#portal" class="px-4 py-2 text-primary border border-primary rounded-lg hover:bg-primary hover:text-white transition-colors text-lg text-center" @click="closeMobileMenu">
            Login
          </a>
        </div>
      </div>
    </transition>

    <div>
      <slot />
   </div>

     <!-- Footer  -->
    <footer class="bg-gray-900 text-white pt-12 pb-6">
      <div class="container mx-auto px-4">
        <div class="grid md:grid-cols-4 gap-8 mb-12">
          <div>
            <div class="text-2xl font-bold mb-4">Tabibu SMS</div>
            <p class="text-gray-400 mb-4">
              Reliable SMS communication platform for healthcare providers across Africa.
            </p>
            <div class="flex space-x-4">
              <a href="#" class="text-gray-400 hover:text-white transition-colors">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" />
                </svg>
              </a>
              <a href="#" class="text-gray-400 hover:text-white transition-colors">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                  <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                </svg>
              </a>
            </div>
          </div>
          
          <div>
            <h3 class="text-lg font-semibold mb-4">Products</h3>
            <ul class="space-y-2">
              <li><a href="#" class="text-gray-400 hover:text-white transition-colors">SMS API</a></li>
              <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Bulk SMS</a></li>
              <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Two-Way SMS</a></li>
              <li><a href="#" class="text-gray-400 hover:text-white transition-colors">SMS Templates</a></li>
            </ul>
          </div>
          
          <div>
            <h3 class="text-lg font-semibold mb-4">Resources</h3>
            <ul class="space-y-2">
              <li><a href="#" class="text-gray-400 hover:text-white transition-colors">API Documentation</a></li>
              <li><a href="#" class="text-gray-400 hover:text-white transition-colors">SDKs & Libraries</a></li>
              <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Code Examples</a></li>
              <li><a href="#portal" class="text-gray-400 hover:text-white transition-colors">Developer Portal</a></li>
            </ul>
          </div>
          
          <div>
            <h3 class="text-lg font-semibold mb-4">Support</h3>
            <ul class="space-y-2">
              <li class="flex items-start">
                <svg class="w-5 h-5 mr-2 mt-1 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                </svg>
                <span class="text-gray-400">+254 722 222 722</span>
              </li>
              <li class="flex items-start">
                <svg class="w-5 h-5 mr-2 mt-1 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
                <span class="text-gray-400">sms@tabibuhealth.com</span>
              </li>
            </ul>
          </div>
        </div>
        
        <div class="border-t border-gray-800 pt-8">
          <div class="flex flex-col md:flex-row justify-between items-center">
            <p class="text-gray-400 text-sm">© 2025 Tabibu SMS. All rights reserved.</p>
            <div class="flex mt-4 md:mt-0">
              <a href="#" class="text-sm text-gray-400 hover:text-white transition-colors mr-6">Privacy Policy</a>
              <a href="#" class="text-sm text-gray-400 hover:text-white transition-colors mr-6">Terms of Service</a>
              <a href="#" class="text-sm text-gray-400 hover:text-white transition-colors">API Terms</a>
            </div>
          </div>
        </div>
      </div>
    </footer>

     <!-- Pricing Modal  -->
    <div v-if="showPricingModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 p-4">
      <div class="bg-white rounded-xl max-w-2xl w-full max-h-[90vh] overflow-y-auto">
        <div class="p-6">
          <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold text-gray-900">SMS Pricing & Sender ID Request</h2>
            <button @click="showPricingModal = false" class="text-gray-400 hover:text-gray-600">
              <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
              </svg>
            </button>
          </div>
          
          <form @submit.prevent="submitPricingRequest" class="space-y-6">
            <div class="grid md:grid-cols-2 gap-4">
              <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Full Name</label>
                <input 
                  v-model="pricingForm.name" 
                  type="text" 
                  required 
                  class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent"
                >
              </div>
              <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Email Address</label>
                <input 
                  v-model="pricingForm.email" 
                  type="email" 
                  required 
                  class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent"
                >
              </div>
            </div>
            
            <div class="grid md:grid-cols-2 gap-4">
              <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Organization</label>
                <input 
                  v-model="pricingForm.organization" 
                  type="text" 
                  required 
                  class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent"
                >
              </div>
              <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Phone Number</label>
                <input 
                  v-model="pricingForm.phone" 
                  type="tel" 
                  required 
                  class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent"
                >
              </div>
            </div>
            
            <div>
              <label class="block text-sm font-medium text-gray-700 mb-2">Desired Sender ID</label>
              <input 
                v-model="pricingForm.senderId" 
                type="text" 
                placeholder="e.g., TABIBU, CLINIC, HOSPITAL"
                class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent"
              >
              <p class="text-xs text-gray-500 mt-1">This will appear as the sender name on SMS messages</p>
            </div>
            
            <div>
              <label class="block text-sm font-medium text-gray-700 mb-2">Expected Monthly SMS Volume</label>
              <select 
                v-model="pricingForm.volume" 
                required 
                class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent"
              >
                <option value="">Select volume range</option>
                <option value="1-1000">1 - 1,000 messages</option>
                <option value="1001-10000">1,001 - 10,000 messages</option>
                <option value="10001-50000">10,001 - 50,000 messages</option>
                <option value="50001-100000">50,001 - 100,000 messages</option>
                <option value="100000+">100,000+ messages</option>
              </select>
            </div>
            
            <div>
              <label class="block text-sm font-medium text-gray-700 mb-2">Use Case</label>
              <textarea 
                v-model="pricingForm.useCase" 
                rows="3" 
                placeholder="Describe how you plan to use SMS (e.g., appointment reminders, medication alerts, patient notifications)"
                class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent"
              ></textarea>
            </div>
            
            <div class="flex justify-end space-x-4">
              <button 
                type="button" 
                @click="showPricingModal = false"
                class="px-6 py-2 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition-colors"
              >
                Cancel
              </button>
              <button 
                type="submit"
                class="px-6 py-2 bg-primary text-white rounded-lg hover:bg-blue-700 transition-colors"
              >
                Request Pricing
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup lang="ts">
import { ref, onMounted, onUnmounted } from 'vue'
import { Link } from '@inertiajs/vue3'

// Reactive data
const isScrolled = ref(false)
const showPricingModal = ref(false)
const showMobileMenu = ref(false) // New reactive variable for mobile menu
const pricingForm = ref({
  name: '',
  email: '',
  organization: '',
  phone: '',
  senderId: '',
  volume: '',
  useCase: ''
})

// Methods
const handleScroll = () => {
  isScrolled.value = window.scrollY > 10
}

const toggleMobileMenu = () => {
  showMobileMenu.value = !showMobileMenu.value // Toggle mobile menu visibility
}

const closeMobileMenu = () => {
  showMobileMenu.value = false; // Close mobile menu
}

const submitPricingRequest = () => {
  // Handle form submission
  console.log('Pricing request submitted:', pricingForm.value)
  alert('Thank you! We\'ll send you custom pricing within 24 hours.')
  showPricingModal.value = false
  
  // Reset form
  pricingForm.value = {
    name: '',
    email: '',
    organization: '',
    phone: '',
    senderId: '',
    volume: '',
    useCase: ''
  }
}

// Lifecycle hooks
onMounted(() => {
  window.addEventListener('scroll', handleScroll)
})

onUnmounted(() => {
  window.removeEventListener('scroll', handleScroll)
})
</script>

<style scoped>
.text-primary {
  color: #3b82f6;
}

.bg-primary {
  background-color: #3b82f6;
}

.border-primary {
  border-color: #3b82f6;
}

.hover\:bg-primary:hover {
  background-color: #3b82f6;
}

.hover\:text-primary:hover {
  color: #3b82f6;
}

.focus\:ring-primary:focus {
  --tw-ring-color: #3b82f6;
}

.text-accent {
  color: #10b981;
}

.bg-accent {
  background-color: #10b981;
}
</style>
