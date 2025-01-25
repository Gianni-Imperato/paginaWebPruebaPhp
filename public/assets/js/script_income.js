document.addEventListener('DOMContentLoaded', function() {
    addRow();
  });
      
  function addRow(){

    var desde = document.getElementById('fec_desde').value;
    var hasta = document.getElementById('fec_hasta').value;
    var query = JSON.parse(document.getElementById('tra').value);
    var i = 0;
    var crAddDiv = true;
    var crAddTable = true;
    var crNewComp;

    let transactionTableRef;
    let newTransactionRowRef;
    query.forEach(function(value, index) {

      if (crNewComp != value.nro_docu){
        i = 0;
        crAddDiv = true;
        crAddTable = true;
      }
      if(crAddDiv==true){
        crNewComp = value.nro_docu;
      }
      i++
      if(crAddDiv==true){
        crAddDiv = false;
        var DivCon = document.createElement('div');
        DivCon.setAttribute("id", "GrupDiv" + value.nro_docu);
        document.getElementById("addtable").appendChild(DivCon);

        var table = document.createElement('table');
        table.setAttribute("id",  "CabTab" + value.nro_docu);
        table.setAttribute("class", "table table-hover");

        document.getElementById("GrupDiv" + value.nro_docu).appendChild(table);
        transactionTableRef = document.getElementById("CabTab" + value.nro_docu);

        newTransactionRowRef = transactionTableRef.insertRow(-1);
        var chak = document.createElement('button');
        chak.setAttribute("class", "btn waves-effect waves-light btn-xs btn-danger");
        chak.style = "max-width:50px;"
        chak.innerHTML = '+'

        chak.addEventListener("click", (event) => {
          if(document.getElementById(value.nro_docu).style.display == "none"){
              chak.innerHTML = '-';
              document.getElementById(value.nro_docu).style.display = "block";
          }else{
            chak.innerHTML = '+';
            document.getElementById(value.nro_docu).style.display = "none";
          }

        });

        let  newCodigoCellRef =newTransactionRowRef.insertCell(0);
        newCodigoCellRef.style="max-width: 50px; overflow: hidden; white-space: nowrap; text-overflow: ellipsis;"
        newCodigoCellRef.appendChild(chak);

        //class="col-md-2 header-grid"
        newCodigoCellRef =newTransactionRowRef.insertCell(1);
        newCodigoCellRef.setAttribute("class", "col-md-2 header-grid")  
        newCodigoCellRef.style="width: 140px; text-align: left; color: black"
        newCodigoCellRef.textContent = value.fec_pago;
        
        newCodigoCellRef =newTransactionRowRef.insertCell(2);
        newCodigoCellRef.setAttribute("class", "col-md-2 header-grid")  
        newCodigoCellRef.style="width: 155px; text-align: left; color: black"
        newCodigoCellRef.textContent = value.nro_docu;

        newCodigoCellRef =newTransactionRowRef.insertCell(3);
        //newCodigoCellRef.style="max-width: 50px; overflow: hidden; white-space: nowrap; text-overflow: ellipsis;"
        newCodigoCellRef.setAttribute("class", "col-md-2 header-grid")  
        newCodigoCellRef.style="width: 160px; text-align: left; color: black"
        newCodigoCellRef.textContent = value.ced_clie;
        
        newCodigoCellRef =newTransactionRowRef.insertCell(4);
        newCodigoCellRef.setAttribute("class", "col-md-2 header-grid")  
        newCodigoCellRef.style="width: 145px; text-align: left; color: black"
        newCodigoCellRef.textContent = value.nomb_clie;

        newCodigoCellRef =newTransactionRowRef.insertCell(5);
        newCodigoCellRef.setAttribute("class", "col-md-2 header-grid")  
        newCodigoCellRef.style="width: 145px; text-align: left; color: black"
        newCodigoCellRef.textContent = value.cod_emp;

        newCodigoCellRef =newTransactionRowRef.insertCell(6);
        newCodigoCellRef.setAttribute("class", "col-md-2 header-grid")  
        newCodigoCellRef.style="width: 145px; text-align: left; color: black"
        newCodigoCellRef.textContent = JSON.parse(value.mont_venta).toFixed(2);

        newCodigoCellRef =newTransactionRowRef.insertCell(7);
        newCodigoCellRef.setAttribute("class", "col-md-2 header-grid")  
        newCodigoCellRef.style="width: 145px; text-align: left; color: black"
        newCodigoCellRef.textContent = "";
      }

      if(crAddTable==true){
          crAddTable = false;
          var table = document.createElement('table');
          table.setAttribute("id",  value.nro_docu);
          //table.setAttribute("class", "table table-hover");
          document.getElementById("GrupDiv" + value.nro_docu).appendChild(table);
          transactionTableRef = document.getElementById(value.nro_docu);
          document.getElementById(value.nro_docu).style.display = "none";
       }

      newTransactionRowRef = transactionTableRef.insertRow(-1);
      newCodigoCellRef =newTransactionRowRef.insertCell(0) ;
      newCodigoCellRef.setAttribute("class", "col-md-2 header-grid")  
      //newCodigoCellRef.style=" width: 50px; text-align: left; color: black";
      newCodigoCellRef.textContent = "";

      newCodigoCellRef =newTransactionRowRef.insertCell(1);
      newCodigoCellRef.setAttribute("class", "col-md-2 header-grid")  
      //newCodigoCellRef.style=" width: 140px; text-align: left; color: black";
      newCodigoCellRef.textContent = i;

      newCodigoCellRef =newTransactionRowRef.insertCell(2);
      newCodigoCellRef.setAttribute("class", "col-md-2 header-grid")  
      //newCodigoCellRef.style=" width: 155px; text-align: left; color: black";
      newCodigoCellRef.textContent = value.cod_pago;

      newCodigoCellRef =newTransactionRowRef.insertCell(3);
      newCodigoCellRef.setAttribute("class", "col-md-2 header-grid")  
      //newCodigoCellRef.style=" width: 160px; text-align: left; color: black";
      newCodigoCellRef.textContent = value.literal;
      
      newCodigoCellRef =newTransactionRowRef.insertCell(4);
      newCodigoCellRef.setAttribute("class", "col-md-2 header-grid")  
      //newCodigoCellRef.style=" width: 145px; text-align: left; color: black";
      newCodigoCellRef.textContent = value.nro_tarj;

      newCodigoCellRef =newTransactionRowRef.insertCell(5);
      newCodigoCellRef.setAttribute("class", "col-md-2 header-grid")  
      //newCodigoCellRef.style="text-align: right; color: black"
      newCodigoCellRef.textContent = value.nota_cons;

      newCodigoCellRef =newTransactionRowRef.insertCell(6);
      newCodigoCellRef.setAttribute("class", "col-md-2 header-grid")  
      //newCodigoCellRef.style="text-align: right; color: black"
      newCodigoCellRef.textContent = value.cod_banco;

      newCodigoCellRef =newTransactionRowRef.insertCell(7);
      newCodigoCellRef.setAttribute("class", "col-md-2 header-grid")  
      //newCodigoCellRef.style="text-align: right; color: black"
      newCodigoCellRef.textContent = JSON.parse(value.mon_pago).toFixed(2);

    });
}
