<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Home</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col pt-5 mt-5 text-center">
                <section>
                    <div class="p-2">
                        <div class="row">
                            <div class=" col border p-2">
                                <div class="justify-content-center card card-body text-light" style="background: rgb(2,0,36);
background: linear-gradient(4deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 0%, rgba(0,212,255,1) 90%, rgba(0,212,255,1) 100%);">
                                    <div>
                                    <i class="bi bi-box"></i>
                                    </div>
                                    
                                    <div class="col">
                                        <?php
                                        echo "<h5>Conferencia</h5>";
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col border p-2">
                                <div class="justify-content-center card card-body">
                                    <i class="bi bi-clipboard-data"></i>
                                    <div class="col">
                                        <?php
                                        echo "<h5>Entregues</h5>";
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col border p-2">
                                <div class="d-flex justify-content-center card card-body">
                                    <i class="bi bi-exclamation-diamond"></i>
                                    <div class="col">
                                        <?php
                                        echo "<h5>Chamados</h5>";
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <hr class="border border-dark border-2 opacity-50">
                <section class="card">
                    <div class="row">
                        <div class="col card border border-dark me-5">
                        <h2>Conferencia</h2>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                                <th scope="col">Visualizar</th>
                                <th scope="col">Editar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td><button class="btn btn-primary"><i class="bi bi-clipboard-data"></i></button></td>
                                <td><button class="btn btn-warning"><i class="bi bi-clipboard-data"></i></button></td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                                <td><button class="btn btn-primary"><i class="bi bi-clipboard-data"></i></button></td>
                                <td><button class="btn btn-warning"><i class="bi bi-clipboard-data"></i></button></td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                                <td><button class="btn btn-primary"><i class="bi bi-clipboard-data"></i></button></td>
                                <td><button class="btn btn-warning"><i class="bi bi-clipboard-data"></i></button></td>
                            </tr>
                        </tbody>
                    </table> 
                        </div>
                        <div class="col card border border-dark ms-5">
                        <h2>Entregues</h2>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                                <th escope="col">Visualizar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td><button class="btn btn-primary"><i class="bi bi-clipboard-data"></i></button></td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                                <td><button class="btn btn-primary"><i class="bi bi-clipboard-data"></i></button></td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                                <td><button class="btn btn-primary"><i class="bi bi-clipboard-data"></i></button></td>
                            </tr>
                        </tbody>
                    </table>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>