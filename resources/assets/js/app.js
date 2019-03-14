
/**
 * First we will load all of this project's JavaScript dependencies which
<<<<<<< HEAD
 * layouts Vue and other libraries. It is a great starting point when
=======
 * include Vue and Vue Resource. This gives a great starting point for
>>>>>>> 6fb102cfe084ae84be1199fe2f65100834a307fe
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

<<<<<<< HEAD
window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));
=======
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the body of the page. From here, you may begin adding components to
 * the application, or feel free to tweak this setup for your needs.
 */

Vue.component('example', require('./components/Example.vue'));
>>>>>>> 6fb102cfe084ae84be1199fe2f65100834a307fe

const app = new Vue({
    el: '#app'
});
