<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .hero-section {
            background-color: #141617ff;
            padding: 25px 0; 
            margin-bottom: 35px;
            border-bottom: 1px solid #343a40;
        }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>
<body>

    <header class="hero-section">
        <div class="container d-flex justify-content-between align-items-center">
            <h4 class="display-6 fw-bold text-white mb-0">SGM / Gestão Administrativa</h4>
            <button type="button" class="btn btn-outline-danger btn-sm"><a href="api/logout.php" class="text-white">Sair</a></button>
        </div>
    </header>

    <main class="container">
        <div class="row g-4 mb-5">
            <div class="col-md-4">
                <div class="card h-100 text-bg-primary shadow-sm">
                    <div class="card-body">
                        <h5 class="card-text">Novas Solicitações</h5>
              <h2>0</h2>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card h-100 text-bg-warning shadow-sm">
                    <div class="card-body">
                        <h5 class="card-text">Em atendimento</h5>
                <h2>0</h2>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card h-100 text-bg-danger shadow-sm">
                    <div class="card-body">
                        <h5 class="card-text">Críticos/Urgentes</h5>
                 <h2>0</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center pb-5">
            <button type="button" class="btn btn-outline-secondary btn-lg"><i class="bi bi-list-ul"></i> Gerenciar todos os chamados</button>
            <button type="button" class="btn btn-outline-secondary btn-lg"><i class="bi bi-geo-alt"></i> Configurar Ambientes</button>
        </div>
    </main>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>