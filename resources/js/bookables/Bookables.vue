<template>
    <div class="backdrop mx-5">
        <bookable-list-item 
            item-title="Cheap Villa" 
            item-content="A very cheap Villa" 
            v-bind:price="1000.5">
        </bookable-list-item>

        <bookable-list-item 
            item-title="Cheap Villa 2" 
            item-content="A very cheap Villa 2" 
            v-bind:price="1500">
        </bookable-list-item>
    </div>
</template>

<script>
import BookableListItem from "./BookableListItem";

export default ({
    components: {
        BookableListItem
    },
    created() {
        console.log("created");
    },
    
})
</script>
<style scoped>
    .backdrop {
        color: #000200;
        border-radius: 10px;
        background: rgba(255,255,255,0.1);
        backdrop-filter: saturate(150%) blur(10px);
    }
</style>
