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
      var tpoven = "FA";
      var tasa = 0;
      let transactionTableRef;
      let newTransactionRowRef;
      query.forEach(function(value, index) {
  
        if (crNewComp != value.nro_fac){
          i = 0;
          crAddDiv = true;
          crAddTable = true;
        }
        if(crAddDiv==true){
          crNewComp = value.nro_fac;
        }
        i++
        if(crAddDiv==true){
          crAddDiv = false;
          var DivCon = document.createElement('div');
          DivCon.setAttribute("id", "GrupDiv" + value.nro_fac);
          document.getElementById("addtable").appendChild(DivCon);
  
          var table = document.createElement('table');
          table.setAttribute("id",  "CabTab" + value.nro_fac);
          table.setAttribute("class", "table table-hover");
  
          document.getElementById("GrupDiv" + value.nro_fac).appendChild(table);
          transactionTableRef = document.getElementById("CabTab" + value.nro_fac);
  
          newTransactionRowRef = transactionTableRef.insertRow(-1);
          var chak = document.createElement('button');
          chak.setAttribute("class", "btn waves-effect waves-light btn-xs btn-danger");
          chak.style = "max-width:50px;"
          chak.innerHTML = '+'
  
          chak.addEventListener("click", (event) => {
            if(document.getElementById(value.nro_fac).style.display == "none"){
                chak.innerHTML = '-';
                document.getElementById(value.nro_fac).style.display = "block";
            }else{
              chak.innerHTML = '+';
              document.getElementById(value.nro_fac).style.display = "none";
            }
  
          });
  
          let  newCodigoCellRef =newTransactionRowRef.insertCell(0);
          newCodigoCellRef.style="max-width: 50px; overflow: hidden; white-space: nowrap; text-overflow: ellipsis;"
          newCodigoCellRef.appendChild(chak);
  
          //class="col-md-2 header-grid"
          newCodigoCellRef =newTransactionRowRef.insertCell(1);
          newCodigoCellRef.setAttribute("class", "col-md-2 header-grid")  
          newCodigoCellRef.style="width: 140px; text-align: left; color: black"
          newCodigoCellRef.textContent = value.fec_fac;
          

          //Busco el tipo de venta
          if(value.transac == 211 &&  value.p_rete != null){
            tpoven = "FA";
          }else if(value.transac == 251 &&  value.p_rete != null){
            tpoven = "NC";
          }else if(value.transac == 211 &&  value.p_rete == null){
            tpoven = "NE";
          }else if(value.transac == 251 &&  value.p_rete == null){
            tpoven = "DV";
          } 
          newCodigoCellRef =newTransactionRowRef.insertCell(2);
          newCodigoCellRef.setAttribute("class", "col-md-2 header-grid")  
          newCodigoCellRef.style="width: 155px; text-align: left; color: black"
          newCodigoCellRef.textContent = tpoven;
  
          newCodigoCellRef =newTransactionRowRef.insertCell(3);
          //newCodigoCellRef.style="max-width: 50px; overflow: hidden; white-space: nowrap; text-overflow: ellipsis;"
          newCodigoCellRef.setAttribute("class", "col-md-2 header-grid")  
          newCodigoCellRef.style="width: 160px; text-align: left; color: black"
          newCodigoCellRef.textContent = value.control;
          
          newCodigoCellRef =newTransactionRowRef.insertCell(4);
          newCodigoCellRef.setAttribute("class", "col-md-2 header-grid")  
          newCodigoCellRef.style="width: 145px; text-align: left; color: black"
          newCodigoCellRef.textContent = value.nro_fac;
  
          newCodigoCellRef =newTransactionRowRef.insertCell(5);
          newCodigoCellRef.setAttribute("class", "col-md-2 header-grid")  
          newCodigoCellRef.style="width: 145px; text-align: left; color: black"
          newCodigoCellRef.textContent = value.cedula;
  
          newCodigoCellRef =newTransactionRowRef.insertCell(6);
          newCodigoCellRef.setAttribute("class", "col-md-2 header-grid")  
          newCodigoCellRef.style="width: 145px; text-align: left; color: black"
          newCodigoCellRef.textContent = value.nom_clie;
  
          newCodigoCellRef =newTransactionRowRef.insertCell(7);
          newCodigoCellRef.setAttribute("class", "col-md-2 header-grid")  
          newCodigoCellRef.style="width: 145px; text-align: left; color: black"
          newCodigoCellRef.textContent = JSON.parse(value.pvp_neto).toFixed(2);
  
          newCodigoCellRef =newTransactionRowRef.insertCell(8);
          newCodigoCellRef.setAttribute("class", "col-md-2 header-grid")  
          newCodigoCellRef.style="width: 145px; text-align: left; color: black"
          newCodigoCellRef.textContent =  value.tipo_divi;

          if(value.tasa_camb == null){
            tasa = 0;
          }else {
            tasa = value.tasa_camb; 
          }
          newCodigoCellRef =newTransactionRowRef.insertCell(9);
          newCodigoCellRef.setAttribute("class", "col-md-2 header-grid")  
          newCodigoCellRef.style="text-align: right;"
          newCodigoCellRef.textContent = JSON.parse(tasa).toFixed(2);
  
        }
  
        if(crAddTable==true){
            crAddTable = false;
            var table = document.createElement('table');
            table.setAttribute("id",  value.nro_fac);
            //table.setAttribute("class", "table table-hover");
            document.getElementById("GrupDiv" + value.nro_fac).appendChild(table);
            transactionTableRef = document.getElementById(value.nro_fac);
            document.getElementById(value.nro_fac).style.display = "none";
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
        newCodigoCellRef.textContent = value.cod_arti;
  
        newCodigoCellRef =newTransactionRowRef.insertCell(3);
        newCodigoCellRef.setAttribute("class", "col-md-2 header-grid")  
        //newCodigoCellRef.style=" width: 160px; text-align: left; color: black";
        newCodigoCellRef.textContent = value.des_arti;
        
        newCodigoCellRef =newTransactionRowRef.insertCell(4);
        newCodigoCellRef.setAttribute("class", "col-md-2 header-grid")  
        //newCodigoCellRef.style=" width: 145px; text-align: left; color: black";
        newCodigoCellRef.textContent = value.can_arti;
  
        newCodigoCellRef =newTransactionRowRef.insertCell(5);
        newCodigoCellRef.setAttribute("class", "col-md-2 header-grid")  
        //newCodigoCellRef.style="text-align: right; color: black"
        newCodigoCellRef.textContent = JSON.parse(value.pvp_arti).toFixed(2);
  
        newCodigoCellRef =newTransactionRowRef.insertCell(6);
        newCodigoCellRef.setAttribute("class", "col-md-2 header-grid")  
        //newCodigoCellRef.style="text-align: right; color: black"
        newCodigoCellRef.textContent = JSON.parse(value.pvp_bruto).toFixed(2);
  
        newCodigoCellRef =newTransactionRowRef.insertCell(7);
        newCodigoCellRef.setAttribute("class", "col-md-2 header-grid")  
        //newCodigoCellRef.style="text-align: right; color: black"
        newCodigoCellRef.textContent = JSON.parse(value.b_impuesto).toFixed(2);
  
        newCodigoCellRef =newTransactionRowRef.insertCell(8);
        newCodigoCellRef.setAttribute("class", "col-md-2 header-grid")  
        //newCodigoCellRef.style="text-align: right; color: black"
        newCodigoCellRef.textContent = JSON.parse(value.pvp_neto).toFixed(2);
  
        newCodigoCellRef =newTransactionRowRef.insertCell(9);
        newCodigoCellRef.setAttribute("class", "col-md-2 header-grid")  
        //newCodigoCellRef.style="text-align: right; color: black"
        newCodigoCellRef.textContent = "";
  
      });
}
