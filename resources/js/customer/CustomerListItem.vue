<template>
    <div class="card w-100 customer">
        <div class="card-body">
                <h4 class="card-title">{{ firstName }}</h4>
                <p class="card-text">{{ lastName }}</p>
                <p class="card-text">{{ email }}</p>
        </div>
    </div>
</template>
<script>

export default {
    props: {
        'firstName': String, 'lastName': String, 'email': String
    }
}
</script>
<style scoped>
    .card{
        background: rgba(255,255,255,0.2);
        backdrop-filter: saturate(150%) blur(12px);
    }
    .customer:hover {
        border-radius: 10px;
        background-color: rgba(255, 255, 255, 0);
        backdrop-filter: saturate(150%) blur(10px);
        box-shadow: 5px 7px #888888;
        transition: border-radius 250ms, box-shadow 250ms;
    }
</style>
