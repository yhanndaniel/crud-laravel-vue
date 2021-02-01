<template >
    <TheContainer>
        <div class="container">
            <div class="col-md-12">

                <div v-if="Object.keys(errors).length > 0" class="alert alert-danger mt-4">
                    {{ errors[Object.keys(errors)[0]] }}
                </div>

                <form action="/customers" method="POST" class="my-5" @submit.prevent="createCustomer">
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
                    <button type="submit" class="btn btn-primary">Criar</button>
                </form>
            </div>
        </div>
    </TheContainer>
</template>

<script>
import TheContainer from "../../Shared/TheContainer";

export default {
    props: ['cities', 'errors'],

    components: { TheContainer },

    data() {
        return {
            form: {
                name: '',
                city_id: '',
            }
        }
    },

    methods: {
        createCustomer() {
            this.$inertia.post('/customers', this.form)
                .then(() => {
                    // code
                })
        }
    }
}
</script>

<style >

</style>
