<template>
    <div class="d-flex">
        <i class="fas fa-star text-success" v-for="star in fullStar" :key="'full' + star"></i>
        <i class="fas fa-star-half-alt text-success" v-if="halfStar"></i>
        <i class="far fa-star text-secondary" v-for="star in emptyStar" :key="'empty' + star"></i>
    </div>
</template>
<script>
export default {
    props: {
        rating: Number
    },
    computed: {
        /**
         * 
         * So we will round up a rating number as follows,
         * 1.3 == 1.5  |  1.5 == 2.0  |  1.7 == 2.0
         * 
         */

        halfStar() {
            /**
             * 
             * Reason for multiplying by 100 is bcz the rounded
             * figure goes to zero for values below 0.5.
             * The reason for rounding the figure is bcz the 
             * substrated result shows in the 10th decimal place.
             * 
             */

            const fraction = Math.round((this.rating - Math.floor(this.rating)) * 100);
            //console.log('halfstar ', fraction);
            return fraction > 0 && fraction < 50;
        },
        fullStar() {
            return Math.round(this.rating);
        },
        emptyStar() {
            // if rating would be 1.9, the ceil(1.9) = 2.
            // Therefore the no. of empty stars will be,
            // 5 - 2 = 3
            return 5 - Math.ceil(this.rating);
        },
    },
    // created() {
    //     const numbers = [0.9, 4.0, 4.4, 4.5, 4.6, 4.9];
    //     numbers.forEach(n => {
    //         console.log(`round for ${n} is ${Math.round(n)}`);
    //         console.log(`floor for ${n} is ${Math.floor(n)}`);
    //         console.log(`ceil for ${n} is ${Math.ceil(n)}`);
    //         console.log('==================================');
    //     });
    // }
}
</script>