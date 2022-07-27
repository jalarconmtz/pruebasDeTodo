const app = new Vue({
    el: "#app",
    data: {
        titulo: 'Hola Mndo con Vue',
        frutas: [
            {nombre: 'Pera', cantidad:10},
            {nombre: 'Manzana', cantidad:15},
            {nombre: 'OPlatano', cantidad:0}
        ],
        nuevaFruta : '',
        total: 0
    },
    methods:{
        agregarFruta(){
            this.frutas.push({
                nombre: this.nuevaFruta, cantidad: 1
            });
            this.nuevaFruta = ''
        }
    },
    computed: {
        sumarFrutas(){
            this.total = 0;
            for(fruta of this.frutas){
                this.total = this.total + fruta.cantidad;
            }
            return this.total;
        }
    }
})