import axios from 'axios';
import paths from '../../../api';

const namespace = 'participants';

export default {
    fetch({ commit }) {
        return axios.get(paths.participants)
            .then(response => commit('FETCH', response.data))
            .catch();
    },
    delete({}, id) {
        axios.delete(`${paths.participants}/${id}`)
            .then(() => this.dispatch(`${namespace}/fetch`))
            .catch();
    },
    edit({}, participant) {
        axios.put(`${paths.participants}/${participant.id}`, participant)
            .then(() => this.dispatch(`${namespace}/fetch`));
    },
    add({}, participant) {
        axios.post(`${paths.participants}`, participant)
            .then(() => this.dispatch(`${namespace}/fetch`));
    }
}
