<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
import { index as indexMain } from '@/actions/App/Http/Controllers/MainController';
import { index as indexArticle } from '@/actions/App/Http/Controllers/ArticleController';
</script>

<template>
    <nav class="bg-gray-600 text-white">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center h-16">
                <Link :href="indexMain()" class="text-xl uppercase font-bold hover:text-gray-300 transition">
                    News
                </Link>
                <div class="flex space-x-8">
                    <Link :href="indexMain()" class="hover:text-gray-300 font-semibold transition">
                        Главная
                    </Link>
                    <Link :href="indexArticle()" class="hover:text-gray-300 font-semibold transition">
                        Новости
                    </Link>
                </div>
            </div>
        </div>
    </nav>
</template>