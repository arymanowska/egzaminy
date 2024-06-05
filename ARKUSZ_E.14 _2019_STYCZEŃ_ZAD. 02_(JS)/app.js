function red(){
    document.getElementById("p").style.color = "red"
    if(document.getElementById("number").value > 0){
        document.getElementById("p").style.fontSize = document.getElementById("number").value + "%"
    }
    if(document.getElementById("select").value == 2){
        document.getElementById("p").style.fontStyle = "italic"
    }else{
        document.getElementById("p").style.fontStyle = "normal"
    }
}

function green(){
    document.getElementById("p").style.color = "green"
    if(document.getElementById("number").value > 0){
        document.getElementById("p").style.fontSize = document.getElementById("number").value + "%"
    }
    if(document.getElementById("select").value == 2){
        document.getElementById("p").style.fontStyle = "italic"
    }else{
        document.getElementById("p").style.fontStyle = "normal"
    }
}

function blue(){
    document.getElementById("p").style.color = "blue"
    if(document.getElementById("number").value > 0){
        document.getElementById("p").style.fontSize = document.getElementById("number").value + "%"
    }
    if(document.getElementById("select").value == 2){
        document.getElementById("p").style.fontStyle = "italic"
    }else{
        document.getElementById("p").style.fontStyle = "normal"
    }
}

