<html>
    <head>
        <link rel="stylesheet" href="mystyle.css">
        <!--div di seluruh halaman ini, diset seperti i block-->
        <style>
            div {
                color: green;
                font-weight: bold;
                text-align: right;
            }
            .judulhalaman {
                text-align: center;
                font-size: xx-large;
            }
        </style>


    </head>
    <body>
        <div class="judulhalaman">Selamat Datang</div>
        <!-- Inline CSS, digunakan ketika ada spesifik ke 1 bagian saja-->
       <p style="text-decoration: line-through; color: red;">Hallo apa kabar ?</p>
       <!--Inpage CSS, khusus digunakan ketika ada yang spesifik ke 1 halaman khusus-->
       <div>Hallo apa kabar ?</div> 
       <!--External CSS, digunakan untuk format umum 1 website-->
       <span class="hargafinal">Hallo apa kabar ?</span>
       <p>Last part</p>

    </body>
</html>