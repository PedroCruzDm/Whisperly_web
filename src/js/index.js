import { solicitarNotificar, mostrarNotificacao } from './notificar.js';
import { CarregarPagina } from './carregarPagina.js';
import{} from './rotas.js';
//erros: 8;

let localizador = window.location.pathname;
console.info(localizador);

window.onload = () => {
//erros: 2;

    switch (localizador){
        case '/src/index.php':
            CarregarPagina();
            
            setTimeout (solicitarNotificar(), 800);
            break;

        case '/src/views/pages/login.php':
            CarregarPagina();
            break;

        case '/src/views/pages/cadastro.php':
            CarregarPagina();
            break;
    }

}