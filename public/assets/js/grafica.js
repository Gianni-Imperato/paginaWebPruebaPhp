//const { auto } = require("@popperjs/core");

//Variable que guarda la cantidad de leyendas a insertar en el gráfico
let cantidadLeyendas;
//Este arreglo guardara los pares de elementos que se insertaran en el grafico:
//Se guardara en formato de arreglo. Ejemplo: 
//[['leyenda 1', 600],['leyenda 2', 200]]
var arregloDatos = [];


function miFuncion() {
        // Cargo el gráfico de Google
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);
    
}

// Dibujo el gráfico y coloco los valores
function drawChart() {
    sucpanteonI();
    sucpanteonII();
    sucestrella();
    sucshai();
    sucjunin();
    succasanova();
    sucvictoria();
    sucshaya();
    sucsuspension();
}

function sucpanteonI(){

    if(document.getElementById("datos")){
        arregloDatos = [];
        //Recupero los inputs que hay dentro del div datos
        var datos = document.getElementById("datos").getElementsByTagName("input");
        var t = ['Gráfico', ''];
        arregloDatos.push(t);
        for (i = 0; i < datos.length; i = i + 2) {
            t = [datos[i].value, parseInt(datos[i + 1].value)];
            arregloDatos.push(t);
        }
        var data = google.visualization.arrayToDataTable(arregloDatos);
        // Opcional; Agrego el título del gráfico
        var options = {
            'title': "",
            'width': 290,
        };
        var chart = new google.visualization.ColumnChart(document.getElementById('panteonI'));
        chart.draw(data, options);
    
    }


}

function sucpanteonII(){

    if(document.getElementById("datos2")){

        arregloDatos = [];
        //Recupero los inputs que hay dentro del div datos
        var datos = document.getElementById("datos2").getElementsByTagName("input");
        var t = ['Gráfico', ''];
        arregloDatos.push(t);
        for (i = 0; i < datos.length; i = i + 2) {
            t = [datos[i].value, parseInt(datos[i + 1].value)];
            arregloDatos.push(t);
        }
        var data = google.visualization.arrayToDataTable(arregloDatos);
        // Opcional; Agrego el título del gráfico
        var options = {
            'title': "",
            'width': 290,
        };
        var chart = new google.visualization.PieChart(document.getElementById('panteonII'));
        chart.draw(data, options);
    }
}

function sucestrella(){

    if(document.getElementById("datos3")){

        arregloDatos = [];
        //Recupero los inputs que hay dentro del div datos
        var datos = document.getElementById("datos3").getElementsByTagName("input");
        var t = ['Gráfico', ''];
        arregloDatos.push(t);
        for (i = 0; i < datos.length; i = i + 2) {
            t = [datos[i].value, parseInt(datos[i + 1].value)];
            arregloDatos.push(t);
        }
        var data = google.visualization.arrayToDataTable(arregloDatos);
        // Opcional; Agrego el título del gráfico
        var options = {
            'title': "",
            'width': 290,
        };
        var chart = new google.visualization.PieChart(document.getElementById('estrella'));
        chart.draw(data, options);
    }

}

function sucshai(){
    if(document.getElementById("datos4")){
        arregloDatos = [];
        //Recupero los inputs que hay dentro del div datos
        var datos = document.getElementById("datos4").getElementsByTagName("input");
        var t = ['Gráfico', ''];
        arregloDatos.push(t);
        for (i = 0; i < datos.length; i = i + 2) {
            t = [datos[i].value, parseInt(datos[i + 1].value)];
            arregloDatos.push(t);
        }
        var data = google.visualization.arrayToDataTable(arregloDatos);
        // Opcional; Agrego el título del gráfico
        var options = {
            'title': "",
            'width': 290,
        };
        var chart = new google.visualization.PieChart(document.getElementById('shai'));
        chart.draw(data, options);
    }

}

function sucjunin(){
    if(document.getElementById("datos5")){
        arregloDatos = [];
        //Recupero los inputs que hay dentro del div datos
        var datos = document.getElementById("datos5").getElementsByTagName("input");
        var t = ['Gráfico', ''];
        arregloDatos.push(t);
        for (i = 0; i < datos.length; i = i + 2) {
            t = [datos[i].value, parseInt(datos[i + 1].value)];
            arregloDatos.push(t);
        }
        var data = google.visualization.arrayToDataTable(arregloDatos);
        // Opcional; Agrego el título del gráfico
        var options = {
            'title': "",
            'width': 290,
        };
        var chart = new google.visualization.ColumnChart(document.getElementById('junin'));
        chart.draw(data, options);
    }       

}

function succasanova(){
    if(document.getElementById("datos6")){

        arregloDatos = [];
        //Recupero los inputs que hay dentro del div datos
        var datos = document.getElementById("datos6").getElementsByTagName("input");
        var t = ['Gráfico', ''];
        arregloDatos.push(t);
        for (i = 0; i < datos.length; i = i + 2) {
            t = [datos[i].value, parseInt(datos[i + 1].value)];
            arregloDatos.push(t);
        }
        var data = google.visualization.arrayToDataTable(arregloDatos);
        // Opcional; Agrego el título del gráfico
        var options = {
            'title': "",
            'width': 290,
        };
        var chart = new google.visualization.PieChart(document.getElementById('casanova'));
        chart.draw(data, options);
    }

}

function sucvictoria(){
    if(document.getElementById("datos7")){

        arregloDatos = [];
        //Recupero los inputs que hay dentro del div datos
        var datos = document.getElementById("datos7").getElementsByTagName("input");
        var t = ['Gráfico', ''];
        arregloDatos.push(t);
        for (i = 0; i < datos.length; i = i + 2) {
            t = [datos[i].value, parseInt(datos[i + 1].value)];
            arregloDatos.push(t);
        }
        var data = google.visualization.arrayToDataTable(arregloDatos);
        // Opcional; Agrego el título del gráfico
        var options = {
            'title': "",
            'width': 290,
        };
        var chart = new google.visualization.PieChart(document.getElementById('victoria'));
        chart.draw(data, options);
    }

}

function sucshaya(){
    if(document.getElementById("datos8")){

        arregloDatos = [];
        //Recupero los inputs que hay dentro del div datos
        var datos = document.getElementById("datos8").getElementsByTagName("input");
        var t = ['Gráfico', ''];
        arregloDatos.push(t);
        for (i = 0; i < datos.length; i = i + 2) {
            t = [datos[i].value, parseInt(datos[i + 1].value)];
            arregloDatos.push(t);
        }
        var data = google.visualization.arrayToDataTable(arregloDatos);
        // Opcional; Agrego el título del gráfico
        var options = {
            'title': "",
            'width': 290,
        };
        var chart = new google.visualization.PieChart(document.getElementById('shaya'));
        chart.draw(data, options);
    }

}

function sucsuspension(){
    if(document.getElementById("datos9")){

        arregloDatos = [];
        //Recupero los inputs que hay dentro del div datos
        var datos = document.getElementById("datos9").getElementsByTagName("input");
        var t = ['Gráfico', ''];
        arregloDatos.push(t);
        for (i = 0; i < datos.length; i = i + 2) {
            t = [datos[i].value, parseInt(datos[i + 1].value)];
            arregloDatos.push(t);
        }
        var data = google.visualization.arrayToDataTable(arregloDatos);
        // Opcional; Agrego el título del gráfico
        var options = {
            'title': "",
            'width': 290,
        };
        var chart = new google.visualization.PieChart(document.getElementById('suspension'));
        chart.draw(data, options);
    }

}