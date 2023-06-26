function demoInternalAlert()
        {
            alert("Internal Alert.");
        }
        function demoInternalConfirm()
        {
            if(confirm("Are You Sure..??")){
                alert("Yess");
            }
            else{
                alert("Nooo");
            }
        }
        function demoInternalPrompt()
        {
            var fName=prompt("Enter Firsname Here..");
            var lName=prompt("Enter Lastname Here..");
            alert(fName+" "+lName);
        }
