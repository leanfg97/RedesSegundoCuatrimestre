var textoProduccion = '{"Productos": '+ '[' +
'{"codProd":"01","descripcion":"Trigo","TipoProd":"Cereal","Cantidad":1000,"Unidad":"Toneladas","FechaAlta":"25/01/2023"},'+
'{"codProd":"02","descripcion":"Girasol","TipoProd":"Oleaginosa","Cantidad":2000,"Unidad":"Toneladas","FechaAlta":"18/04/2023"},'+
'{"codProd":"03","descripcion":"Maiz","TipoProd":"Oleaginosa","Cantidad":5000,"Unidad":"Toneladas","FechaAlta":"07/04/2023"},'+
'{"codProd":"04","descripcion":"Novillo","TipoProd":"Ganado","Cantidad":100,"Unidad":"Cabezas","FechaAlta":"15/01/2023"},'+
'{"codProd":"05","descripcion":"Fardos de Pasto","TipoProd":"Alimento","Cantidad":100,"Unidad":"Fardos","FechaAlta":"21/05/2023"},'+
']'+
'}';

objJson=JSON.parse(textoProduccion);

console.log(objJson);
