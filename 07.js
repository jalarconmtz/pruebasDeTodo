Vue.component('saludo', {
    template: '<h1>{{saludo}}</h1>',
    data(){
        return {
            saludo: 'Hola desde veu'
        }
    }
})

const app = new Vue({
    el: "#app",
    
})