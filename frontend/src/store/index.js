import Vuex from "vuex"
import Vue from  "vue"


/*https://medium.com/codigorefinado/gerenciando-estado-com-vuex-2accf11e9849*/
Vue.use(Vuex)

const store =  new Vuex.Store({
    /*basicamente seria o estado declaro em data*/
    state:{
        user:''
    },
    /*seria o metodo, porém para alterala, precisa ser feita pelo actions*/
    mutations:{
        /*metodos, state = seria o estado e o payload novo valor*/
        setUsuario(state, payload){
            state.user = payload
        }


    },
    getters:{
  
    },
    actions:{

    }
})

export default store;

