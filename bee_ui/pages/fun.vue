<template>
    <main class="h-screen bg-red">
        <h1>This is Dashboard</h1>
    </main>
</template>


<script>
export default {
    data(){
        return{
            public_path : process.env.BASE_URL
        }
    }
}
</script>