import { solicitarNotificar, mostrarNotificacao } from './notificar.js';
import { CarregarPagina } from './carregarPagina.js';
//erros: 8;

let localizador = window.location.pathname;
console.log(localizador);

window.onload = () => {

    switch (localizador){
        case '/src/index.php':
            CarregarPagina();
            solicitarNotificar();
            break;

        case '/src/views/pages/login.php':
            CarregarPagina();
            break;
    }
   
    /*CarregarPagina(), solicitarNotificar();*/
}