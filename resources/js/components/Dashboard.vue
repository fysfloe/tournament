<template>
    <div>
        <h1>Dashboard</h1>

        <div class="row mt-4">
            <div class="col-6" v-for="group in groups.items">
                <h2><router-link :to="`/groups/${group.id}`">{{ group.name }}</router-link></h2>
                <group-table
                    :group="group"
                ></group-table>
            </div>
        </div>
    </div>
</template>

<script>
    import { mapState } from 'vuex';
    import GroupTable from './Groups/GroupTable';

    export default {
        components: { GroupTable },
        mounted() {
            this.$store.dispatch('groups/fetch');
        },
        computed: {
            ...mapState({
                groups: state => state.groups
            })
        }
    }
</script>
