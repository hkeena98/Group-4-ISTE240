//Function To Check and Validate Form

function formValidation()
{
	//Inititates Variables To Validate
  	var groupN = document.forms["aboutVisit"]["groupNum"].value;
	var vdate = document.forms["aboutVisit"]["vdate"].value;
	var fplace = document.forms["aboutVisit"]["fplace"].checked;

   	if(groupN <= 0) 
	{
        	alert("Number Of Visitors Must Be Filled Out.");
        	return false;
    	}

	if(vdate == "mm/dd/yyyy")
	{
		alert("Please Set Your Date Of Visit.");
		return false
	}

	if(fplace == true)
	{
		alert("Please Select A Favorite Place.");
		return false;
	}


}
