	function CheckForPhone()
	{
        //alert("checking for phone");
        document.addEventListener("DOMContentLoaded", function () {
            var ua = navigator.userAgent;
        
            var isiPad = ua.includes("iPad") || (navigator.platform === "MacIntel" && navigator.maxTouchPoints > 1);
        
            var isPhone = !isiPad && Math.min(screen.width, screen.height) <= 500
    
            if (isPhone) {
                alert("This is a phone");
                document.documentElement.classList.add("isPhone");
           }
           else if (isiPad) {
                alert("This is an iPad");
           }
           else {
                alert("This is a desktop");
           }
        });
    
	}

	function CheckPhoneForm()
	{
		var ele = null;
		var msg = "";
		var res = true;
		
		if (document.getElementById("input1").value !== "" && document.getElementById("input2").value !== "" && document.getElementById("input3").value !== "" && document.getElementById("input4").value !== "" && document.getElementById("input5").value !== "" && document.getElementById("input6").value !== "")
		{
			alert("All is great! Thank You")
			return true;
		}
		else
		{
			validateInputs();
			alert("Please enter the missing information. Thank You");
			return false;
		}
	}

    function validateInputs() 
	{
        // Get all input elements within the form
		var input = null;
		var tooltip = null
        let allValid = true;

		for (x=1; x<7; x++)
		{
			input = document.getElementById("inputPhone"+x)
			alert("input"+x+" value = "+input.value);
            // Get the corresponding tooltip element
            tooltip = input.parentElement.querySelector('.tooltip-text');

            if (input.value.trim() === '') 
			{
                // If empty, add error class and show tooltip
                input.classList.add('input-error');
                if (tooltip) {
                    tooltip.classList.add('show-tooltip');
                }
				
                allValid = false;
            } 
			else 
			{
                // If not empty, remove error class and hide tooltip
                input.classList.remove('input-error');
                if (tooltip) {
                    tooltip.classList.remove('show-tooltip');
                }
            }
        }

        if (allValid) 
		{
            alert('All fields are filled out correctly!');
			//CheckForm();
            // You can add further submission logic here
			return true;
        }
		//else
			 alert('Not All fields are filled out correctly, please check it.');
    }
	
    function validateOneInput(ele) 
	{
        // Get all input elements within the form
        //const inputs = document.querySelectorAll('#Contact input[type="text"]');
		const input = document.getElementById(ele.id); //ele;
        let allValid = true;
	    //alert('validating element = '+input.value);

		 // Get the corresponding tooltip element
		const tooltip = input.parentElement.querySelector('.tooltip-text');

		if (input.value.trim() === '') 
		{
			// If empty, add error class and show tooltip
			input.classList.add('input-error');
			if (tooltip) {
				tooltip.classList.add('show-tooltip');
			}
			
			allValid = false;
		} 
		else 
		{
			// If not empty, remove error class and hide tooltip
			input.classList.remove('input-error');
			if (tooltip) {
				tooltip.classList.remove('show-tooltip');
			}
			
			allValid = true;
		}

        if (allValid) 
		{
            alert('This field is filled out correctly!');
			//CheckForm();
            // You can add further submission logic here
			return true;
        }
		else
			alert('This field is empty or filled out incorrectly!');
    }
	
	function resetForm()
	{
        // Get all input elements within the form
		var input = null;
		var tooltip = null
        let allValid = true;

		for (x=1; x<7; x++)
		{
			input = document.getElementById("input"+x);
    	//	if (input.value !== "")
    	//	{
    	//		input.value = "";
                // Get the corresponding tooltip element
                const tooltip = input.parentElement.querySelector('.tooltip-text');
                // If not empty, remove error class and hide tooltip
                input.classList.remove('input-error');
                if (tooltip) {
                    tooltip.classList.remove('show-tooltip');
                }
    	//	}		
        }
	
		var val = document.getElementById("input5").value.trim();
		if (val !== "")
		{
			document.getElementById("input5").value = "";
		}	
	}
	
