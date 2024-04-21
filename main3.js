function fetchActorsBornToday() {
    var actorDetails = document.getElementById("actorDetails");
    var birthdate = document.getElementById("bd_id").value;

    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4) {
            if (xhr.status === 200) {
                let responseObj = JSON.parse(xhr.responseText);
                actorDetails.textContent = Array.isArray(responseObj) && responseObj.length > 0
                    ? responseObj.join(", ")
                    : 'No actors found for this birthdate.';
            } else {
                actorDetails.textContent = 'Error fetching data. Please try again later.';
            }
            hideLoadingMessage();
        }
    };

    xhr.open("POST", "index.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.send("birthdate=" + encodeURIComponent(birthdate));
}

function hideLoadingMessage() {
    var loadingMessage = document.getElementById("loadingMessage");
    if (loadingMessage) {
        loadingMessage.style.display = "none";
    }
}

document.addEventListener("DOMContentLoaded", function() {
    var getActorDetailsBtn = document.getElementById("getActorDetailsBtn");
    if (getActorDetailsBtn) {
        getActorDetailsBtn.addEventListener("click", function() {
            var loadingMessage = document.getElementById("loadingMessage");
            if (loadingMessage) {
                loadingMessage.style.display = "block";
            }
            fetchActorsBornToday();
        });
    }
});


