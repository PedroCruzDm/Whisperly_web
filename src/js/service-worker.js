if ('serviceWorker' in navigator) {
    window.addEventListener('load', function() {
      navigator.serviceWorker.register('./../../src/js/service-worker.js')
        .then(function(registration) {
          console.log('Service Worker registrado com sucesso:', registration);
        })
        .catch(function(error) {
          console.log('Erro ao registrar o Service Worker:', error);
        });
    });
  }
  