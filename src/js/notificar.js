export function solicitarNotificar() {
    //console.log('Função solicitarNotificar chamada!');
    
    if (!('Notification' in window)) {                          // Verifica se o navegador suporta notificações
        alert('Este navegador não suporta notificações');
        return;
    }
    
    if (Notification.permission === 'granted') {                // Verificar o estado da permissão de notificação
        mostrarNotificacao();
    }
    else if (Notification.permission !== 'denied') {            // Se a permissão não foi negada, solicita permissão

        Notification.requestPermission().then(permission => {
            if (permission === 'granted') {
                mostrarNotificacao();
            }
        });
    }
}

export function mostrarNotificacao() {
    //console.log('Função mostrarNotificacao chamada!');

    const options = {
        body: "Esta é uma notificação de exemplo.",
        icon: "" // Substitua pelo caminho real para o ícone da notificação
    };
    
    const notification = new Notification("Deseja receber notificações", options);          // Cria e exibe a notificação
    
    notification.onclick = () => {                                                          // Adiciona um evento de clique à notificação
        alert("Obrigado por aceitar nossa notificação!");
    };
}

//erros: 6;