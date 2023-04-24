const {createApp} = Vue;

createApp({

    data() {
        return {
            activities: [],

            newActivity: '',
        }
    },

    methods: {
        AxiosResponse(){
            axios.get('./server.php').then(response =>{
                console.log(response.data);

                this.activities = response.data;
            });
        },

        addActivity(){
            this.activities.push(this.newActivity);
        },
    },

    mounted() {
        this.AxiosResponse();
        },

    

}).mount('#app');