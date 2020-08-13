var loadFile = function(event) {
    let eventvalue = event.target.value.split('.').pop();
    console.log(eventvalue);
    if((eventvalue === "jpg") || (eventvalue === "jpeg") || (eventvalue === "png") || (eventvalue === "gif") || (eventvalue === "svg")){
        document.getElementById('preview').innerHTML = `<img id="output" src="img/arrow.png" alt="your image">`;
    }else{
        document.getElementById('preview').innerHTML = `<video id="output" autoplay loop></video>`;
    }
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
        URL.revokeObjectURL(output.src) // free memory
    }
};

// preview by jannick nielsen