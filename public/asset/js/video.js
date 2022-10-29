let pageIdX = document.location.search
console.log(pageIdX)
let pageId1 = pageIdX.slice(40)//c95BKysFWKY
let pageId2 = pageIdX.slice(6,40)//PLOU2XLYxmsIIjHK9mEgLey-CaFcajdUBX
    console.log(pageId1)
    console.log(pageId2)

    let main = document.querySelector(".main-container")
    let myRequest = new XMLHttpRequest();
        let key = "AIzaSyBVApomqeduLVm7DxeWO9_HPNpyb1v7gDw"    
        let url =`https://youtube.googleapis.com/youtube/v3/videos?part=snippet%2CcontentDetails%2Cstatistics&id=${pageId1}&key=${key}`;
        myRequest.open("GET", url);
        myRequest.setRequestHeader("Content-Type", "application/json");
        myRequest.onreadystatechange = function () {
        if (myRequest.readyState === 4 && myRequest.status === 200) {
            let jsDate = JSON.parse(myRequest.responseText);          
            for (let i = 0; i<jsDate.items.length; i++){
                console.log(jsDate.items[i])
                main.innerHTML += `
                    <div>
                        <h1>${jsDate.items[i].snippet.localized.title}</h1>
                        <p>${jsDate.items[i].snippet.localized.description}</p>
                        <p>${jsDate.items[i].snippet.publishedAt}</p>
                        <iframe width="1280" height="720" 
                        src="https://www.youtube.com/embed/${pageId1}?list=${pageId2}" 
                        frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    `
                }
        }
    }
    let data = JSON.stringify();
    myRequest.send(data);



