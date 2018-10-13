import mutations from './mutations';
import actions from './actions';

export default {
    namespaced: true,
    state: {
        items: [],
    },
    mutations: mutations,
    actions: actions
};
