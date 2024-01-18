<?php
require __DIR__ . '/vendor/autoload.php';
?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PlantUML</title>
    <link rel="stylesheet" href="vendor/twbs/bootstrap/dist/css/bootstrap.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/monaco-editor/0.20.0/min/vs/loader.min.js"></script>
        <script src="js/app.js"></script>
</head>
<body>

    <div class="d-flex justify-content-between align-items-center px-4">
        <div class="d-flex justify-content-between align-items-center px-4">
            <div class="form-check">
              <input class="form-check-input" type="radio" name="flexRadio" id="pngRadio">
              <label class="form-check-label" for="pngRadio">
                png
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="flexRadio" id="svgRadio" checked>
              <label class="form-check-label" for="svgRadio">
                svg
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="flexRadio" id="txtRadio">
              <label class="form-check-label" for="txtRadio">
                txt
              </label>
            </div>

            <button id="render" type="button" class="btn btn-primary m-4" onclick="renderContent()">RENDER</button>
        </div>
        <div>
            <a id="download" type="button" class="text-decoration-none m-4" onclick="downloadContent()" download="download.html">
                download
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                    <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5"/>
                    <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708z"/>
                </svg>
            </a>
        </div>
    </div>

    <div class="d-flex justify-content-center align-content-center m-3">
        <div id="editor-container" class="m-4 w-50" style="height:80vh;border:1px solid grey"></div>
        <div id="converted-container" class="m-4 w-50 overflow-auto" style="height:80vh;border:1px solid grey"></div>
    </div>
</body>
</html>