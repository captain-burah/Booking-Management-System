<template>
    <div>
        <div v-if="loading">
            Data is Loading...
        </div>
        <div class="col-md- card mb-3" v-else>
            <img src="" class="card-img-top" alt="">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-2">

                    </div>
                    <div class="col-md-10">
                        <h1 class="card-title">{{ customerIntel.fname }} {{customerIntel.lname }}</h1>
                        <p class="card-text">Email: {{ customerIntel.email }} | Password: {{ customerIntel.password }}</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    data() {
        return {
            customerIntel: null,
            loading: false,
        };
    },
    
    created() {
        this.loading = true;
        axios
        .get(`/api/customers/${this.$route.params.id}`)
        .then(response => {
            this.customerIntel = response.data.data;
            this.loading = false;
        })
    }
}
</script>