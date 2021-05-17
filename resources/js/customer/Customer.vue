<template>
    <div class="mx-5">


        Rows is: {{ rows }}
        <div 
        v-if="loading">
            Data is loading..
        </div>


        <div v-else class="row"
            v-for="rowId in rows" 
            :key="'row' + rowId"
        >

            <div class="col  d-flex align-items-stretch" 
                v-for="(customer, column) in customersInRow(rowId)" 
                :key="'column' + column"
            >
                <customer-list-item
                    :first-name="customer.fname"
                    :last-name="customer.lname"
                    :email="customer.email"
                >
                </customer-list-item>
            </div>
            <div class="col" v-for="p in placeholdersInRow(rowId)" :key="'row' + p">
            </div>
        </div>
    </div>
</template>
<script>
import CustomerListItem from "./CustomerListItem";
export default {
    components: {
        CustomerListItem
    },

    data() {
        return {
            customers: null,
            loading: false,
            columns: 3,
        }
    },
    computed: {
        rows() {
            return this.customers === null
            ? 0
            : Math.ceil(this.customers.length / this.columns);
        }
    },
    methods: {
        customersInRow(row) {
            return this.customers.slice((row - 1) * this.columns, row * this.columns);
        },
        placeholdersInRow(row){
            return this.columns - this.customersInRow(row).length;
        }        
    },
    created() {
        this.loading = true;
        setTimeout(() => {
        this.customers = 
            [
                {
                    fname: "John",
                    lname: "Abraham",
                    email: "fds@fds.com",
                },
                {
                    fname: "John",
                    lname: "Abraham",
                    email: "fds@fds.com",
                },
            ];
            this.loading = false;
            console.log(this.customers);
        }, 3000);
        console.log(this.customers);
    }

}
</script>
<style scoped> 
    .backdrop {
        color: #000200;
        border-radius: 10px;
        background: rgba(255,255,255,0.1);
        backdrop-filter: saturate(150%) blur(10px);
    }
</style>