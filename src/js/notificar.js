export function solicitarNotificar(){
    if (!('Notification' in window)) {
        // Verifica se o navegador suporta notificações
        alert('Este navegador não suporta notificações');
        return;
    }
    
    if (Notification.permission === 'granted') {
        // Verificar o estado da permissão de notificação
        mostrarNotificacao();
    }

    else if (Notification.permission !== 'denied') {
        // Se a permissão não foi negada, solicita permissão
        Notification.requestPermission().then(permission => {
            if (permission === 'granted') {
                mostrarNotificacao();
            }
        });
    }
}

export function mostrarNotificacao(){
    const options = {
        body: "Notificação",
        icon: "https://www.96fm.com.br/storage/2023/09/mCSfTCzOrYXjOEGl5JGNf0RqDc94Nl5o6fKobCV2.jpg"
        // Substitua pelo caminho real para o ícone da notificação
    }

    const notification = new Notification("Deseja receber notificações", options);
    // Cria e exibe a notificação
    
   notification.onclick = () => {
    // Adiciona um evento de clique à notificação
    alert("Obrigado por aceitar nossa notificação!");
    };
}
//erros: 6;