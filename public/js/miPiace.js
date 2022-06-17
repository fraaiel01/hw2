const cuori=document.querySelectorAll(".cuoreV");
for(let cuore of cuori){ //cosi aggiungo a tutti  l'evento del mi piace
    cuore.addEventListener("click",setlike);
}


function onResponse(response) {
    console.log("risposta 1");
    return response.json();
 }

function onJsoncheck_mipiace(json){
    console.log(json);
    if(json){
    const array=[];
    for(let i=0; i<json.length; i++){
    array[json[i].id_social]=json[i].id_social;
    
    }
    console.log(array);
    const cuori=document.querySelectorAll(".cuoreV");
    let j=1;
     for(let cuore of cuori){ //cosi aggiungo a tutti  l'evento del mi piace
        if(array[j]!=undefined){
            cuore.src="images/CuorePieno.png";
        }
        j++;
     }
    }
    

}

const id_user1=document.querySelector("#home");

function setlike(event){
    console.log(event.currentTarget.src);
    if( event.currentTarget.src=="http://127.0.0.1:8000/images/cuoreVuoto.png"){
        event.currentTarget.src="images/CuorePieno.png";
        const social=event.currentTarget.parentNode; 
        const social_id=social.querySelector(".Logo");
        console.log(id_user1.dataset.id_user);
        fetch(BASE_URL + "areasocial/like/"+encodeURIComponent(id_user1.dataset.id_user)+'/'+encodeURIComponent(social_id.dataset.id));
    }

    else if (event.currentTarget.src=="http://127.0.0.1:8000/images/CuorePieno.png"){
       event.currentTarget.src=BASE_URL+"images/cuoreVuoto.png";
       const social=event.currentTarget.parentNode;
       const social_id=social.querySelector(".Logo");
       console.log(id_user1.dataset.id_user);
       fetch(BASE_URL + "areasocial/dislike/"+encodeURIComponent(id_user1.dataset.id_user)+'/'+encodeURIComponent(social_id.dataset.id));
    }
}

fetch(BASE_URL + 'areasocial/verifica/'+encodeURIComponent(id_user1.dataset.id_user)).then(onResponse).then(onJsoncheck_mipiace);