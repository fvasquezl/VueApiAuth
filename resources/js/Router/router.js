import Vue from "vue";
import VueRouter from "vue-router";
Vue.use(VueRouter);

import Login from "../components/login/Login.vue";
import SignUp from "../components/login/Signup.vue";
import Forum from "../components/forum/Forum";
import Logout from "../components/login/Logout";

const routes = [
    { path: "/login", component: Login },
    { path: "/logout", component: Logout },
    { path: "/signup", component: SignUp },
    { path: "/forum", component: Forum, name: "forum" }
];

const router = new VueRouter({
    routes,
    hashbang: false,
    mode: "history"
});

export default router;
