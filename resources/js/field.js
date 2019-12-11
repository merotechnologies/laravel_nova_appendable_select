Nova.booting((Vue, router, store) => {
  Vue.component('index-appendable-dynamic-dropdown', require('./components/IndexField'))
  Vue.component('detail-appendable-dynamic-dropdown', require('./components/DetailField'))
  Vue.component('form-appendable-dynamic-dropdown', require('./components/FormField'))
})
