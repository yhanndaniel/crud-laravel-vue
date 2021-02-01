<template>
  <CSidebar
    fixed
    :minimize="minimize"
    :show="show"
    @update:show="(value) => $store.commit('set', ['sidebarShow', value])"
  >
    <CSidebarBrand class="d-md-down-none" to="/">
        <span class="c-sidebar-brand-full">
            Laravel Vue.js
        </span>
        <span class="c-sidebar-brand-minimized">
            LVUE
        </span>
    </CSidebarBrand>

    <ul class="c-sidebar-nav h-100 ps">
        <li class="c-sidebar-nav-item">
            <inertia-link class="c-sidebar-nav-link" href="/"><CIcon name="cil-speedometer" class="ci-primary" /> Home</inertia-link>
        </li>
        <li class="c-sidebar-nav-item">
            <inertia-link class="c-sidebar-nav-link" href="/customers"><CIcon name="cil-user" /> Clientes</inertia-link>
        </li>
    </ul>

    <CSidebarMinimizer
      class="d-md-down-none"
      @click.native="$store.commit('set', ['sidebarMinimize', !minimize])"
    />
  </CSidebar>
</template>

<script>
import nav from './_nav'

export default {
  name: 'TheSidebar',
  nav,
  computed: {
    show () {
      return this.$store.state.sidebarShow
    },
    minimize () {
      return this.$store.state.sidebarMinimize
    }
  }
}
</script>
