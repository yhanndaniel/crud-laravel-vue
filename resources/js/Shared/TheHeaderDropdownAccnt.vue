<template>
  <CDropdown
    inNav
    class="c-header-nav-items"
    placement="bottom-end"
    add-menu-classes="pt-0"
  >
    <template #toggler>
      <CHeaderNavLink>
        <div class="c-avatar">
          <img
            src="img/avatars/7.jpg"
            class="c-avatar-img "
          />
        </div>
      </CHeaderNavLink>
    </template>
    <CDropdownHeader
      tag="div"
      class="text-center"
      color="light"
    >
      <strong>Configurações</strong>
    </CDropdownHeader>
    <CDropdownDivider/>
    <CDropdownItem  @click="logout">
      <CIcon name="cil-lock-locked" /> Sair
    </CDropdownItem>
  </CDropdown>
</template>

<script>
export default {
    name: 'TheHeaderDropdownAccnt',
    methods: {
        logout() {
            this.$inertia.post('/logout/')
                .then(() => {

                })
        },
    },
    data () {
        return {
            itemsCount: 42
        }
    }
}
</script>

<style scoped>
  .c-icon {
    margin-right: 0.3rem;
  }
</style>
