

    function widoczne() {
        var wojewodztwo = document.getElementsByName("wojewodztwo")[0].value;
        var powiat = document.getElementsByName("powiat");
        for(var a = 0;a < powiat[0].length ; a ++){
            powiat[0][a].style.display = "none";
        }
        powiat = document.getElementsByClassName(wojewodztwo);

        for(var a = 0;a < powiat.length ; a ++){
            powiat[a].style.display = "block";
        }
        document.getElementsByName("powiat")[0].value = "Powiat";

    }
    
    function usuwanieSkel() {
        alert("lul");
        document.getElementById("skel-panels-defaultWrapper").hide;

    }


