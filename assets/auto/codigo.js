$(document).ready(function(){
    //1er ejemplo
    var empresas = [
        {"companyName":"Aperture Science"},
        {"companyName":"MomCorp"},
        {"companyName":"Wayne Enterprises"},
        {"companyName":"Umbrella Corp"},
        {"companyName":"Gringotts"},
        {"companyName":"Globex"}
    ];    
    $("#empresas").fuzzyComplete(empresas);
    //console.log(empresas);
    
    //2do ejemplo
    var aeropuertos = [
        {"airportCode":"MEL","cityName":"Melbourne, Australia"},
        {"airportCode":"LAX","cityName":"Los Angeles, USA"},
        {"airportCode":"LHR","cityName":"Heathrow, London"},
        {"airportCode":"HKG","cityName":"Hong Kong"},
        {"airportCode":"NRT","cityName":"Narita, Tokyo, Japan"},
        {"airportCode":"FRA","cityName":"Frankfurt, Germany"}
      ];
    var fuseOptions = {keys: ["airportCode", "cityName"]};
    var options = {display:"cityName", key:"airportCode", fuseOptions: fuseOptions};
    console.log(aeropuertos);
    $("#aeropuertos").fuzzyComplete(aeropuertos, options);
    
    //3er ejemplo
    var url = 'https://jsonplaceholder.typicode.com/users';
    
    $.ajax({
       url: url,
       type:"GET",
       datatype:"json",
       success:function(data){
           console.log(data);
           var fuseOptions = {keys: ["name","username"]};
           var opciones = {display: "name", key: "username", fuseOptions: fuseOptions};
           $("#usuarios").fuzzyComplete(data, opciones)
       }
    });
});     