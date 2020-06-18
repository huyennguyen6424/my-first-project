import Vue from 'vue';
import VueRouter from 'vue-router';
import App from './App.vue';
import Home from './components/Home.vue';
import Login from './components/Login.vue';
import Register from './components/Register.vue';
import ForgotPassword from './components/ForgotPassword.vue';




Vue.use(VueRouter);

const router = new VueRouter({
    routes: [{
            path: '/',
            name: 'home',
            component: Home
        },
        {
            path: '/login',
            name: 'login',
            component: Login
        },
        {
            path: '/register',
            name: 'register',
            component: Register
        },
        {
            path: '/forgotpassword',
            name: 'forgotpassword',
            component: ForgotPassword
        }
    ]
});

// new Vue({
//     el: '#app',
//     router: router,
//     render: app => app(App)
// });
new Vue({
    router,
    render: h => h(App)
}).$mount('#app')