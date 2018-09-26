$(document).ready(function() {
  let modalTimer = modal_data_object.popup_timer;
  let modal = document.getElementById('modal-popup');
  let closeBtn = document.getElementsByClassName('close-btn')[0];

  startModal = () => {
    modal.style.display='block';
  }
  setTimeout(startModal, modalTimer);

  closeBtn.onclick = function() {
    modal.style.display = 'none';
  }

  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = 'none';
    }
  }

});
