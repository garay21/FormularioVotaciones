const App = document.querySelector('#app')

document.onload(
    ()=>{
        fetch('./../../src/view/formulario.php')
        .then(Response => Response.text)
        .then(HTMLElement => {
            App.innerHTML = HTMLElement
        })
        .catch(Error => console.error(Error))
    }
)