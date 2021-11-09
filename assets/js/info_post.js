//Recebe os valores da página agenda_create.php
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

//Recebe os valores da página patient_create.php
function createPatient(){
    let name = document.getElementById('name').value
    let cpf = document.getElementById('cpf').value
    let rg = document.getElementById('rg').value
    let motherName = document.getElementById('mother_name').value
    let fatherName = document.getElementById('father_name').value
    let gender = document.getElementById('opt_type').value
    let dateBirth = document.getElementById('date').value
    let uf = document.getElementById('opt_uf').value
    let cep = document.getElementById('cep').value
    let city = document.getElementById('city').value
    let neighborhood = document.getElementById('neighborhood').value
    let address = document.getElementById('address').value
    let numberHouse = document.getElementById('number').value
    let email = document.getElementById('email').value
    let tel1 = document.getElementById('tel1').value
    let tel2 = document.getElementById('tel2').value
    let healthInsurance = document.getElementById('healthInsurance').value
    let url = "nanananana"

    doc = {
        "name": name,
        "cpf": cpf,
        "rg": rg,
        "motherName": motherName,
        "fatherName": fatherName,
        "gender": gender,
        "dateBirth": dateBirth,
        "uf": uf,
        "cep": cep,
        "city": city,
        "neighborhood": neighborhood,
        "address": address,
        "numberHouse": numberHouse,
        "email": email,
        "tel1": tel1,
        "tel2": tel2,
        "healthInsurance": healthInsurance
    }
    console.log(doc)
    postInfo(url, doc)
}

//Recebe os valores da página doctor_create.php
function createDoctor(){
    let name = document.getElementById('name').value
    let cpf = document.getElementById('cpf').value
    let crm = document.getElementById('crm').value
    let motherName = document.getElementById('mother_name').value
    let fatherName = document.getElementById('father_name').value
    let gender = document.getElementById('opt_type').value
    let dateBirth = document.getElementById('date').value
    let uf = document.getElementById('opt_uf').value
    let cep = document.getElementById('cep').value
    let city = document.getElementById('city').value
    let neighborhood = document.getElementById('neighborhood').value
    let address = document.getElementById('address').value
    let numberHouse = document.getElementById('number').value
    let email = document.getElementById('email').value
    let tel1 = document.getElementById('tel1').value
    let tel2 = document.getElementById('tel2').value
    let url = "nanananana"

    doc = {
        "name": name,
        "cpf": cpf,
        "crm": crm,
        "motherName": motherName,
        "fatherName": fatherName,
        "gender": gender,
        "dateBirth": dateBirth,
        "uf": uf,
        "cep": cep,
        "city": city,
        "neighborhood": neighborhood,
        "address": address,
        "numberHouse": numberHouse,
        "email": email,
        "tel1": tel1,
        "tel2": tel2
    }
    console.log(doc)
    postInfo(url, doc)
}

//Recebe os valores da página specialty_create.php
function createSpecialty(){
    let specialty = document.getElementById('specialty').value
    let description = document.getElementById('description').value
    let url = ""

    doc = {
        "specialty": specialty,
        "description": description
    }
    console.log(doc)
    postInfo(url, doc)
}

// Envia as informações para a api
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