
    
    const citiesByState = {
        "Maharashtra": [
            "Mumbai", "Pune", "Nagpur", "Nashik", "Aurangabad",
            "Solapur", "Amravati", "Kolhapur", "Sangli", "Satara"
        ],
        "Karnataka": [
            "Bangalore", "Mysore", "Hubli", "Belgaum", "Mangalore",
            "Gulbarga", "Davanagere", "Shimoga", "Bellary", "Tumkur"
        ],
        "Gujarat": [
            "Ahmedabad", "Surat", "Vadodara", "Rajkot", "Bhavnagar",
            "Jamnagar", "Junagadh", "Gandhinagar", "Anand", "Bharuch"
        ],
        
        "Tamil Nadu": [
                "Chennai","Vellore"
        ]
                
            
        
        
    };
    
    function validatePincode(pincoder)
    {   

        if(pincoder>999999){
            alert("invalid")
            document.getElementById("pincode").value=document.getElementById("pincode").value.slice(0,5);
         document.getElementById("pincode").contentEditable=false;
        }
    }
    function validateNumber(number)
    {
        if(number>9999999999 )
        {
         alert("Invalid Phone Number")
         document.getElementById("contact").value=document.getElementById("contact").value.slice(0,9);
         document.getElementById("contact").contentEditable=false;
        }
        // else if(number.isalpha()!=True){
        //     alert("Cant enter alphabets")
        // }
    }
    function filterCities() {
        const stateInput = document.getElementById("state");
        const cityInput = document.getElementById("CityLists");
        const selectedState = stateInput.value;

        cityInput.innerHTML = ''; // Clear previous options

        if (citiesByState[selectedState]) {
            citiesByState[selectedState].forEach(city => {
                const option = document.createElement("option");
                option.value = city;
                cityInput.appendChild(option);
            });
        }
    }