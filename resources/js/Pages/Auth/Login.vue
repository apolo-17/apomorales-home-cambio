<template>
    <Head title="Log in" />

    <BreezeValidationErrors class="mb-4" />
    <div class="w-3/5 shadow-2xl rounded-2xl p-16">
        <div v-if="status" class="mb-4 font-medium text-sm text-green-600">
            {{ status }}
        </div>
        <h1 class=" text-2xl text-verdeOscuro font-extrabold text-center"> Iniciar Sesion</h1>

        <form class=" mt-8" @submit.prevent="submit">
            <div>

                <BreezeInput
                    id="email"
                    type="email"
                    class="mt-1 block border-2 w-full rounded-xl border-verdeOscuro"
                    v-model="form.email"
                    required
                    autofocus
                    autocomplete="username"
                    placeholder="Correo Electronico"
                />
            </div>

            <div class="mt-6">
                <BreezeInput
                    placeholder="Contraseña"
                    id="password"
                    type="password"
                    class="mt-1 block border-2 w-full rounded-xl border-verdeOscuro"
                    v-model="form.password"
                    required
                    autocomplete="current-password"
                />
            </div>

            <!-- <div class="block mt-4">
                <label class="flex items-center">
                    <BreezeCheckbox
                        name="remember"
                        v-model:checked="form.remember"
                    />
                    <span class="ml-2 text-sm text-gray-600">Remember me</span>
                </label>
            </div> -->
            <div class=" mt-8">
                <h1 class="text-center text-xl text-verdeOscuro">Iniciar sesion</h1>
                __________________________________________
            </div>
           <Link>
             <div class=" mt-6">
                <div class=" border-2 rounded-xl flex flex-row border-verdeOscuro p-2 shadow-lg">
                    <google-arcoiris class="ml-2"></google-arcoiris> <p class="ml-2 opacity-80">Iniciar con Google</p>
                </div>
            </div>
           </Link>
           <Link>
                <div class=" mt-6">
                    <div class="border-2 rounded-xl flex flex-row border-verdeOscuro p-2 shadow-lg">
                        <facebookazul class="ml-4"></facebookazul> <p class="ml-3 opacity-80">Iniciar con Facebook</p>
                    </div>
                </div>
           </Link>
            <div class="flex items-center justify-end mt-4">
                <Link
                    v-if="canResetPassword"
                    :href="route('password.request')"
                    class="underline text-sm text-gray-600 hover:text-gray-900"
                >
                    Forgot your password?
                </Link>

                <BreezeButton
                    class="ml-4"
                    :class="{ 'opacity-25': form.processing }"
                    :disabled="form.processing"
                >
                    Log in
                </BreezeButton>
            </div>
        </form>
    </div>
</template>

<script>
import BreezeButton from "@/Components/Button.vue";
import BreezeCheckbox from "@/Components/Checkbox.vue";
import BreezeGuestLayout from "@/Layouts/Guest.vue";
import BreezeInput from "@/Components/Input.vue";
import BreezeLabel from "@/Components/Label.vue";
import BreezeValidationErrors from "@/Components/ValidationErrors.vue";
import { Head, Link } from "@inertiajs/inertia-vue3";
import GoogleArcoiris from '@/Components/logos/redes/GoogleArcoiris.vue'
import Facebookazul from '@/Components/logos/redes/Facebookazul.vue'

export default {
    layout: BreezeGuestLayout,

    components: {
        BreezeButton,
        BreezeCheckbox,
        BreezeInput,
        BreezeLabel,
        BreezeValidationErrors,
        Head,
        Link,
        GoogleArcoiris,
        Facebookazul
    },

    props: {
        canResetPassword: Boolean,
        status: String,
    },

    data() {
        return {
            form: this.$inertia.form({
                email: "",
                password: "",
                remember: false,
            }),
        };
    },

    methods: {
        submit() {
            this.form.post(this.route("login"), {
                onFinish: () => this.form.reset("password"),
            });
        },
    },
};
</script>
