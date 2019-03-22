var data = `
    <div>Czeć</div>
`;
var name = 'konspekt';
var down = 'DOWNLOAD';

const ob = {
    'name' : name,
    'down' : 'load',
    'data' : data,
};


function downloadPDF(){
    /*var dataOb = data.replace(/\s/g,'');
    location.replace("http://p-webowe.000webhostapp.com/kptApi/index.php?name="+name+"&down=download&data="+dataOb);*/

    $.ajax({
        url : 'http://p-webowe.000webhostapp.com/kptApi/index.php',
        method: 'get',
        contentType : 'application/json',
        data : ob
    }).done(function(json) {
        download(json, name+'.pdf');
        console.log(json);
    });
}