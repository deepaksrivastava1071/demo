<body>
  <div class="container">
    <h2>Employee List</h2>
    <button id = "show-data" class = "showdata">Show Data</button>
    <table border = '1px' width = '100%' cellspacing = '0' cellpadding = '10px' id =  "table-data" >
      <thead class="thead-dark">
        <tr>
          <th>ID</th>
          <th>Name</th>
        </tr>
      </thead>
      <tbody>
        <tr id = "tr-data">
          
        </tr>
       
         
</table>
</body>

<script src = "js/jquery.js"></script>
<script>
    $(document).ready(function(){
        $("#show-data").on("click",function(){
            $.ajax({
                url : "load-data.php",
                type : "post",
                success : function(data){
                    $("#table-data").html(data);
                }
            })
        })
        
    })
</script>