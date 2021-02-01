import { App, plugin } from '@inertiajs/inertia-vue'
import Vue from 'vue'
import { library } from '@fortawesome/fontawesome-svg-core'
import { faSortAlphaDown } from '@fortawesome/free-solid-svg-icons'
import { faSortAlphaUp } from '@fortawesome/free-solid-svg-icons'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'

library.add(faSortAlphaDown)
library.add(faSortAlphaUp)

Vue.component('font-awesome-icon', FontAwesomeIcon)

Vue.use(plugin)

const el = document.getElementById('app')

new Vue({
  render: h => h(App, {
    props: {
      initialPage: JSON.parse(el.dataset.page),
      resolveComponent: name => require(`./Pages/${name}`).default,
    },
  }),
}).$mount(el)
