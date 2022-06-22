<template>
    <div class="p-5">
        <CreateComponent></CreateComponent>
        <IndexComponent></IndexComponent>
    </div>
</template>

<script>
    import CreateComponent from "./CreateComponent";
    import IndexComponent from "./IndexComponent";

    export default {
        name: "PostComponent",

        data() {
            return {
                persons: null
            }
        },

        mounted() {

        },

        methods: {},

        computed: {},

        components: {
            CreateComponent,
            IndexComponent
        }
    }
</script>

<style scoped>

</style>
