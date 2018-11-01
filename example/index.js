var data = `
    <div>Hej</div>
`;

var name = 'konspekt';

var down = 'download';

const ob = {
    'name' : "konspekt",
    'down' : "load",
    'data' : "<div>Hej</div>",
};

$.ajax({
    url : 'http://localhost/kptApi/index.php',
    method: 'get',
    contentType : 'application/json',
    data : ob
}).done(function(json) {
    console.log(json);
});