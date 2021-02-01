<template >
    <TheContainer>
        <div class="container">
            <div class="col-md-12">

                <div v-if="Object.keys(errors).length > 0" class="alert alert-danger mt-4">
                    {{ errors[Object.keys(errors)[0]] }}
                </div>

                <form action="/customers" method="POST" class="my-5" @submit.prevent="updateCustomer">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Nome" v-model="form.name">
                    </div>
                    <div class="form-group">
                        <label for="city">Cidade</label>
                        <select class="form-control" id="city" v-model="form.city_id">
                            <option value="">Selecione</option>
                            <option v-for="city in cities" v-bind:value="city.id" v-bind:key="city.id">{{ city.city }}</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary" :disabled="loading">Atualizar</button>
                </form>

                <button class="btn btn-danger" @click="deleteCustomer"><CIcon name="cil-trash"/> Deletar Cliente</button>
            </div>
        </div>
    </TheContainer>
</template>

<script>
import TheContainer from "../../Shared/TheContainer";

export default {
    props: ['customer', 'cities', 'errors'],

    components: { TheContainer },

    data() {
        return {
            loading: false,
            form: {
                name: this.customer.name,
                city_id: this.customer.city_id,
            }
        }
    },

    methods: {
        updateCustomer() {
            this.loading = true;
            this.$inertia.patch(`/customers/${this.customer.id}`, this.form)
                .then(() => {
                    this.loading = false;
                })
        },
        deleteCustomer() {
            if (confirm('Tem certeza que deseja apagar esse cliente?')) {
                this.$inertia.delete(`/customers/${this.customer.id}`)
                    .then(() => {

                    })
            }
        }
    }
}
</script>

<style >

</style>
