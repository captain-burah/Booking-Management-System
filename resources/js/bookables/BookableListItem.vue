<template>
    <div class="card w-100">
        <div class="card-body">
            <router-link :to="{ name: 'bookable', params: {id } }">
                <h4 class="card-title">{{ title }}</h4>
            </router-link>
            <p class="card-text m-0">{{ description }}</p>
            <p class="card-text">Starting from {{  id }} onwards</p>
        </div>
    </div>
</template>
<script>

export default {
    props: {'title': String, 'description': String, 'id': Number}
    };
</script>
<style scoped>
    .card{
        background: rgba(255,255,255,0.2);
        backdrop-filter: saturate(150%) blur(12px);
    }
</style>