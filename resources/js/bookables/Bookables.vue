<template>
    <div>
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
        <bookable-list-item></bookable-list-item>
        <bookable-list-item></bookable-list-item>
    </div>
</template>

<script>
import BookableListItem from "./BookableListItem";

export default ({
    components: {
        BookableListItem
    },
})
</script>
