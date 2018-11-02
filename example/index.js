var data = `
    <div>Hej</div>
`;
var name = 'konspekt';
var down = 'DOWNLOAD';

const ob = {
    'name' : name,
    'down' : down,
    'data' : '<div>Hej</div>',
};


function downloadPDF(){
    $.ajax({
        url : 'http://localhost/kptApi/php/index.php',
        method: 'get',
        contentType : 'application/json',
        data : ob
    }).done(function(json) {
        download(json, name+'.pdf');
        console.log(json);
    });
}