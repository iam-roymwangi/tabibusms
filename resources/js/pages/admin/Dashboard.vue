<script setup lang="ts">
import { ref } from 'vue';
import { Head, useForm, router } from '@inertiajs/vue3';
import AppLayout from '@/layouts/AppLayout.vue';
import { Button } from '@/components/ui/button';
import { Input } from '@/components/ui/input';
import { Label } from '@/components/ui/label';
import {
    Dialog,
    DialogContent,
    DialogDescription,
    DialogFooter,
    DialogHeader,
    DialogTitle,
    DialogTrigger,
} from '@/components/ui/dialog';
import {
    Card,
    CardContent,
    CardDescription,
    CardFooter,
    CardHeader,
    CardTitle,
} from '@/components/ui/card';
import { Pencil, Trash2, Plus } from 'lucide-vue-next';

interface Product {
    id: number;
    name: string;
    slug: string;
    description: string | null;
    icon: string | null;
}

const props = defineProps<{
    products: Product[];
}>();

const isModalOpen = ref(false);
const isEditing = ref(false);
const currentProductId = ref<number | null>(null);

const form = useForm({
    name: '',
    description: '',
    icon: '',
});

const openCreateModal = () => {
    isEditing.value = false;
    form.reset();
    isModalOpen.value = true;
};

const openEditModal = (product: Product) => {
    isEditing.value = true;
    currentProductId.value = product.id;
    form.name = product.name;
    form.description = product.description || '';
    form.icon = product.icon || '';
    isModalOpen.value = true;
};

const submit = () => {
    if (isEditing.value && currentProductId.value) {
        form.put(`/products/${currentProductId.value}`, {
            onSuccess: () => {
                isModalOpen.value = false;
                form.reset();
            },
        });
    } else {
        form.post('/products', {
            onSuccess: () => {
                isModalOpen.value = false;
                form.reset();
            },
        });
    }
};

const deleteProduct = (id: number) => {
    if (confirm('Are you sure you want to delete this product?')) {
        router.delete(`/products/${id}`);
    }
};

const breadcrumbs = [
    {
        title: 'Dashboard',
        href: '/dashboard',
    },
];
</script>

<template>
    <Head title="Admin Dashboard" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="flex h-full flex-1 flex-col gap-4 p-4">
            <div class="flex items-center justify-between">
                <h1 class="text-2xl font-bold tracking-tight">Products</h1>
                <Button @click="openCreateModal">
                    <Plus class="mr-2 h-4 w-4" /> Add Product
                </Button>
            </div>

            <div class="grid gap-4 md:grid-cols-2 lg:grid-cols-3">
                <Card v-for="product in products" :key="product.id">
                    <CardHeader>
                        <CardTitle class="flex items-center justify-between">
                            <span>{{ product.name }}</span>
                            <span v-if="product.icon" class="text-sm text-muted-foreground bg-secondary px-2 py-1 rounded">
                                {{ product.icon }}
                            </span>
                        </CardTitle>
                        <CardDescription>{{ product.slug }}</CardDescription>
                    </CardHeader>
                    <CardContent>
                        <p class="text-sm text-muted-foreground line-clamp-3">
                            {{ product.description || 'No description provided.' }}
                        </p>
                    </CardContent>
                    <CardFooter class="flex justify-end space-x-2">
                        <Button variant="outline" size="sm" @click="openEditModal(product)">
                            <Pencil class="h-4 w-4 mr-1" /> Edit
                        </Button>
                        <Button variant="destructive" size="sm" @click="deleteProduct(product.id)">
                            <Trash2 class="h-4 w-4 mr-1" /> Delete
                        </Button>
                    </CardFooter>
                </Card>
            </div>

            <Dialog :open="isModalOpen" @update:open="isModalOpen = $event">
                <DialogContent class="sm:max-w-[425px]">
                    <DialogHeader>
                        <DialogTitle>{{ isEditing ? 'Edit Product' : 'Add Product' }}</DialogTitle>
                        <DialogDescription>
                            {{ isEditing ? 'Make changes to the product here.' : 'Add a new product to your catalog.' }}
                        </DialogDescription>
                    </DialogHeader>
                    <form @submit.prevent="submit" class="grid gap-4 py-4">
                        <div class="grid gap-2">
                            <Label htmlFor="name">Name</Label>
                            <Input id="name" v-model="form.name" required />
                            <span v-if="form.errors.name" class="text-sm text-red-500">{{ form.errors.name }}</span>
                        </div>
                        <div class="grid gap-2">
                            <Label htmlFor="description">Description</Label>
                            <textarea
                                id="description"
                                v-model="form.description"
                                class="flex min-h-[80px] w-full rounded-md border border-input bg-background px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50"
                            ></textarea>
                            <span v-if="form.errors.description" class="text-sm text-red-500">{{ form.errors.description }}</span>
                        </div>
                        <div class="grid gap-2">
                            <Label htmlFor="icon">Icon (CSS Class or Path)</Label>
                            <Input id="icon" v-model="form.icon" />
                            <span v-if="form.errors.icon" class="text-sm text-red-500">{{ form.errors.icon }}</span>
                        </div>
                        <DialogFooter>
                            <Button type="submit" :disabled="form.processing">
                                {{ isEditing ? 'Save changes' : 'Create Product' }}
                            </Button>
                        </DialogFooter>
                    </form>
                </DialogContent>
            </Dialog>
        </div>
    </AppLayout>
</template>
