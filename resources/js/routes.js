import VueRouter from "vue-router";
import Bookables from "./bookables/Bookables";
import Bookable from "./bookable/Bookable";
import Customer from "./customer/Customer";
import CustomerId from "./customer/CustomerId";




const routes = [
    {
        path: "/",
        component: Bookables,
        name: "home",
    },
    {
        path: "/bookable/:id",
        component: Bookable,
        name: "bookable",
    },
    {
        path: "/customer",
        component: Customer,
        name: "customer",
    },
    {
        path: "/customer/:id",
        component: CustomerId,
        name: "customerid",
    },
];

const router = new VueRouter({
    routes, 
    mode: "history",
});



export default router;