<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            width: 700px;
            margin: auto;
        }

        h2 {
            text-align: center;
        }

        form {
            border: 3px solid #f1f1f1;
        }

        input[type=text],
        input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 7px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        button {
            background-color: rgb(25, 123, 162);
            color: white;
            padding: 12px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100px;
        }

        .container {
            padding: 16px;
        }
    </style>
</head>

<body>
    <h2>Integrasi CK Editor dengan Codeigniter 4</h2>
    <form action="" method="post">
        <div class="container">
            <label for="enkripsi"><b>Tulis Sesuatu</b></label>
            <textarea id="ckeditor" name="tek" placeholder="Tulis Berita.." style="height:250px" required></textarea>
            <button type="submit">Publish</button><br>
        </div>
    </form>
    <script src="//cdn.ckeditor.com/4.18.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('ckeditor');
    </script>
</body>

</html>