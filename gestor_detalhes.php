<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Chamado - SGM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .hero-section {
            background-color: #141617ff;
            padding: 25px 0; 
            margin-bottom: 35px;
            border-bottom: 1px solid #343a40;
        }
        .evidence-img {
            width: 100%;
            height: 150px;
            object-fit: cover;
            border-radius: 8px;
            background-color: #e9ecef;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 2px dashed #dee2e6;
        }
    </style>
</head>
<body>

    <header class="hero-section">
        <div class="container d-flex justify-content-between align-items-center">
            <h4 class="display-6 fw-bold text-white mb-0">SGM / Detalhes do Chamado</h4>
            <div class="d-flex gap-2">
                <button type="button" class="btn btn-outline-danger btn-sm">Sair</button>
            </div>
        </div>
    </header>

    <main class="container pb-5">
        <div class="row g-4">
            
            <div class="col-md-8">
                <div class="card shadow-sm mb-4">
                    <div class="card-body">
                        <h5 class="fw-bold mb-4 border-bottom pb-2 text-dark">Dados da Solicitação </h5>
                        
                        <div class="mb-4">
                            <label class="text-muted small d-block">Status</label>
                            <span class="badge text-bg-dark px-3 py-2">Fechado</span>
                        </div>

                        <div class="mb-4">
                            <label class="text-muted small d-block">Descrição</label>
                            <p class="fw-medium fs-5">quebrou a minha mesa </p>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="text-muted small d-block">Local</label>
                                    <p class="fw-medium mb-1">Bloco B - Piso 2</p>
                                </div>
                                <div class="mb-3">
                                    <label class="text-muted small d-block">Solicitante</label>
                                    <p class="fw-medium mb-1">João da Silva</p>
                                </div>
                                <div class="mb-3">
                                    <label class="text-muted small d-block">Abertura</label>
                                    <p class="fw-medium mb-0">06/02/2026 às 09:15</p>
                                </div>
                            </div>
                        </div>
""
                        <hr class="my-4">

                        <h6 class="fw-bold mb-3">Evidências</h6>
                        <div class="row text-center">
                            <div class="col-6">
                                <div class="evidence-img mb-2 text-muted small">Foto Antes</div>
                                <input type="file" class="form-control form-control-sm">
                            </div>
                            <div class="col-6">
                                <div class="evidence-img mb-2 text-muted small">Foto Depois</div>
                                <input type="file" class="form-control form-control-sm">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card shadow-sm border-primary">
                    <div class="card-header bg-dark text-white fw-bold py-3">
                        Triagem e Atribuição
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="mb-3">
                                <label class="form-label small fw-bold text-secondary">Técnico Responsável</label>
                                <select class="form-select">
                                    <option selected disabled>Selecione um técnico...</option>
                                    <option>Carlos Engenharia</option>
                                    <option>Roberto Manutenção</option>
                                    <option>Ana Elétrica</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label small fw-bold text-secondary">Prioridade</label>
                                <input type="text" class="form-control" placeholder="Escreva a prioridade (ex: Alta)">
                            </div>

                            <div class="mb-4">
                                <label class="form-label small fw-bold text-secondary">Data Prevista</label>
                                <input type="date" class="form-control">
                            </div>

                            <button type="submit" class="btn btn- bg-success w-100 fw-bold py-2">Confirmar atribuições</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>