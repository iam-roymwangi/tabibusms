<template>
  <div class="relative group">
    <button class="font-medium text-[#fff] hover:text-primary transition-colors flex items-center space-x-1">
      <span>Products</span>
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-4 h-4 group-hover:rotate-180 transition-transform">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
      </svg>
    </button>

    <!-- Dropdown Menu -->
    <div class="absolute left-0 mt-0 w-56 bg-white rounded-lg shadow-xl opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 py-2 z-40">
      <template v-if="products.length > 0">
        <a v-for="product in products" :key="product.id" :href="`/products/${product.slug}`"
          class="block px-4 py-3 text-gray-700 hover:bg-blue-50 hover:text-primary transition-colors first:rounded-t-lg last:rounded-b-lg">
          <div class="font-medium">{{ product.name }}</div>
          <div class="text-xs text-gray-500 mt-1">{{ product.description }}</div>
        </a>
        <div class="border-t border-gray-200 mt-2 pt-2">
          <a href="/products" class="block px-4 py-2 text-sm text-primary font-medium hover:bg-blue-50 rounded-b-lg">
            View All Products →
          </a>
        </div>
      </template>
      <template v-else>
        <div class="px-4 py-3 text-gray-500 text-sm">Loading products...</div>
      </template>
    </div>
  </div>
</template>

<script setup lang="ts">
import { ref, onMounted } from 'vue'

interface Product {
  id: number
  name: string
  slug: string
  description: string
  icon: string
}

const products = ref<Product[]>([])

onMounted(async () => {
  try {
    const response = await fetch('/api/products')
    if (response.ok) {
      products.value = await response.json()
    }
  } catch (error) {
    console.error('Failed to fetch products:', error)
  }
})
</script>

<style scoped>
.group:hover > div {
  animation: slideDown 0.2s ease-out;
}

@keyframes slideDown {
  from {
    opacity: 0;
    transform: translateY(-10px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}
</style>
