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
        <br>
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">Estas en el form</div>
                </div>
            </div>
            <br>
            <div class="container mx-auto bg-slate-300">
                <form action="/my-handling-form-page" method="post">
                    <ul>
                        <li>
                        <label for="name">Nombre:</label>
                        <input type="text" id="name" name="user_name" />
                        </li>
                        <li>
                        <label for="mail">Correo electrónico:</label>
                        <input type="email" id="mail" name="user_mail" />
                        </li>
                        <li>
                        <label for="msg">Mensaje:</label>
                        <textarea id="msg" name="user_message"></textarea>
                        </li>
                    </ul>
                </form>
            </div> 
         
       
    </AuthenticatedLayout>
</template>
