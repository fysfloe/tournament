import Dashboard from './components/Dashboard.vue';
import Groups from './components/Groups/Groups';
import Participants from './components/Participants/Participants';
import Group from './components/Groups/Group';
import GroupTable from './components/Groups/GroupTable';
import GroupGames from './components/Groups/GroupGames';

export const routes = [
    { path: '/', component: Dashboard, name: 'Dashboard' },
    { path: '/groups', component: Groups, name: 'Groups' },
    { 
        path: '/groups/:id', 
        component: Group, 
        props: true,
        children: [
            {
                path: '',
                component: GroupTable
            },
            {
                path: 'table',
                component: GroupTable
            },
            {
                path: 'games',
                component: GroupGames
            }
        ]
    },
    { path: '/participants', component: Participants, name: 'Participants' } 
];
