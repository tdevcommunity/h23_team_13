export const state = () => ({
  globalStateMessage: {
    type: 'info',
    text: '',
    show: false,
  }
});

export const getters = {
  globalStateMessage: state => state.globalStateMessage
}

export const mutations = {
  SET_TEMP_MESSAGE(state, { type, text }){
    // alert(text)
    Swal.fire({
      text: 'Veuillez vous connecter ou vous inscrire pour effectuer votre reservation',
      reverseButtons: true,
      confirmButtonText: "Ok",
      showClass: {
        popup: 'animate__animated animate__fadeInDown'
      },
      hideClass: {
        popup: 'animate__animated animate__fadeOutUp'
      }
    })

    state.globalStateMessage.type = type;
    state.globalStateMessage.text = text;
    state.globalStateMessage.show = true;
  }
}
