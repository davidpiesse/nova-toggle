import ToggleButton from 'vue-js-toggle-button'
import VueSweetalert2 from 'vue-sweetalert2';

Nova.booting((Vue, router) => {
    Vue.use(ToggleButton)
    Vue.use(VueSweetalert2)
    Vue.component('index-nova-toggle', require('./components/IndexField'));
    Vue.component('detail-nova-toggle', require('./components/DetailField'));
    Vue.component('form-nova-toggle', require('./components/FormField'));
})
