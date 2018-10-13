import axios from 'axios';
import paths from '../../../api';

export default {
    fetch({ commit }) {
        return axios.get(paths.user)
            .then(response => commit('FETCH', response.data), error => {})
            .catch();
    },
    logout({ commit }) {
        axios.post('/logout').then(() => window.location.reload, (response) => {});
    }
}
