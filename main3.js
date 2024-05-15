document.querySelector('#getActorBirthdaysBtn').addEventListener('click', function (e) {
    e.preventDefault();

    let names = document.getElementById("names");
    names.innerHTML = "<h6 class='text-center' style='color:#5e2ced;'>Please wait while loading data from API...</h6>";

    let birthdayInput = document.getElementById("bd_id");
    let birthday = birthdayInput.value; 
    let [year, month, day] = birthday.split('-'); 

    let timeout = setTimeout(function () {
        names.style.display = "none";
        names.innerHTML = "";
        names.style.display = "block";
    }, 10000);

    let xhr = new XMLHttpRequest();
    xhr.open("GET", "API_Ops.php?month=" + month + "&day=" + day, true); 
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4) {
            clearTimeout(timeout);
            if (xhr.status === 200) {
                console.log(xhr.responseText); 
                try {
                    let response = JSON.parse(xhr.responseText);
                    if (response.actors.length > 0) {
                        names.classList.add("overflow-x-scroll");
                        names.innerHTML = "";
                        response.actors.forEach((element) => {
                            names.innerHTML += `<div class='col-lg-3 mb-3 text-center mx-3'><h6 class='text-light py-2 rounded-5' style="background-color: #17a2b8;">${element.name}</h6></div>`;
                        });
                    } else {
                        names.innerHTML = "<h4 style='color:#5e2ced;'>No famous actor born on the given date.</h4>";
                    }
                } catch (error) {
                    console.error("Error parsing JSON:", error);
                    names.innerHTML = "<h4 style='color:#ff0000;'>Error parsing server response.</h4>";
                }
            } else {
                names.innerHTML = "<h4 style='color:#ff0000;'>An error occurred while loading data from API.</h4>";
            }
            
            names.style.display = "none";
            names.style.display = "block";
        }
    };
    xhr.send();
});

