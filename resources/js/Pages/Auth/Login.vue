<template>
  <div class="c-app flex-row align-items-center">
    <CContainer>
      <CRow class="justify-content-center">
        <CCol md="6">
          <CCardGroup>
            <CCard class="p-4">
              <CCardBody>
                <CForm @submit.prevent="submit">
                  <h1>Login</h1>
                  <p class="text-muted">Faça login em sua conta</p>
                  <CInput
                    placeholder="Username"
                    autocomplete="username email"
                    v-model="form.email"
                  >
                    <template #prepend-content><CIcon name="cil-user"/></template>
                  </CInput>
                  <CInput
                    placeholder="Password"
                    type="password"
                    autocomplete="curent-password"
                    v-model="form.password"
                  >
                    <template #prepend-content><CIcon name="cil-lock-locked"/></template>
                  </CInput>
                  <CRow>
                    <CCol col="6" class="text-left">
                      <CButton type="submit" color="primary" class="px-4">Login</CButton>
                    </CCol>
                    <CCol col="6" class="text-right">
                      <CButton color="link" class="d-lg-none">Register now!</CButton>
                    </CCol>
                  </CRow>
                </CForm>
              </CCardBody>
            </CCard>
          </CCardGroup>
        </CCol>
      </CRow>
    </CContainer>
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
