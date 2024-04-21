document.querySelector('#getActorBirthdaysBtn').addEventListener('click', function (e) {
    e.preventDefault();

    
    let names = document.getElementById("names");
    names.innerHTML = "<h6 class='text-center' style='color:#5e2ced;'>Please Wait until Loading data from API...</h6>";

    
    let timeout = setTimeout(function () {
        names.style.display = "none";
        names.innerHTML = "";
        names.style.display = "block";
    }, 10000);

    
    let birthday = document.getElementById("bd_id").value; 
    let xhr = new XMLHttpRequest();
    xhr.open("GET", "API_Ops.php?birthday=" + birthday, true);
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4) {
            clearTimeout(timeout);
            if (xhr.status === 200) {
                let response = JSON.parse(xhr.responseText);
                if (response.length > 0) {
                    names.classList.add("overflow-x-scroll");
                    names.innerHTML = "";
                    response.forEach((element) => {
                        names.innerHTML += `<div class='col-lg-3 mb-3 text-center mx-3'><h6 class='text-light py-2 rounded-5' style="background-color: #17a2b8;">${element}</h6></div>`;
                    });
                } else {
                    names.innerHTML = "<h4 style='color:#5e2ced;'>No Famous Actor Born at given Date</h4>";
                }
            } else {
                names.innerHTML = "<h4 style='color:#ff0000;'>An error occurred while loading data from API</h4>";
            }
            
            names.style.display = "none";
            names.style.display = "block";
        }
    };
    xhr.send();
});




