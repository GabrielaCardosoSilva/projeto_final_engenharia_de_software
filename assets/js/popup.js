function show(){
    if(document.getElementById('model').style.display == 'none'){
        document.getElementById('model').style.display = 'block';
        document.documentElement.style.overflow = 'hidden';
                document.body.scroll = "no";
    }
    else{
        document.getElementById('model').style.display = 'none';
        document.documentElement.style.overflow = 'auto';
        document.body.scroll = "yes";
    }
};

function showMore(){
    if(document.getElementById('model-more').style.display == 'none'){
        document.getElementById('model-more').style.display = 'block';
        document.documentElement.style.overflow = 'hidden';
                document.body.scroll = "no";
    }
    else{
        document.getElementById('model-more').style.display = 'none';
        document.documentElement.style.overflow = 'auto';
        document.body.scroll = "yes";
    }
};