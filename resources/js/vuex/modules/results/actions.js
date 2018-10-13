import axios from 'axios';
import paths from '../../../api';

const namespace = 'results';

export default {
    add({}, result) {
        axios.post(`${paths.results}`, result)
            .then(() => this.dispatch(`groups/show`, result.group_id));
    },
    edit({}, result) {
        axios.put(`${paths.results}/${result.id}`, result)
            .then(() => this.dispatch(`groups/fetch`));
    }
}
