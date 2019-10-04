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
                userList();
                $("#notification").html(response);
                // $("#insertForm").trigger('reset'); 
                $('#insertForm')[0].reset();

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
                userList();
                // alert(response);
                $("#notification").html(response);
            }
        });
    });

    $('body').delegate('#selectUpdateBtn','click',function(event){
        event.preventDefault();
        var userid = $(this).attr('userid');
        var fname = $(this).attr('fname');
        $.ajax({
            url: 'action.php',
            method: 'POST',
            data:{
                selectUpdateBtn:1,
                id:userid,
                fname:fname
            },
            success: function(response){
                $("#update-group").html(response);
            }
        });
    });

    $("#updateBtn").click(function(event){
        event.preventDefault();
        var id = $("#id").val();
        var fname = $("#name").val();
        $.ajax({
            url: "action.php",
            method: "POST",
            data:{
                updateBtn:1,
                id:id,
                fname,fname
            },
            success:function(response){
                $("#notification").html(response);
                userList();
            }
        });

    });
});