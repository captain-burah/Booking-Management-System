<template>
    <div class="card w-100">
        <div class="card-body">
            <h4 class="card-title">{{ itemTitle }}</h4>
            <p class="card-text m-0">{{ itemContent }}</p>
            <p class="card-text">Starting from {{  price }} onwards</p>
        </div>
    </div>
</template>
<script>

export default {
    props: {'itemTitle': String, 'itemContent': String, 'price': Number}
    };
</script>
<style scoped>
    .card{
        background: rgba(255,255,255,0.2);
        backdrop-filter: saturate(150%) blur(12px);
    }
</style>