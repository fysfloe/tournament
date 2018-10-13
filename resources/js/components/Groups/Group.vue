<template>
    <div>
        <loader v-if="isLoading"></loader>
        <div v-else>
            <h1>{{ group.name }}</h1>

            <ul class="nav nav-tabs mt-3">
                <li class="nav-item">
                    <router-link class="nav-link" :to="`/groups/${id}/table`">
                        Table
                    </router-link>
                </li>
                <li class="nav-item">
                    <router-link class="nav-link" :to="`/groups/${id}/games`"> 
                        Games
                    </router-link>
                </li> 
            </ul>

            <div class="mt-3">
                <router-view></router-view>
            </div>
        </div>
    </div>
</template>

<script>
    import { mapState } from 'vuex';

    export default {
        props: {
            id: {
                required: true
            }
        },
        data () {
            return {
                isLoading: true
            }
        },
        mounted () {
            this.$store.dispatch('groups/show', this.id)
                .then(() => this.isLoading = false); 
        },
        computed: {
            ...mapState({
                group: state => state.groups.group
            })
        },
        watch: {
            id (newId, oldId) {
                this.isLoading = true;

                this.$store.dispatch('groups/show', newId)
                    .then(() => this.isLoading = false);
            }
        }
    }
</script>
