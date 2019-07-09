<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>testproject</title>

</head>
<body>

    <h1>monaco</h1>
    <h2>hello</h2>
    <p id="textBlock">
        <?php include('text.md') ?>
    </p>

    <div id="container" style="width:800px;height:600px;border:1px solid grey"></div>
    <div class="select"></div>
    <form action="input.php" method="post">
        <input type="submit">
    </form>
    

    <script src="/node_modules/monaco-editor/min/vs/loader.js"></script>
    <script>
        require.config({ paths: { 'vs': '/node_modules/monaco-editor/min/vs' }});
        require(['vs/editor/editor.main'], function() {
                this.editor = monaco.editor.create(document.getElementById('container'), {
                value: document.getElementById('textBlock').textContent,
                language: 'html',
                theme: 'vs-dark',
            });

        });
        let select = document.querySelector(".select");
        
    </script>
    <script src="js.js"></script>

</body>
</html>