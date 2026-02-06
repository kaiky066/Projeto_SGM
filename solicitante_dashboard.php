<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solicitante - SGM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .hero-section {
            background-color: #275cb1ff;
            padding: 25px 0; 
            margin-bottom: 35px;
            border-bottom: 1px solid #0a1830;
        }
    </style>
</head>
<body>

    <header class="hero-section">
        <div class="container d-flex justify-content-between align-items-center">
            <h4 class="display-6 fw-bold text-white mb-0">SGM / Solicitante</h4>
            <button type="button" class="btn btn-outline-light btn-sm"><a href="api/logout.php" class="text-white">Sair</a></button>
        </div>
    </header>

    <main class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2 class="h5 fw-bold text-secondary mb-0">Minhas solicitações</h2>
            <button type="button" class="btn btn-success">
                <span class="fw-bold">+</span> Novas solicitações
            </button>
        </div>

       <div class="table-responsive">
    <table class="table table-hover align-middle">
        <thead class="table-light">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Foto</th>
                <th scope="col">Local</th>
                <th scope="col">Descrição</th>
                <th scope="col">Data</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">#1024</th>
                <td>
                    <img src="https://via.placeholder.com/40" alt="fottos" class="rounded-circle border">
                </td>
                <td>bloco A - sala 202</td>
                <td>minha cadeira quebrou</td>
                <td>06/07/2023</td>
                <td><span class="badge text-bg-dark">fechado</span></td>
            </tr>
            
         
            </tr>
        </tbody>
    </table>
</div>


    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>