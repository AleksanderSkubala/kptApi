kptApi
---

### Small library for creating pdf-s(based on mpdf and jsPdf)

===

### USAGE

1. You can download zip with files, or clone respository

2. You can use this API by url

    ```
    http://p-webowe.000webhostapp.com/pdf/index.php

    Use method GET with data(by js or as link):
        1. 'data' - var with template of pdf in html
        2. 'type' - size of pdf's page(work in progress - doesn't work)
        3. 'down' - download or display on website(default is download)
        4. 'name' - name of file(without *.pdf)
    ```


3. Data

    >data
    >var with html template
    ```
    var data = `

    <div>Hi</div>

    `;
    ```

    >type
    >size of pdf
    ```
    W.I.P
    ```

    >down
    information about - do you want to download or load on page your pdf
    ```
    var down = 'load';
    //OR
    var down = 'down';  //default
    ```


===
