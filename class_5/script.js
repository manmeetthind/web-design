function submitInfo() {
    var userName = $("#userName").val();
    var userEmail = $("#userEmail").val();
    $("#informationBoard").empty();
    displayInformation(userName, userEmail);
}

function displayInformation(userName, userEmail) {
    $("#informationBoard").append('<li>Name: ' + userName + '</li>');
    $("#informationBoard").append('<li>Email id: ' + userEmail + '</li>');
}