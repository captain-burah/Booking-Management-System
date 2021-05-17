import VueRouter from "vue-router";
import Bookables from "./bookables/Bookables";
import Bookable from "./bookable/Bookable";
import Customer from "./customer/Customer";



const routes = [
    {
        path: "/",
        component: Bookables,
        name: "home",
    },
    {
        path: "/bookable/:id",
        component: Bookable,
        name: "Bookable",
    },
    {
        path: "/customer",
        component: Customer,
        name: "customer",
    },

];

const router = new VueRouter({
    routes, 
    mode: "history",
});



export default router;