<template>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <router-link to="/"><a class="navbar-brand">Tournament</a></router-link>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <router-link to="/"><a class="nav-link">Dashboard</a></router-link>
                </li>
                <li class="nav-item" v-for="(group, key) in groups.items" :key="key">
                    <router-link :to="`/groups/${group.id}`"><a class="nav-link">{{ group.name }}</a></router-link>
                </li>
            </ul>
        </div>

        <flash-message variant="success"></flash-message>
        <flash-message variant="danger"></flash-message>
    </nav>
</template>

<script>
import { mapState } from 'vuex';

export default {
    mounted() {
        this.$store.dispatch('groups/fetch');
    },
    computed: {
        ...mapState(['groups'])
    },
    methods: {
    }
}
</script>
