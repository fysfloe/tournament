<template>
    <div class="container mb-4">
        <div class="row table-header">
            <div class="col-1">&nbsp;</div>
            <div class="col-4">Team</div>
            <div class="col-4"><span v-if="showParticipants">Players</span></div>
            <div class="col-1 number" title="Points" data-toggle="tooltip">P</div>
            <div class="col-1 number" title="Wins" data-toggle="tooltip">W</div>
            <div class="col-1 number" title="Losses" data-toggle="tooltip">L</div>
        </div>
        <ul>
            <li class="row" v-for="(team, key) in teams" :key="key">
                <div class="col-1">{{ key + 1 }}.</div>
                <div class="col-4">{{ team.name }}</div>
                <div class="col-4 player" v-if="showParticipants">
                    <div class="row">
                        <div class="col-6" v-for="participant in team.participants">
                            {{ participant.firstname }} {{ participant.surname }}
                        </div>
                    </div>
                </div>
                <div class="col-4" v-else>&nbsp;</div>
                <div class="col-1 number">{{ team.points }}</div>
                <div class="col-1 number">{{ team.wins }}</div>
                <div class="col-1 number">{{ team.losses }}</div> 
            </li>
        </ul>
    </div>
</template>

<script>
    import { mapState } from 'vuex';

    export default {
        name: 'group-table',
        props: {
            group: {
                type: Object
            }
        },
        mounted () {
            this.$nextTick(() => {
                $('[data-toggle="tooltip"]').tooltip()
            })
        },
        computed: {
            teams () {
                let teams = this.group ? this.group.teams : this.$store.state.groups.group.teams;

                return teams.sort((a, b) => b.points - a.points);
            },
            showParticipants () {
                return this.teams[0].participants && this.teams[0].participants.length > 0;
            }
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
    padding: 0.5rem 0;
    border-bottom: 0.1rem solid lightgrey;
}

.player {
    font-size: 0.8em;
}

.table-header {
    font-weight: bold;
    padding: 0.5rem 0;
    border-bottom: 0.1rem solid darkgrey;
    background: #eee;
}

.number {
    text-align: center;
}

.container {
    max-width: 65em;
    margin: 0;
}

</style>
