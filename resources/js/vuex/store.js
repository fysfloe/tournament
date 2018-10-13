import Vue from 'vue'
import Vuex from 'vuex'
import { createFlashStore } from 'vuex-flash'

Vue.use(Vuex);

import groups from './modules/groups/store';
import participants from './modules/participants/store';
import results from './modules/results/store';

export default new Vuex.Store({
    plugins: [
        createFlashStore()
    ],
    modules: {
        groups: groups,
        participants: participants,
        results: results
    }
})
