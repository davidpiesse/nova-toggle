import ToggleButton from 'vue-js-toggle-button'

Nova.booting((Vue, router) => {
    Vue.use(ToggleButton)
    Vue.component('index-nova-toggle', require('./components/IndexField'));
    Vue.component('detail-nova-toggle', require('./components/DetailField'));
    Vue.component('form-nova-toggle', require('./components/FormField'));
})
