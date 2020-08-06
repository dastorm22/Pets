require('./bootstrap');

window.Vue = require('vue');

//Import Vue Filter
require('./filter');

//Import progressbar
require('./progressbar');

//Setup custom events
require('./customEvents');


import Vue from 'vue'
import VueRouter from 'vue-router'
import VModal from 'vue-js-modal';
Vue.use(VueRouter)
Vue.use(VModal);


window.Vue = require('vue');
import moment from 'moment';
import { Form, HasError, AlertError, AlertErrors, AlertSuccess } from 'vform';

import Gate from "./Gate";
Vue.prototype.$gate = new Gate(window.user);


import swal from 'sweetalert2'
window.swal = swal;

const toast = swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000
  });

  window.toast = toast;
  window.Form = Form;

  Vue.component(HasError.name, HasError)
  Vue.component(AlertError.name, AlertError)
  Vue.component(AlertErrors.name, AlertErrors)
  Vue.component(AlertSuccess.name, AlertSuccess)

import Profile from './components/Profile';
import ProfileEdit from './components/ProfileEdit';
import Home from './components/Home';


Vue.filter('upText', function(text){
    return text.charAt(0).toUpperCase() + text.slice(1)
});

Vue.filter('myDate',function(created){
    return moment(created).format('MMMM Do YYYY');
});


const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/home',
            name: 'home',
            component: Home
        },
        {
            path: '/profile',
            name: 'profile',
            component: Profile,
        },
        {
            path: '/profiledit',
            name: 'profiledit',
            component: ProfileEdit,
        },

    ],
});

const app = new Vue({
    el: '#app',
    router,
    data:{
        search: ''
    },
    methods:{
        searchit: _.debounce(() => {
            Fire.$emit('searching');
        },1000),

        printme() {
            window.print();
        }
    }
});

Vue.component('Profile', require('./components/Profile.vue').default);
Vue.component('ProfileEdit', require('./components/ProfileEdit.vue').default);
Vue.component('Home', require('./components/Home.vue').default);
Vue.component('UploadButton', require('./components/UploadButton.vue').default);

window.Fire =  new Vue();

//Import Sweetalert2
import Swal from 'sweetalert2'
window.Swal = Swal
const Toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 3000,
  timerProgressBar: true,
  onOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
  }
});
window.Toast = Toast;
