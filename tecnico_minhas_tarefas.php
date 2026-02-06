<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Verde - SGM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .hero-section {
            background-color: #198754; 
            padding: 25px 0; 
            margin-bottom: 35px;
            border-bottom: 1px solid #157347;
        }
    </style>
</head>
<body>

    <header class="hero-section">
        <div class="container d-flex justify-content-between align-items-center">
            <h4 class="display-6 fw-bold text-white mb-0">SGM / Gestão Técnica</h4>
            <button type="button" class="btn btn-outline-light btn-sm"><a href="api/logout.php" class="text-white">Sair</a></button>
        </div>
    </header>

    <main class="container">
        <h2 class="h5 fw-bold text-secondary mb-4">Minha fila de trabalho</h2>

        <div class="border rounded-3 bg-light d-flex align-items-center justify-content-center" style="min-height: 200px;">
            <div class="text-center">
                <span class="text-muted fs-5">Nenhuma tarefa pendente</span>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>