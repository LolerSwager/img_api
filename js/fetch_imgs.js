let url = 'JSON/output.json';

fetch(url)
.then(res => res.json())
.then((out) => {
    console.log('Checkout this JSON! ', out);

    let result = "";

    let accHtml = '', element;
    for (element of out){
        result = element.fileSize / 1000000;
        TS = (new Date(element.timeStamp * 1000).toISOString().slice(0, 19).replace('T', ' '));
        
        if (element.mediaType === "video"){
            accHtml += `<video controls title="FileSize: ${element.fileSize} byte.\nFileSize: ${result} MB.\nuploaded by: ${element.user}.\nTimeStamp: ${TS}."><source src="uploads/video/${element.video}" type="video/mp4">Your browser does not support HTML video.</video>`;   
        }else{
            accHtml += `<img src="uploads/img/${element.img}" title="FileSize: ${element.fileSize} byte.\nFileSize: ${result} MB.\nuploaded by: ${element.user}.\nTimeStamp: ${TS}.">`;
        }
    }

    document.getElementById('post').innerHTML = accHtml;
})
.catch(err => { throw err });