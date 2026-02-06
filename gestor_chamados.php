<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestão Geral - SGM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <style>
        .hero-section {
            background-color: #141617ff;
            padding: 25px 0; 
            margin-bottom: 35px;
            border-bottom: 1px solid #343a40;
        }
        .filter-link {
            text-decoration: none;
            color: #6c757d;
            font-weight: 500;
            padding: 5px 15px;
            border-radius: 20px;
            transition: 0.3s;
        }
        .filter-link:hover, .filter-link.active {
            background-color: #e9ecef;
            color: #000;
        }
    </style>
</head>
<body>

    <header class="hero-section">
        <div class="container d-flex justify-content-between align-items-center">
            <h4 class="display-6 fw-bold text-white mb-0">SGM / Gestão Geral</h4>
            
            <div class="d-flex gap-2">
                <button type="button" class="btn btn-outline-light btn-sm">Chamados</button>
                <button type="button" class="btn btn-outline-light btn-sm">Locais</button>
                <button type="button" class="btn btn-outline-danger btn-sm">Sair</button>
            </div>
        </div>
    </header>

    <main class="container">
        <div class="mb-4">
            <h2 class="h4 fw-bold text-dark">Todos os chamados</h2>
        </div>

        <div class="d-flex gap-3 mb-4 border-bottom pb-3">
            <a href="#" class="filter-link active">Todos</a>
            <a href="#" class="filter-link">Abertos</a>
            <a href="#" class="filter-link">Em andamento</a>
            <a href="#" class="filter-link">Concluídos</a>
        </div>

        <div class="card shadow-sm">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>ID</th>
                                <th>Solicitante</th>
                                <th>Local/tipo</th>
                                <th>Prioridade</th>
                                <th>Técnico</th>
                                <th>Status</th>
                                <th>Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>#5</td>
                                <td>cadeira do chefe</td>
                                <td>Problema no projetor</td>
                                <td><i class="bi bi-circle-fill text-warning"></i> Alta</td>
                                <td>Nilo</td>
                                 <td><span class="badge bg-dark">Fechado</span></td>
                                  <td><button type="button" class="btn btn-primary"><i class="bi bi-eye"></i> Gerenciar</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>