import config from "../config";

export default {
    data() {
        return {
            mini: false,
            loading: false,
            lignes: [],
            delegues: [],
            etudiants: [],
            voyages: [],
        }
    },
    mounted() {

    },
    methods: {
        backendImage(url) {
            return config.app_local ? config.app_back_debug_url + "/" + url : config.app_live_url + "/" + url
        },
        async logout() {
            await this.$store.dispatch('auth/logout')
            window.location = '/auth/login'
        },
        async getEtudiants(){
            await axios.get("/user/get-by-role/" + 0)
                .then(res => {
                    if(!res.data.error){
                        this.etudiants = res.data.user
                    }
                })
                .catch(error => {
                    console.log(error)
                })
        },
        async getDelegues(){
            await axios.get("/affectation")
                .then(res => {
                    if(!res.data.error){
                        this.delegues = res.data.data
                    }
                })
                .catch(error => {
                    console.log(error)
                })
        },
        async getLigneBus(){
            await axios.get("/ligne")
                .then(res => {
                    if(!res.data.error){
                        this.lignes = res.data.lignes
                    }
                })
                .catch(error => {
                    console.log(error)
                })
        },
        async getListeVoyage(){
            this.loading = true
            await axios.get("/voyage/get-all")
                .then(res => {
                    if(!res.data.error){
                        this.voyages = res.data.data
                        this.voyages.sort((a, b) => {
                            // Convertissez les dates en objets Date pour les comparer
                            const dateA = new Date(a.created_at);
                            const dateB = new Date(b.created_at);

                            // Triez par ordre décroissant en soustrayant les dates
                            return dateB - dateA;
                        });
                    }
                    this.loading = false
                })
                .catch(error => {
                    console.log(error)
                })
        },
        formatDate(dateString) {
            const options = {
                weekday: 'long', // Jour de la semaine complet (ex. "Lundi")
                day: 'numeric', // Jour du mois (ex. "08")
                month: 'long', // Mois complet (ex. "Juin")
                year: 'numeric', // Année (ex. "2023")
                hour: '2-digit', // Heure (ex. "14")
                minute: '2-digit', // Minute (ex. "30")
            };

            const date = new Date(dateString);
            return date.toLocaleString("fr-FR", options);
        },
        formatDateWithoutHour(dateString) {
            const options = {
                weekday: 'long', // Jour de la semaine complet (ex. "Lundi")
                day: 'numeric', // Jour du mois (ex. "08")
                month: 'long', // Mois complet (ex. "Juin")
                year: 'numeric', // Année (ex. "2023")
            };

            const date = new Date(dateString);
            return date.toLocaleString("fr-FR", options);
        },
    },
}
