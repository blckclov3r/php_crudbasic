$(document).ready(function(){
    userList();
    function userList(){
        $.ajax({
            method: "POST",
            url: "action.php",
            data: {
                userList:1
            },
            success: function(response){
                $("#tbody").html(response);
            }
        });
    }

    $("#insertBtn").click(function(event){
        event.preventDefault();
        var name = $("#fname").val();
        if(name == ""){
            return;
        }
        $.ajax({
            method: "POST",
            url: "action.php",
            data:{
                insert:1,
                fname:name
            },
            success: function(response){
                alert(response);

            }
        });
    });
});