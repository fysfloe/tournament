export default {
    FETCH(state, groups) {
        state.items = groups;
    },
    SHOW(state, group) {
        state.group = group;
    }
}
