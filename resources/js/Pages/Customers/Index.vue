<template >
    <layout>
        <div class="container">

            <div v-if="successMessage" class="alert alert-success mt-4">
                {{ successMessage }}
            </div>

            <div class="row">
                <div class="col-md-12">
                    <form class="d-flex justify-content-between my-5" @submit.prevent="findCustomer">
                        <input class="form-control me-1 mx-1" type="search" placeholder="Buscar" v-model="form.search" aria-label="Buscar" style="max-width: 70%;">
                        <button class="btn btn-outline-success mx-1" type="submit">Buscar</button>
                        <button class="btn btn-outline-danger mx-1" @click="reset">Limpar</button>
                        <inertia-link href="/customers/create" class="btn btn-primary mx-1">Criar Cliente</inertia-link>
                    </form>
                </div>
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Cidade</th>
                        <th scope="col">Ação</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="customer in customers.data" :key="customer.id">
                        <td>{{ customer.name }}</td>
                        <td>{{ customer.city.city }}</td>
                        <td>
                            <inertia-link :href="`/customers/${customer.id}/edit`">Editar</inertia-link>
                        </td>
                    </tr>
                </tbody>
            </table>
            <pagination :links="customers.links" />
        </div>
    </layout>
</template>

<script>
import Layout from "../../Shared/Layout";
import Pagination from "../../Shared/Pagination";

export default {
    props: ['customers', 'successMessage', 'search'],

    components: {
        Layout,
        Pagination
    },

    data() {
        return {
            form: {
                search: this.search,
            }
        }
    },

    methods: {
        findCustomer() {
            this.$inertia.get('/customers', this.form)
                .then(() => {
                    // code
                })
        },
        reset() {
            this.form.search = null;
            this.$inertia.get('/customers', this.form)
                .then(() => {
                    // code
                })
        }
    }

}
</script>

<style >

</style>
