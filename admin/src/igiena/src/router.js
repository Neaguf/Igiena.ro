import Vue from "vue";
import Router from "vue-router";

Vue.use(Router);

export default new Router({
  routes: [
    { path: "/", name: "home", component: () => import("./pages/Login.vue") },
    {
      path: "/dashboard",
      name: "dashboard",
      component: () => import("./pages/Dashboard.vue"),
    },
    {
      path: "/categorii-drepturi",
      name: "categorii-drepturi",
      component: () =>
        import("./pages/categorii-drepturi/Categorii-drepturi_list.vue"),
    },
    {
      path: "/drepturi",
      name: "drepturi",
      component: () => import("./pages/drepturi/Drepturi_list.vue"),
    },
    {
      path: "/grupuri-utilizatori",
      name: "grupuri-utilizatori",
      component: () =>
        import("./pages/grupuri-utilizatori/Grupuri-utilizatori_list.vue"),
    },
    {
      path: "/utilizatori",
      name: "utilizatori",
      component: () => import("./pages/utilizatori/Utilizatori_list.vue"),
    },
    {
      path: "/blog",
      name: "blog",
      component: () => import("./pages/blog/Blog_list.vue"),
    },
    {
      path: "/saloane",
      name: "saloane",
      component: () => import("./pages/saloane/Saloane_list.vue"),
    },
    {
      path: "/evenimente",
      name: "evenimente",
      component: () => import("./pages/evenimente/Evenimente_list.vue"),
    },
  ],
});
