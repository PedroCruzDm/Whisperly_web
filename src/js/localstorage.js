export default function SaveLocalStorage(){
    document.querySelector('#btn_cadastrar').addEventListener('click', () => {
        
        let nickname = document.querySelector('#nickUser').getvalue();

        localStorage.setItem('nickname:', nickname);
    });
}