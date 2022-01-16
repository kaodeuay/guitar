var SchoolObject = {
                "Argo-Industry":["Science"],
                "Cosmetic":["Science"],
                "Dentistry":["Doctor of Dental Surgery"],
                "Health Science":["Science"],
                "Information Technology":["Engineering","Science"],
                "Integrative Medicine":["Applied Thai Traditional Medicine","Physical Therapy","Traditional Chinese Medicince"],
                "Law":["Laws"],
                "Liberal Arts":["Arts"],
                "Management":["Business Administration","Economic"],
                "Medicine":["Doctor of Medicine"],
                "Nursing":["Nursing Science"],
                "Science":["Science"],
                "Sinology":["Arts"],
                "Social Innovation":["Arts"]
            }
            function School(value) {
                if(value.length==0) document.getElementById("BachelorOf").innerHTML = "<option></option>";
                else {
                var programOptions = "";
                for(programId in SchoolObject[value]) {
                    programOptions+="<option>"+SchoolObject[value][programId]+"</option>";
                }
                document.getElementById("BachelorOf").innerHTML = programOptions;
                }
            }

            function myAlert(){
                let name=document.getElementById("FName").value;
                alert("Thank you,"+ name + " for your application.");
            }

            var DeanlObject = {
                "Argo-Industry":["Jiraporn Intrasai"],
                "Cosmetic":["Uraiwan Intatha"],
                "Dentistry":["Chatrudee Jongsureyapart"],
                "Health Science":["Teeravisit Laohapensaeng"],
                "Information Technology":["Saroat Rawdkuen"],
                "Integrative Medicine":["Rung Srisomwong"],
                "Law":["Phanuphong Chaiwut"],
                "Liberal Arts":["Rachanee Sansern"],
                "Management":["Chomnard Potjanamart"],
                "Medicine":["Supakorn Rojananin"],
                "Nursing":["Narong Lumbiganon"],
                "Science":["Siriporn Wajjwalku"],
                "Sinology":["Teeraparp Predeepoch"],
                "Social Innovation":["Sulukkana Noiprasert"]
            }
            function Dean(value) {
                if(value.length==0) document.getElementById("De").innerHTML = "<option></option>";
                else {
                var programOptions = "";
                for(programId in DeanlObject[value]) {
                    programOptions+=DeanlObject[value][programId];
                }
                document.getElementById("De").value = programOptions;
                }
            }