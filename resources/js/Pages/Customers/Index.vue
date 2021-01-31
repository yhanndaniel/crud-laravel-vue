<template >
    <layout>
        <div class="container">

            <div v-if="successMessage" class="alert alert-success mt-4">
                {{ successMessage }}
            </div>

            <div class="my-5">
                <inertia-link href="/customers/create" class="btn btn-primary">Criar Cliente</inertia-link>
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
                    <tr v-for="customer in customers" :key="customer.id">
                        <td>{{ customer.name }}</td>
                        <td>{{ customer.city.city }}</td>
                        <td>
                            <inertia-link :href="`/customers/${customer.id}/edit`">Editar</inertia-link>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </layout>
</template>

<script>
import Layout from "../../Layout";

export default {
    props: ['customers', 'successMessage'],

    components: { Layout },
}
</script>

<style >

</style>
