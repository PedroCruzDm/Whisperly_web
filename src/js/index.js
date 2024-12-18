import '';
let CarregarPagina = () => {
    let promessa_header = (Response) => {
        console.info(Response.text().then((data) => {
            document.getElementById('header').innerHTML = data;
        }));

    }

    let promessa_footer = (Response) => {
        console.info(Response.text().then((data) => {
            document.getElementsByName('footer').innerHTML = data;
        }))
    }
    
    //#region FETCH PAGINA
    fetch('./../../src/views/pages/includes/header.php').then(promessa_header);
    fetch('./../../src/views/pages/includes/footer.php').then(promessa_footer);
    //#endregion
}

window.onload = () => { CarregarPagina(); }