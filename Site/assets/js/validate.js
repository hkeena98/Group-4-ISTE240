function validate()
    {
        var val = true;
        var name = document.getElementById('fullname').value;
        var groupSize = document.getElementById('groupNum').value;
        var visited = document.getElementById('whenVisit').value;
        var location = document.getElementsByName('place');
        
        //Radio Button Validation
        var i;
        var bad = 0;
        for (i = 0; i < location.length; i++)
        {
            if (location[i].checked == false) 
            {
                bad += 1;
            }
            if(bad == 6)
            {
                val = false;
                alert("A Favorite Activity must be picked to submit form");
                document.getElementsByTagName('fieldset')[0].style.borderColor = 'red';
                document.getElementsByTagName('legend')[0].style.color = 'red';
                document.getElementsByTagName('legend')[0].innerHTML =
                          "Pick your Favorite Activity";
            }
            else
            {
                document.getElementsByTagName('fieldset')[0].style = null;
                document.getElementsByTagName('legend')[0].style = null;
                document.getElementsByTagName('legend')[0].innerHTML =
                          "Favorite Activity";
            }
        }
        //End of radio button validation
        
        //Name Validation
        
        if (name == "") 
        {
            alert("Name must be filled out to submit form.");
            document.getElementById("fullname").style.borderColor = 'red';
            document.getElementById("fullname").style.backgroundColor = 'pink';
            val = false;
        }
        else
        {
             document.getElementById("fullname").style = null; 
        }
        
        //Group size validation 
        if (groupSize == "")
        {
            alert("Group size must be filled out to submit form.");
            document.getElementById("groupNum").style.borderColor = 'red';
            document.getElementById("groupNum").style.backgroundColor = 'pink';
            val = false;  
        }
        else
        {
             document.getElementById("groupNum").style = null; 
        }
        
        //Date visited validation
        
        if (visited == "")
        {
            alert("Date visited must be filled out to submit form.");
            document.getElementById("whenVisit").style.borderColor = 'red';
            document.getElementById("whenVisit").style.backgroundColor = 'pink';
            
            val = false;
        }
        else
        {
             document.getElementById("whenVisit").style = null; 
        }
        
        /* tried to figure out how to make the date start or stop at a certain time using javascript */
        /*
        var minimumDate = document.getElementById("whenVisit").min;
            
        var today = new Date();
        var dd = today.getDate();
        var mm = today.getMonth()+1; //January is 0!
        var yyyy = today.getFullYear();

        var currentDate =  yyyy'='+mm'-'+dd;
        if("minimumDate" < "currentDate")
        {
            document.getElementById("whenVisit").value = currentDate;
            document.getElementById("whenVisit").style.backgroundColor = 'purple';
            val = false;
        }
        */
        
        return val;
    }   //End of JavaScript to validate user input