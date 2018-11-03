function radioCheck()
    {
        var length = document.getElementById('place').length;
        var choices = new Array();
        for(var i=0; i<length; i++)
        {
            if (document.getElementById('place')[i].checked)
            {
                choices.push(document.getElementById('place')[i].value);
            }
        }
        
        if (choice.length ==0)
        {
            alert("Please pick your favaorite place")
        }
        else
        {
            for(var i=0; i<length; i++)
            {
                choices.push(document.getElementById('place')[i].checked=false);      
            }
        }
    }
    