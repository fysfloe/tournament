import Vue from 'vue';
import Vuex from 'vuex';
import mutations from './mutations';
import actions from './actions';

export default {
    namespaced: true,
    state: {user: {}},
    mutations: mutations,
    actions: actions
};
