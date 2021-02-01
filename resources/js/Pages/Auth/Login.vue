<template>
    <div class="text-center vsc-initialized">
        <form class="form-signin" @submit.prevent="submit">
            <img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
            <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
            <label for="inputEmail" class="sr-only">Email</label>
            <input type="email" id="inputEmail" class="form-control" placeholder="Email" v-model="form.email" required="" autofocus="">
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" v-model="form.password" required="">
            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" v-model="form.remember"> Remember me
                </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit" :disabled="sending">Login</button>
            <p class="mt-5 mb-3 text-muted">© 2021-2021</p>
        </form>
    </div>
</template>

<script>
export default {
  props: ['errors'],
  data() {
    return {
      sending: false,
      form: {
        email: 'admin@test.com',
        password: 'admin@secret',
        remember: true,
      },
    }
  },
  methods: {
    submit() {
      const data = {
        email: this.form.email,
        password: this.form.password,
        remember: this.form.remember,
      }
      this.$inertia.post('/login', data, {
        onStart: () => this.sending = true,
        onFinish: () => this.sending = false,
      })
    },
  },
}
</script>

<style>
    body {
        padding-top: 100px;
        padding-bottom: 40px;
    }
    .form-signin {
        width: 100%;
        max-width: 330px;
        padding: 15px;
        margin: 0 auto;
    }
</style>
