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
            <div class="md:container md:mx-auto">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">Estas en el home</div>
                </div>
            </div>
                <div class="md:container md:mx-auto">
                    <table class="table">
                    <thead class="border-b bg-white font-medium">
                        <tr>
                            <th> Modelo </th>
                            <th> Marca</th>
                            <th> Cantidad </th>
                            <th> Procesador </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td >1</td>
                            <td >Mark</td>
                            <td >Otto</td>
                            <td >@mdo</td>
                        </tr>
                        <tr >
                            <td >2</td>
                            <td >Jacob</td>
                            <td >Thornton</td>
                            <td >@fat</td>
                        </tr>
                    </tbody>
                </table>
                </div>
               
            </div>
        
    </AuthenticatedLayout>
</template>
