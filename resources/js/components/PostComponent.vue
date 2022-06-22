<template>
    <div>
        <SinglePostComponent></SinglePostComponent>
        <div>Name: {{ name }}</div>
    </div>
</template>

<script>
    import SinglePostComponent from "./SinglePostComponent";

    export default {
        name: "PostComponent",

        data() {
            return {
                name: 'Vasya',
                age: 23
            }
        },

        components: {
            SinglePostComponent
        }
    }
</script>

<style scoped>

</style>
