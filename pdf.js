window.onload=function () {
    document.getElementById("download")
    .addEventListener("click",()=>{
        const table=this.document.getElementById("table");
        console.log(table);
        console.log(window);
        var opt = {
            margin:1,
            filename:"storemyresults.pdf",
            image:{type:'jpeg',quality:0.98},
            html2canvas:{scale:2},
            jsPDF: {unit: 'in',format:'letter',orientation:'portrait'}
        };

        html2pdf().from(table).set(opt).save();
    })
}