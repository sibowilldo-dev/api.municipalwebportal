import Vue from 'vue'
import Vuex from 'vuex'
import axios from 'axios'
import VueAxios from 'vue-axios'

Vue.use(Vuex)
Vue.use(VueAxios, axios)

export default{
    state:{
        incidents:[]
    },
    getters: {
        allIncidents: state =>{
            return state.incidents
        }
    },
    actions:{
        fetchIncidents ({ commit }){
            axios
                .get('/api/auth/incidents')
                .then(response => response.data)
                .then(incidents => {
                    commit('SET_INCIDENTS', incidents)
                })
        }
    },
    mutations:{
        SET_INCIDENTS(state, incidents){
            state.incidents = incidents.data
        }
    }
};