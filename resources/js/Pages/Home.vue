<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Home" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Home</h2>

        </template>


        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">Estas en el home</div>
                </div>
            </div>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="flex flex-col">
                        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                                <div class="overflow-hidden">
                                    <table class="min-w-full text-left text-sm font-light">
                                        <thead class="border-b bg-white font-medium">
                                            <tr>
                                                <th scope="col" class="px-6 py-4 border"> # </th>
                                                <th scope="col" class="px-6 py-4 border"> First </th>
                                                <th scope="col" class="px-6 py-4 border"> Last </th>
                                                <th scope="col" class="px-6 py-4 border"> Handle </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="border-b bg-neutral-100">
                                                <td class="whitespace-nowrap px-6 py-4 font-medium border">1</td>
                                                <td class="whitespace-nowrap px-6 py-4 border">Mark</td>
                                                <td class="whitespace-nowrap px-6 py-4 border">Otto</td>
                                                <td class="whitespace-nowrap px-6 py-4 border">@mdo</td>
                                            </tr>
                                            <tr class="border-b bg-white">
                                                <td class="whitespace-nowrap px-6 py-4 font-medium border">2</td>
                                                <td class="whitespace-nowrap px-6 py-4 border">Jacob</td>
                                                <td class="whitespace-nowrap px-6 py-4 border">Thornton</td>
                                                <td class="whitespace-nowrap px-6 py-4 border">@fat</td>
                                            </tr>
                                            <tr class="border-b bg-neutral-100">
                                                <td class="whitespace-nowrap px-6 py-4 font-medium border">3</td>
                                                <td colspan="2" class="whitespace-nowrap px-6 py-4 text-center border">Larry the Bird</td>
                                                <td class="whitespace-nowrap px-6 py-4 border">@twitter</td>
                                            </tr>
                                        </tbody>
                                    </table>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </AuthenticatedLayout>
</template>
