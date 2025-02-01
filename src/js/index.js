import { solicitarNotificar, mostrarNotificacao } from './notificar.js';
import { CarregarPagina } from './carregarPagina.js';

window.onload = () => {
    let status_conexao = navigator.onLine;          //verificador de rede
    let localizador = window.location.pathname;     //localizador de paginas

    //console.info(localizador);
    //console.info("Estado da rede: "+ status_conexao);
    
    if(status_conexao == true){
        if(localizador == '/src/index.php'|| '/src/views/pages/login.php' || '/src/views/pages/cadastro.php'){
            CarregarPagina();
            setTimeout (solicitarNotificar(), 10000);
        }
    }

    if(status_conexao == false){
        console.log("Offline");
        location.assign('/src/views/pages/offline.php');
    }
    
    if(localizador == '/src/views/pages/offline.php' && status_conexao == true){
        location.assign('/src/index.php');
    }
}