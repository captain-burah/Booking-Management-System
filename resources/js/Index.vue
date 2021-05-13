<template>
    <div>
        <nav class="shadow navbar navbar-light">
            <router-link class="navbar-brand mr-auto" :to="{name: 'home'}">Booking System</router-link>
            <router-link class="text-dark btn nav-button" :to="{name: 'second'}">Component Test</router-link>
        </nav>

        <div class="container mt-4 px-3">
            <router-view></router-view>
        </div>
        
    </div>
</template>
<style scoped>
    .navbar {
        backdrop-filter: saturate(130%) blur(3px);
    }
</style>