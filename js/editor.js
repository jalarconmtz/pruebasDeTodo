var demo = new Vue({
    el: '#main',
    data: {
        active: 'home'
    },
    methods: {
        makeActive(item){
            this.active = item;
        }
    }
})