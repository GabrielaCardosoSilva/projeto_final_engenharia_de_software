function createAgenda(){
    let cpf = document.getElementById('cpf').value
    let name = document.getElementById('name').value
    let specialty = document.getElementById('specialty').value
    let doctor = document.getElementById('doctor').value
    let date = document.getElementById('date').value
    let hour = document.getElementById('hour').value
    let number = document.getElementById('number').value
    let url = ""

    doc = {
        "cpf": cpf,
        "name": name,
        "specialty": specialty,
        "doctor": doctor,
        "date": date,
        "hour": hour,
        "number": number
    }
    console.log(doc)
    infoPost(url, doc)
}

function postInfo(url, doc) {
    xhr.responseType = "json"
    xhr.onreadystatechange = function(){
        if(xhr.readyState == 4 && xhr.status == 200){
            doc = xhr.response
            console.log(xhr)
        }
    }
    
    xhr.open("POST", url)
    xhr.send(doc)  
}