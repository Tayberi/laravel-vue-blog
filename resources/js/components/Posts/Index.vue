<template>
    <div>
        <table class="table">
            <thead>
            <tr>
                <th>Employee</th>
                <th>Email</th>
                <th>Created date</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="user in users.data" :key="user.id">
                <td>{{ user.name }}</td>
                <td>{{ user.email }}</td>
                <td>{{ user.created_at }}</td>
                <td></td>
            </tr>
            </tbody>
        </table>

        <pagination
            :data="users"
            @pagination-change-page="getResults"
            :limit="3"
            :show-disabled="true"
            size="small"
            align="center">

            <span slot="prev-nav" style="text-decoration: underline">Предыдущая </span>
            <span slot="next-nav" style="text-decoration: underline"> Следующая</span>
        </pagination>

    </div>
</template>


<script>
import pagination from 'laravel-vue-pagination';
    export default {
        data() {
            return {
                users: {}
            }
        },
        components: {
            pagination
        },
        mounted() {
            this.getResults();
        },
        methods: {
            // Our method to GET results from a Laravel endpoint
            getResults(page = 1) {
                axios.get('/api/users?page=' + page)
                    .then(response => {
                        this.users = response.data;
                    });
            }
        }
    }
</script>
