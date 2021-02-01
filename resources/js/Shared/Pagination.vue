<template>
  <div class="mt-6 -mb-1 flex flex-wrap">
    <nav aria-label="...">
        <ul class="pagination">
            <template v-for="(link, key) in links">
                <li v-if="link.url === null" :key="key" class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">{{ link.label }}</a>
                </li>
                <li v-else :key="key" class="page-item" :class="{ 'active': link.active }">
                    <inertia-link class="page-link" :href="link.url">{{ link.label }}</inertia-link>
                </li>
            </template>
        </ul>
    </nav>
  </div>
</template>

<script>
export default {
  props: {
    links: Array,
  },
}
</script>
