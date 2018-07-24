
function foo(){
	console.log("jkdahf")

	 $.post("win.php",
    {
        
    },
    function(data, status){
        alert("Data: " + data + "\nStatus: " + status);
    });
}