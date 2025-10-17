<template>
    <div class="min-h-screen bg-gray-50">
        <PublicLayout>
            <!-- Hero Section -->
            <section class="bg-gradient-to-r from-blue-50 to-blue-100 py-16">
                <div class="mx-auto max-w-7xl px-4 py-8 text-center sm:px-6 lg:px-8">
                    <h1 class="mb-6 text-4xl font-bold md:text-5xl">
                        Get in Touch
                    </h1>
                    <p class="mx-auto max-w-3xl text-xl text-blue-500">
                        Ready to transform your business communication? We're
                        here to help you get started with our SMS, USSD, and
                        Payment APIs.
                    </p>
                </div>
            </section>

            <!-- Contact Section -->
            <section class="py-16">
                <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                    <div class="grid grid-cols-1 gap-12 lg:grid-cols-2">
                        <!-- Contact Form -->
                        <div class="rounded-lg bg-white p-8 shadow-lg">
                            <h2 class="mb-6 text-2xl font-bold text-gray-900">
                                Send us a Message
                            </h2>
                            <form
                                @submit.prevent="submitForm"
                                class="space-y-6"
                            >
                                <div
                                    class="grid grid-cols-1 gap-6 md:grid-cols-2"
                                >
                                    <div>
                                        <label
                                            for="firstName"
                                            class="mb-2 block text-sm font-medium text-gray-700"
                                        >
                                            First Name *
                                        </label>
                                        <input
                                            type="text"
                                            id="firstName"
                                            v-model="form.firstName"
                                            required
                                            class="w-full rounded-lg border border-gray-300 px-4 py-3 focus:border-transparent focus:ring-2 focus:ring-blue-500"
                                            placeholder="John"
                                        />
                                    </div>
                                    <div>
                                        <label
                                            for="lastName"
                                            class="mb-2 block text-sm font-medium text-gray-700"
                                        >
                                            Last Name *
                                        </label>
                                        <input
                                            type="text"
                                            id="lastName"
                                            v-model="form.lastName"
                                            required
                                            class="w-full rounded-lg border border-gray-300 px-4 py-3 focus:border-transparent focus:ring-2 focus:ring-blue-500"
                                            placeholder="Doe"
                                        />
                                    </div>
                                </div>

                                <div>
                                    <label
                                        for="email"
                                        class="mb-2 block text-sm font-medium text-gray-700"
                                    >
                                        Email Address *
                                    </label>
                                    <input
                                        type="email"
                                        id="email"
                                        v-model="form.email"
                                        required
                                        class="w-full rounded-lg border border-gray-300 px-4 py-3 focus:border-transparent focus:ring-2 focus:ring-blue-500"
                                        placeholder="john@company.com"
                                    />
                                </div>

                                <div>
                                    <label
                                        for="phone"
                                        class="mb-2 block text-sm font-medium text-gray-700"
                                    >
                                        Phone Number
                                    </label>
                                    <input
                                        type="tel"
                                        id="phone"
                                        v-model="form.phone"
                                        class="w-full rounded-lg border border-gray-300 px-4 py-3 focus:border-transparent focus:ring-2 focus:ring-blue-500"
                                        placeholder="+254 700 000 000"
                                    />
                                </div>

                                <div>
                                    <label
                                        for="company"
                                        class="mb-2 block text-sm font-medium text-gray-700"
                                    >
                                        Company Name
                                    </label>
                                    <input
                                        type="text"
                                        id="company"
                                        v-model="form.company"
                                        class="w-full rounded-lg border border-gray-300 px-4 py-3 focus:border-transparent focus:ring-2 focus:ring-blue-500"
                                        placeholder="Your Company"
                                    />
                                </div>

                                <div>
                                    <label
                                        for="service"
                                        class="mb-2 block text-sm font-medium text-gray-700"
                                    >
                                        Service Interest
                                    </label>
                                    <select
                                        id="service"
                                        v-model="form.service"
                                        class="w-full rounded-lg border border-gray-300 px-4 py-3 focus:border-transparent focus:ring-2 focus:ring-blue-500"
                                    >
                                        <option value="">
                                            Select a service
                                        </option>
                                        <option value="sms">SMS API</option>
                                        <option value="ussd">USSD API</option>
                                        <option value="payments">
                                            Payment API
                                        </option>
                                        <option value="all">
                                            All Services
                                        </option>
                                    </select>
                                </div>

                                <div>
                                    <label
                                        for="message"
                                        class="mb-2 block text-sm font-medium text-gray-700"
                                    >
                                        Message *
                                    </label>
                                    <textarea
                                        id="message"
                                        v-model="form.message"
                                        required
                                        rows="4"
                                        class="w-full rounded-lg border border-gray-300 px-4 py-3 focus:border-transparent focus:ring-2 focus:ring-blue-500"
                                        placeholder="Tell us about your project and how we can help..."
                                    ></textarea>
                                </div>

                                <button
                                    type="submit"
                                    :disabled="isSubmitting"
                                    class="w-full rounded-lg bg-blue-600 px-6 py-3 font-semibold text-white transition-colors hover:bg-blue-700 focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
                                >
                                    {{
                                        isSubmitting
                                            ? 'Sending...'
                                            : 'Send Message'
                                    }}
                                </button>
                            </form>
                        </div>

                        <!-- Contact Information -->
                        <div class="space-y-8">
                            <div class="rounded-lg bg-white p-8 shadow-lg">
                                <h2
                                    class="mb-6 text-2xl font-bold text-gray-900"
                                >
                                    Contact Information
                                </h2>
                                <div class="space-y-6">
                                    <div class="flex items-start">
                                        <div class="flex-shrink-0">
                                            <div
                                                class="flex h-10 w-10 items-center justify-center rounded-lg bg-blue-100"
                                            >
                                                <svg
                                                    class="h-5 w-5 text-blue-600"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    viewBox="0 0 24 24"
                                                >
                                                    <path
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"
                                                    ></path>
                                                    <path
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"
                                                    ></path>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="ml-4">
                                            <h3
                                                class="text-lg font-semibold text-gray-900"
                                            >
                                                Office Address
                                            </h3>
                                            <p class="text-gray-600">
                                                Westlands, Nairobi<br />
                                                Kenya
                                            </p>
                                        </div>
                                    </div>

                                    <div class="flex items-start">
                                        <div class="flex-shrink-0">
                                            <div
                                                class="flex h-10 w-10 items-center justify-center rounded-lg bg-blue-100"
                                            >
                                                <svg
                                                    class="h-5 w-5 text-blue-600"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    viewBox="0 0 24 24"
                                                >
                                                    <path
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"
                                                    ></path>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="ml-4">
                                            <h3
                                                class="text-lg font-semibold text-gray-900"
                                            >
                                                Phone
                                            </h3>
                                            <p class="text-gray-600">
                                                +254 700 000 000
                                            </p>
                                        </div>
                                    </div>

                                    <div class="flex items-start">
                                        <div class="flex-shrink-0">
                                            <div
                                                class="flex h-10 w-10 items-center justify-center rounded-lg bg-blue-100"
                                            >
                                                <svg
                                                    class="h-5 w-5 text-blue-600"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    viewBox="0 0 24 24"
                                                >
                                                    <path
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"
                                                    ></path>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="ml-4">
                                            <h3
                                                class="text-lg font-semibold text-gray-900"
                                            >
                                                Email
                                            </h3>
                                            <p class="text-gray-600">
                                                hello@tabibu.co.ke
                                            </p>
                                        </div>
                                    </div>

                                    <div class="flex items-start">
                                        <div class="flex-shrink-0">
                                            <div
                                                class="flex h-10 w-10 items-center justify-center rounded-lg bg-blue-100"
                                            >
                                                <svg
                                                    class="h-5 w-5 text-blue-600"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    viewBox="0 0 24 24"
                                                >
                                                    <path
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"
                                                    ></path>
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="ml-4">
                                            <h3
                                                class="text-lg font-semibold text-gray-900"
                                            >
                                                Business Hours
                                            </h3>
                                            <p class="text-gray-600">
                                                Monday - Friday: 8:00 AM - 6:00
                                                PM<br />
                                                Saturday: 9:00 AM - 2:00 PM<br />
                                                Sunday: Closed
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Quick Links -->
                            <div class="rounded-lg bg-white p-8 shadow-lg">
                                <h2
                                    class="mb-6 text-2xl font-bold text-gray-900"
                                >
                                    Quick Links
                                </h2>
                                <div class="space-y-4">
                                    <a
                                        href="#"
                                        class="flex items-center text-blue-600 transition-colors hover:text-blue-700"
                                    >
                                        <svg
                                            class="mr-3 h-5 w-5"
                                            fill="none"
                                            stroke="currentColor"
                                            viewBox="0 0 24 24"
                                        >
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"
                                            ></path>
                                        </svg>
                                        API Documentation
                                    </a>
                                    <a
                                        href="#"
                                        class="flex items-center text-blue-600 transition-colors hover:text-blue-700"
                                    >
                                        <svg
                                            class="mr-3 h-5 w-5"
                                            fill="none"
                                            stroke="currentColor"
                                            viewBox="0 0 24 24"
                                        >
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 100 4m0-4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 100 4m0-4v2m0-6V4"
                                            ></path>
                                        </svg>
                                        Developer Portal
                                    </a>
                                    <a
                                        href="#"
                                        class="flex items-center text-blue-600 transition-colors hover:text-blue-700"
                                    >
                                        <svg
                                            class="mr-3 h-5 w-5"
                                            fill="none"
                                            stroke="currentColor"
                                            viewBox="0 0 24 24"
                                        >
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                                            ></path>
                                        </svg>
                                        Support Center
                                    </a>
                                    <a
                                        href="#"
                                        class="flex items-center text-blue-600 transition-colors hover:text-blue-700"
                                    >
                                        <svg
                                            class="mr-3 h-5 w-5"
                                            fill="none"
                                            stroke="currentColor"
                                            viewBox="0 0 24 24"
                                        >
                                            <path
                                                stroke-linecap="round"
                                                stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"
                                            ></path>
                                        </svg>
                                        Pricing
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </PublicLayout>
    </div>
</template>

<script setup lang="ts">
import PublicLayout from '@/layouts/PublicLayout.vue';
import { reactive, ref } from 'vue';

const form = reactive({
    firstName: '',
    lastName: '',
    email: '',
    phone: '',
    company: '',
    service: '',
    message: '',
});

const isSubmitting = ref(false);

const submitForm = async () => {
    isSubmitting.value = true;

    // Simulate form submission
    await new Promise((resolve) => setTimeout(resolve, 2000));

    // Reset form
    (Object.keys(form) as Array<keyof typeof form>).forEach((key) => {
        form[key] = '';
    });

    isSubmitting.value = false;
    alert("Thank you for your message! We'll get back to you soon.");
};
</script>
