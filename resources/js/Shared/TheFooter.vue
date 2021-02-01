<template>
  <CFooter :fixed="false">
    <div>
      CRUD
      <span class="ml-1">&copy; {{new Date().getFullYear()}} Laravel Vue.js.</span>
    </div>
    <div class="mfs-auto">
      <span class="mr-1" target="_blank">Feito com</span>
      Laravel e Vue
    </div>
  </CFooter>
</template>

<script>
export default {
  name: 'TheFooter'
}
</script>
