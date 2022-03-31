setTimeout(()=>{
        const y=document.querySelector('body');
        y.removeChild(y.firstElementChild);
        y.removeChild(y.firstElementChild);
        alert("Votre temps s'est écoulé :")
        const z=document.createElement("h1");
        z.innerHTML="Veuillez actualiser la page si vous voulez voter";
        y.appendChild(z);
    }
    ,2000

)