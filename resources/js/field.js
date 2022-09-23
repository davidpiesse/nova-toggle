import IndexField from './components/IndexField'
import DetailField from './components/DetailField'
import FormField from './components/FormField'

if (localStorage.novaTheme === 'dark' || (!('novaTheme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
    document.documentElement.classList.add('tw-dark')
  } else {
    document.documentElement.classList.remove('tw-dark')
  }

Nova.booting((app, store) => {
  app.component('index-nova-toggle', IndexField)
  app.component('detail-nova-toggle', DetailField)
  app.component('form-nova-toggle', FormField)
})
