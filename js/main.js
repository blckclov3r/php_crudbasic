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

    $('body').delegate('#deleteBtn','click',function(event){
        event.preventDefault();
        var userid = $(this).attr('userid');
        $.ajax({
            url: 'action.php',
            method: 'POST',
            data:{
                deleteBtn:1,
                id:userid
            },
            success: function(response){
                alert(response);
                userList();
            }
        })
    });
});