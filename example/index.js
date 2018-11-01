var data = `
    <div>Hej</div>
`;

var name = 'konspekt';

var down = 'load';

function api(){
    axios({
        method: 'get',
        url: 'localhost/kptApi/index.php',
        data: {
          data: data,
          name: name,
          down: down
        }
    })
    .then(function(response){
        console.log(response);
    });
}