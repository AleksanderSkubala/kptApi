var data = `
    <div>Hej</div>
`;

var name = 'konspekt';

var down = 'load';

function api(){
    axios({
        method: 'post',
        url: 'p-webowe.000webhostapp.com/kptApi/index.php',
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