<style>
    #error-message{
        background : #EFDCDD;
        color : red;
        padding : 10px;
        margin : 10px;
        display : none;
        position : absolute;
        right : 15px;
        top : 15px;
    }
    #success-message{
        background : #DEF1D8;
        color : green;
        padding : 10px;
        margin : 10px;
        display : none;
        position : absolute;
        right : 15px;
        top : 15px;
    }
</style>
<table>
     <tr>
        <td>Add Records with PHP Ajax</td>
    </tr><br>
    <tr>
        
        <td id = "table-form">
        <form id = "add-form">
            First Name :<input type = "text" id = "fname">&nbsp;&nbsp;&nbsp;
            Last Name :<input type = "text" id = "lname">
                <input type = "submit" id = "save-button" value = "Save">
        </form>
        </td>
    </tr>

    <tr>
        <td id = "table-data">
            <table border ="1px" width = "100%" cellspacing="0" cellpadding="10px">
                <tr>
                    <th width = "100%">ID</th>
                    <th>Name</th>
                 </tr>
            </table>
            <td>

</table>

<div id="error-message"></div>
<div id="success-message"></div>

<script type = "text/javascript" src = "js/jquery.js"></script>
<script>
    $(document).ready(function(){
        function loadTable(){
            $.ajax({
                url : "load-data.php",
                type : "post",
                success : function(data){
                    $("#table-data").html(data);
                }
            })
        }

        loadTable();


    $("#save-button").on("click",function(e){
        e.preventDefault();

        var fname = $("#fname").val();
        var lname = $("#lname").val();

        if(fname == "" || lname == ""){
            $("#error-message").html("All Fields Are Required").slideDown();
            $("$success-message").slideUp();
        }else{
        $.ajax({
            url : "ajax-insert.php",
            type : "POST",
            data : {first_name : fname , last_name : lname},
            success : function(data){
                if(data == 1){
                    loadTable();
                    $("#add-form").trigger("reset");
                    $("#success-message").html("Record Added Successfully").slideDown();
            $("#error-message").slideUp();
                }else{
                    $("#error-message").html("No record Added").slideDown();
            $("$success-message").slideUp();
                }
            }
        });
    }
    });

   
});



</script>