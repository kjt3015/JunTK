window.onload = () => {
    // FILE READER + HTML ELEMENTS
    var reader = new FileReader(),
        picker = document.getElementById("picker"),
        table = document.getElementById("table");
    
    //READ CSV ON FILE PICK
    picker.onchange = () => {
        //ENTIRE CSV FILE
        let csv = reader.result;
        
        console.log(csv);
    };
};