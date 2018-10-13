<template>
    <div>
        <flash-message></flash-message>

        <div class="row">
            <div class="col text-right">
                <label for="homeGoals">{{ game.home_team.name }}</label>
            </div>
            <div class="col text-center d-flex align-items-center">
                <input :disabled="game.result" class="form-control" type="number" min="0" max="100" v-model="homeGoals" id="homeGoals">
                &nbsp;:&nbsp;
                <input :disabled="game.result" class="form-control" type="number" min="0" max="100" v-model="awayGoals" id="awayGoals">
            </div>
            <div class="col">
                <label for="awayGoals">{{ game.away_team.name }}</label>
            </div>
            <button v-if="game.result === null" class="btn btn-sm btn-primary" @click="saveResult">Save</button>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'game',
        data () {
            return {
                home: 0,
                away: 0
            }
        },
        props: {
            game: {
                type: Object,
                required: true
            }
        },
        computed: {
            homeGoals: { 
                get () {
                    return this.game.result ? this.game.result.home_goals : this.home;
                },
                set (newVal) {
                    this.home = newVal;
                }
            },
            awayGoals: {
                get () {
                    return this.game.result ? this.game.result.away_goals : this.away;
                },
                set (newVal) {
                    this.away = newVal;
                }
            }
        },
        methods: {
            saveResult () {
                if (this.homeGoals === this.awayGoals) {
                    alert('No draws allowed!');
                    return;
                }

                if (parseInt(this.homeGoals) !== 10 && parseInt(this.awayGoals) !== 10) {
                    alert('At least one team must have scored 10 goals!');
                    return;
                }
                
                if (Math.abs(this.homeGoals - this.awayGoals) < 2) {
                    alert('Goal difference must be at least 2.');
                    return;
                }

                this.$store.dispatch('results/add', {
                    'game_id': this.game.id,
                    'home_goals': this.homeGoals,
                    'away_goals': this.awayGoals,
                    'group_id': this.game.group_id
                });
            }
        }
    }
</script>

<style scoped>
.row {
    align-items: center;
    position: relative;
}

label {
    margin: 0;
}

input {
    padding: 0.25rem;
    text-align: center;
}

button {
    position: absolute;
    right: 1em;
}
</style>
