<template>
  <div class="min-h-screen bg-gradient-to-b from-blue-50 to-white">
    <PublicLayout>
      <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 md:py-24">
        <div class="text-center mb-12">
          <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
            {{ product.name }} API Documentation
          </h1>
          <p class="text-xl text-gray-600 max-w-2xl mx-auto">
            {{ product.description }}
          </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
          <div v-for="category in product.doc_categories.slice(0, 3)" :key="category.id" 
               class="bg-white rounded-lg border border-blue-100 p-6 hover:shadow-lg transition">
            <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
               <BoltIcon class="w-6 h-6 text-blue-600" />
            </div>
            <h3 class="text-lg font-semibold text-gray-900 mb-2">{{ category.name }}</h3>
            <p class="text-gray-600 mb-4">Explore endpoints related to {{ category.name.toLowerCase() }}.</p>
            <a :href="'#' + category.slug" class="text-blue-600 hover:text-blue-700 font-medium">Learn more →</a>
          </div>
        </div>
      </section>

      <div v-for="category in product.doc_categories" :key="category.id" :id="category.slug">
        <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
          <h2 class="text-3xl font-bold text-gray-900 mb-8 border-b pb-4">{{ category.name }}</h2>
          
          <div v-for="page in category.doc_pages" :key="page.id" :id="page.slug" class="mb-16 last:mb-0">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
              <div>
                <div class="flex items-center gap-3 mb-4">
                  <h3 class="text-2xl font-semibold text-gray-900">{{ page.title }}</h3>
                  <span v-if="page.http_method" 
                        :class="['px-3 py-1 rounded-full text-xs font-bold uppercase tracking-wider', 
                                 page.http_method === 'POST' ? 'bg-green-100 text-green-700' : 'bg-blue-100 text-blue-700']">
                    {{ page.http_method }}
                  </span>
                </div>

                <div v-if="page.endpoint_url" class="bg-gray-100 rounded-md px-3 py-2 font-mono text-sm text-gray-700 mb-4 inline-block">
                  {{ page.endpoint_url }}
                </div>

                <div class="prose prose-blue text-gray-600 max-w-none" v-html="renderMarkdown(page.content)"></div>
              </div>

              <div class="space-y-4">
                <div v-if="page.sample_code" class="rounded-xl overflow-hidden shadow-2xl">
                  <div class="bg-gray-800 px-4 py-2 flex gap-4 border-b border-gray-700">
                    <button v-for="(code, lang) in page.sample_code" 
                            :key="lang"
                            @click="activeTabs[page.id] = lang"
                            :class="['text-xs font-bold uppercase tracking-widest transition', 
                                     activeTabs[page.id] === lang ? 'text-blue-400' : 'text-gray-400 hover:text-white']">
                      {{ lang }}
                    </button>
                  </div>
                  <div class="bg-gray-900 p-6 overflow-x-auto min-h-[200px]">
                    <pre class="text-green-400 font-mono text-sm leading-relaxed"><code>{{ page.sample_code[activeTabs[page.id] || Object.keys(page.sample_code)[0]] }}</code></pre>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>

      <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <div class="bg-gradient-to-r from-blue-600 to-blue-700 rounded-2xl p-12 text-center shadow-xl">
          <h2 class="text-3xl font-bold text-white mb-4">Ready to Integrate?</h2>
          <p class="text-blue-100 mb-8 max-w-2xl mx-auto">
            Get your API key and start building {{ product.name.toLowerCase() }} solutions in minutes.
          </p>
          <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="/portal/register" class="bg-white text-blue-600 px-8 py-3 rounded-lg font-bold hover:bg-blue-50 transition shadow-lg">
              Get API Key
            </a>
          </div>
        </div>
      </section>
    </PublicLayout>
  </div>
</template>

<script setup lang="ts">
import { ref, reactive } from 'vue';
import PublicLayout from '@/layouts/PublicLayout.vue';
import { BoltIcon } from '@heroicons/vue/24/outline';
import { marked } from 'marked'; // Run: npm install marked

// Define props passed from Laravel Controller
const props = defineProps<{
  product: {
    name: string;
    description: string;
    doc_categories: Array<{
      id: number;
      name: string;
      slug: string;
      doc_pages: Array<{
        id: number;
        title: string;
        slug: string;
        http_method: string;
        endpoint_url: string;
        content: string;
        sample_code: Record<string, string>;
      }>
    }>
  }
}>();

// Track active code tabs for each page
const activeTabs = reactive<Record<number, string>>({});

// Simple Markdown renderer
const renderMarkdown = (text: string) => {
  return marked(text);
};
</script>

<style scoped>
/* Responsive tweaks */
pre {
  white-space: pre-wrap;
  word-wrap: break-word;
}
.prose p {
  margin-bottom: 1rem;
}
</style>