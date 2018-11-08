
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

//Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('like', require('./components/LikeComponent.vue'));
Vue.component('navbar', require('./components/navBarComponent.vue'));
Vue.prototype.$eventBus = new Vue();

const app = new Vue({
    el: '#app',
});

new Mentions({
    // Input element selector
    // Defaults to .has-mentions
    input: '.has-mentions',

    // Output form field selector
    // Defaults to #mentions
    output: '#mentions',

    // Pools
    pools: [{
        // Trigger the popup on the @ symbol
        // Defaults to @
        trigger: '@',

        // Pool name from the mentions config
        pool: 'users',

        // Same value as the pool's 'column' value
        display: 'username',

        // The model's primary key field name
        reference: 'id'
    }]
});

