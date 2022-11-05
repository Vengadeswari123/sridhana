/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue').default;

import Toast from "vue-toastification";
import "vue-toastification/dist/index.css";
Vue.use(Toast);

Vue.use(require('vue-moment'));
import vSelect from 'vue-select'
Vue.component('v-select', vSelect)
import 'vue-select/dist/vue-select.css';


Vue.component('vue-inputtext', require('./components/inputcomp/inputtext.vue').default);
Vue.component('vue-inputtextarea', require('./components/inputcomp/inputtextarea.vue').default);
Vue.component('vue-inputvselect', require('./components/inputcomp/inputvueselect.vue').default);
Vue.component('vue-inputvmselect', require('./components/inputcomp/inputvueselectmultiple.vue').default);
Vue.component('vue-inputselect', require('./components/inputcomp/inputselect.vue').default);
Vue.component('vue-inputfile', require('./components/inputcomp/inputfile.vue').default);
Vue.component('vue-inputeditor', require('./components/inputcomp/vueeditorx.vue').default);

Vue.component('productcard', require('./components/productcard.vue').default);
Vue.component('product-search', require('./components/General/Search.vue').default);
Vue.component('product-carousellist', require('./components/General/carousellist.vue').default);




Vue.component('vue-admin-master-subcategory', require('./components/Admin/Master/subcategory.vue').default);
Vue.component('admin-product-pricing', require('./components/Admin/Product/pricing.vue').default);
Vue.component('admin-product-attribute', require('./components/Admin/Product/attribute.vue').default);
Vue.component('admin-product-category', require('./components/Admin/Product/category.vue').default);


// Vue.component('aframe-link', require('./components/Aframe/Link.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});
