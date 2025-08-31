<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Worker</title>
</head>
<body>
    <h1>Web Worker Example</h1>
    <button id="startWorker">Start Worker</button>
    <button id="stopWorker">Stop Worker</button>
    <div id="output"></div>
    <script>
        let worker;

        document.getElementById('startWorker').onclick = function() {
            if (typeof(Worker) !== "undefined") {
                if (!worker) {
                    worker = new Worker('worker.js');
                    worker.onmessage = function(event) {
                        document.getElementById('output').innerHTML += event.data + '<br>';
                    };
                }
            } else {
                document.getElementById('output').innerHTML = "Sorry, your browser does not support Web Workers...";
            }
        };

        document.getElementById('stopWorker').onclick = function() {
            if (worker) {
                worker.terminate();
                worker = undefined;
                document.getElementById('output').innerHTML += "Worker stopped.<br>";
            }
        };
    </script>
</body>
</html>