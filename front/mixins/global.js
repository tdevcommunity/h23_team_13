import config from "../config";
import { mapGetters } from "vuex";
import Cookies from 'js-cookie'


export default {
    data() {
        return {
            userInfo: null,
            loading: false,
            technologies: [
                { name: "Python", type: "Langage de programmation" },
                { name: "JavaScript", type: "Langage de programmation" },
                { name: "Java", type: "Langage de programmation" },
                { name: "C#", type: "Langage de programmation" },
                { name: "C++", type: "Langage de programmation" },
                { name: "Ruby", type: "Langage de programmation" },
                { name: "PHP", type: "Langage de programmation" },
                { name: "Swift", type: "Langage de programmation" },
                { name: "Go", type: "Langage de programmation" },
                { name: "React", type: "Framework (web)" },
                { name: "Angular", type: "Framework (web)" },
                { name: "Vue.js", type: "Framework (web)" },
                { name: "Ruby on Rails", type: "Framework (web)" },
                { name: "Django", type: "Framework (web)" },
                { name: "Express.js", type: "Framework (web)" },
                { name: "Spring Boot", type: "Framework (web)" },
                { name: "Laravel", type: "Framework (web)" },
            ],
            fonctions: [
                { id: 1, nom: "Développeur Web Front-End" },
                { id: 2, nom: "Développeur Web Back-End" },
                { id: 3, nom: "Développeur Full-Stack" },
                { id: 4, nom: "Ingénieur DevOps" },
                { id: 5, nom: "Architecte de Solutions Cloud" },
                { id: 6, nom: "Analyste de Données" },
                { id: 7, nom: "Data Scientist" },
                { id: 8, nom: "Administrateur Systèmes" },
                { id: 9, nom: "Ingénieur en Cybersécurité" },
                { id: 10, nom: "Concepteur UX/UI" },
                { id: 11, nom: "Analyste en Business Intelligence" },
                { id: 12, nom: "Ingénieur Réseau" },
                { id: 13, nom: "Ingénieur en Intelligence Artificielle" },
                { id: 14, nom: "Spécialiste en Réalité Virtuelle/Augmentée" },
                { id: 15, nom: "Scrum Master" },
                { id: 16, nom: "Chef de Projet en Technologie" },
                { id: 17, nom: "Ingénieur en Automatisation des Tests" },
                { id: 18, nom: "Ingénieur en Systèmes Embarqués" },
                { id: 19, nom: "Ingénieur en Robotique" },
                { id: 20, nom: "Analyste en Blockchain" }
            ],
        }
    },

    mounted(){
        this.getUser()
    },
    methods: {
        getUser(){
            const userCookie = Cookies.get('user'); // Récupère la valeur du cookie 'user'

            if (userCookie) {
                try {
                    this.userInfo = JSON.parse(userCookie); // Parse la valeur du cookie en tant qu'objet
                    // Maintenant, vous avez l'objet utilisateur (user) que vous pouvez utiliser
                    console.log('Utilisateur récupéré depuis le cookie :', userCookie);
                    // Faites ce que vous devez faire avec l'objet utilisateur
                } catch (error) {
                    console.error('Erreur lors de la lecture et du parsing du cookie utilisateur :', error);
                }
            }
        },
        hiddeSidebar(){
            this.showSidebar =! this.showSidebar
        },
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
    }
}
