/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import Vue from 'vue'
import { createInertiaApp } from '@inertiajs/inertia-vue'

Vue.prototype.$route = route

const app = document.getElementById('app')

if (app) {
    createInertiaApp({
        resolve: name => require(`./Pages/${name}`),
        setup({ el, App, props }) {
            new Vue({
                render: h => h(App, props),
            }).$mount(el)
        },
    })
}

