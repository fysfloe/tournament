<template>
    <div>
        <div class="container">
            <ul>
                <li v-for="(game, key) in games" :key="key">
                    <game
                        :game="game"
                    >
                    </game>
                </li>
            </ul>
        </div>
    </div>
</template>

<script>
    import { mapState } from 'vuex';
    import Game from '../Games/Game';

    export default {
        name: 'group-games',
        components: { Game },
        computed: {
            ...mapState({
                games: state => state.groups.group.games
            })
        }
    }
</script>

<style scoped>
ul {
    padding: 0;
    margin: 0;
    list-style: none;
}

li {
    border-bottom: 0.1rem solid #eee;
    padding: 1.5em 0;
}
</style>
