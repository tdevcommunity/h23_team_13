export default function ({ store, redirect }) {
    const lastConnexionTime = store.getters['auth/last_connexion_time'];

    if (lastConnexionTime) {
        const currentTime = new Date().getTime();

        if (currentTime - lastConnexionTime > 60 * 60 * 1000) {
            store.dispatch('auth/logout');
            alert("Session expirée, veuillez-vous reconnecter"); // Afficher une alerte

            // this.showToast("warning", "Session expiré, veuillez-vous reconnecter");
            redirect('/login');
        }
    } else {
        redirect('/login');
    }
}