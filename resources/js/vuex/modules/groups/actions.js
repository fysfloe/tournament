import axios from 'axios';
import paths from '../../../api';

const namespace = 'groups';

export default {
    fetch({ commit }) {
        return axios.get(paths.groups)
            .then(response => commit('FETCH', response.data))
            .catch();
    },
    show({ commit }, id) {
        return axios.get(`${paths.groups}/${id}`)
            .then(response => commit('SHOW', response.data))
            .catch();
    },
    delete({}, id) {
        axios.delete(`${paths.groups}/${id}`)
            .then(() => this.dispatch(`${namespace}/fetch`))
            .catch();
    },
    edit({}, group) {
        axios.put(`${paths.groups}/${group.id}`, group)
            .then(() => this.dispatch(`${namespace}/fetch`));
    },
    add({}, group) {
        axios.post(`${paths.groups}`, group)
            .then(() => this.dispatch(`${namespace}/fetch`));
    }
}
