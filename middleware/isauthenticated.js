export default function ({ store, redirect }) {
  // Vérifiez si l'utilisateur est authentifié en utilisant store.getters.
  if (!store.getters['auth/user']) {
    // Redirigez l'utilisateur vers la page de connexion si l'authentification n'est pas réussie.
    return redirect('/auth/login');
  }
}