let url = 'JSON/output.json';

fetch(url)
.then(res => res.json())
.then((out) => {
    console.log('Checkout this JSON! ', out);

    let accHtml = '', element;
    for (element of out){
        accHtml += `<img src="uploads/${element.img}" title="${element.fileSize} byte">`;
    }

    document.getElementById('post').innerHTML = accHtml;
})
.catch(err => { throw err });