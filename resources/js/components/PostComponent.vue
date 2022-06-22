<template>
    <div>
        <SinglePostComponent></SinglePostComponent>
        <table class="table w-25">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Age</th>
                <th scope="col">Job</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="person in personsAgeMoreTwenty">
                <th scope="row">{{ person.id }}</th>
                <td>{{ person.name }}</td>
                <td>{{ person.age }}</td>
                <td>{{ person.job }}</td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    import SinglePostComponent from "./SinglePostComponent";

    export default {
        name: "PostComponent",

        data() {
            return {
                persons: [
                    {
                        id: 1,
                        name: 'Vasya',
                        age: 20,
                        job: 'programmer'
                    },
                    {
                        id: 2,
                        name: 'Elena',
                        age: 25,
                        job: 'manager'
                    },
                    {
                        id: 3,
                        name: 'Petr',
                        age: 34,
                        job: 'seller'
                    },
                    {
                        id: 4,
                        name: 'Ivan',
                        age: 17,
                        job: 'trainee'
                    },
                    {
                        id: 5,
                        name: 'Sergey',
                        age: 35,
                        job: 'director'
                    }
                ]
            }
        },

        methods: {},

        computed: {
            personsAgeMoreTwenty() {
                return this.persons.filter(person => person.age > 20)
            }
        },

        components: {
            SinglePostComponent
        }
    }
</script>

<style scoped>

</style>
