<template>
    <div>
        <h4 class="text-uppercase text-secondary font-weight-bolder">Check Availability</h4>


        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="from">From</label>
                <input 
                    type="text" 
                    name="from" 
                    class="form-control form-control-sm" 
                    placeholder="Start Date"
                    v-model="from"
                    v-on:keyup.enter="check"
                >
            </div>

            <div class="form-group col-md-6">
                <label for="to">To</label>
                <input 
                    type="text" 
                    name="to" 
                    class="form-control form-control-sm" 
                    placeholder="End Date"
                    v-model="to"
                    v-on:keyup.enter="check"
                >
            </div>
        </div>

        <button class="btn btn-secondary btn-block" v-on:click="check">Check</button>

    </div>
</template>

<script>
export default {
    data() {
        return {
            from: null,
            to: null
        }
    },
    methods: {
        check() {
            alert('i will check something');
        }
    }
}
</script>

<style scoped>
    label {
        font-size: 0.7rem;
        text-transform: uppercase;
        color: gray;
        font-weight: bolder;
    }
</style>