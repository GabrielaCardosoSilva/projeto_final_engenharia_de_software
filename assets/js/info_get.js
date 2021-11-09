//Recebe as informações da api
function getInfo() {
    let xhr = new XMLHttpRequest()

    xhr.responseType = "json"
    xhr.onreadystatechange = function(){
        if(xhr.readyState == 4 && xhr.status == 200){
            doc = xhr.response
            console.log(xhr)
        }
    }
    
    //url teste
    xhr.open("GET", "https://jsonplaceholder.typicode.com/posts/1")
    xhr.send()  
}

// Função mágica que escreve as coisas na tela