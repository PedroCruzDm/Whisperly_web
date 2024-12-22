let CarregarPagina = () => {
    let CarregarHeader = () => {
        if (document.getElementById('header') != null) {
            document.getElementById('header').innerHTML = "<p style='color:white;'>Carregando...</p>";
            fetch('./../../../../src/views/pages/includes/header.php').then((Response) => {
                Response.text().then((data) => {
                    document.getElementById('header').innerHTML = data;
                });
            });
        }
    }

    let CarregarFooter = () => {
        if (document.getElementById('footer') != null) {
            document.getElementById('footer').innerHTML = "<p style='color:white;'>Carregando...</p>";
            fetch('./../../../../src/views/pages/includes/footer.php').then((ResponseFooter) => {
                ResponseFooter.text().then((data) => {
                    document.getElementById('footer').innerHTML = data;
                });
            });
        }
    }

CarregarHeader();
CarregarFooter();
}

window.onload = () => {
    CarregarPagina();
}