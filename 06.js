const app = new Vue({
    el: "#app",
    data: {
       saludo: 'Soy un ciclo de vida de vue'
    },
    beforeCreate(){
        console.log('BeforeCreate');
    }
   
})