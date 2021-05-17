<template>
    <div class="mx-5">


        Rows is: {{ rows }}
        <div 
        v-if="loading">
            Data is loading..
        </div>


        <div v-else class="row py-2"
        v-for="rowId in rows" 
        :key="'row' + rowId"
        >

            <div class="col" 
            v-for="(customer, column) in customersInRow(rowId)" 
            :key="'column' + column"
            >
                <router-link class="d-flex align-items-stretch  text-decoration-none text-reset"
                :to="{name: 'customerid', params: {id: customer.id}}"
                >
                    <customer-list-item 
                    :first-name="customer.fname"
                    :last-name="customer.lname"
                    :email="customer.email"
                    >
                    </customer-list-item>
                </router-link>
                
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
        },
    },
    created() {
        this.loading = true;
        
        const request = axios
        .get(`/api/customers`)
        .then(response => {
            this.customers = response.data;
            this.loading = false;
        });
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