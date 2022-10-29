// const options = {
// 	method: 'POST',
// 	headers: {
// 		'content-type': 'application/json',
// 		'X-RapidAPI-Key': '7f93dfb9e4msh4023f37256f9df4p1c4fecjsna8b1e56b275e',
// 		'X-RapidAPI-Host': 'trader-calendar.p.rapidapi.com'
// 	},
// 	body: '{"country":"EGY"}'
// };
let tbody = document.querySelector('#tbody');

// let xx = fetch('https://trader-calendar.p.rapidapi.com/api/calendar', options)
// 	.then(response => response.json())
//     .then((response) => {
        
//         for(let i = 0;i<response.length;i++){
//             console.log(response[i])

//             tbody.innerHTML += `
//             <tr>
//                 <td>${response[i].id+1}</td>
//                 <td>${response[i].longDesc}</td>
//                 <td>${response[i].country}</td>
//                 <td style="color:#${response[i].hexColor}">${response[i].importance}<i class="fa-solid fa-star"></i></td>
//                 <td>${response[i].start}</td>
//             </tr>
//             `

//         }
//     })



const data = JSON.stringify({
    "country": "UK"
});

const options = {
	method: 'POST',
	headers: {
		'content-type': 'application/json',
		'X-RapidAPI-Key': '7f93dfb9e4msh4023f37256f9df4p1c4fecjsna8b1e56b275e',
		'X-RapidAPI-Host': 'trader-calendar.p.rapidapi.com'
	},
	body: '{"country":"UK"}'
};

fetch('https://trader-calendar.p.rapidapi.com/api/calendar', options)
	.then(response => response.json())

    .then((response) => {
        for(let i = 0;i<30;i++){
            tbody.innerHTML += `
            <tr>
                <td>${response[i].id+1}</td>
                <td>${response[i].longDesc}</td>
                <td>${response[i].country}</td>
                <td style="color:#${response[i].hexColor}">${response[i].importance}<i class="fa-solid fa-star"></i></td>
                <td>${response[i].start}</td>
            </tr>
            `
        }})

