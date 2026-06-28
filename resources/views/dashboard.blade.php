<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $company_name }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <!-- Navbar -->
    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <span class="navbar-brand fw-bold">
                🏢 {{ $company_name }}
            </span>
        </div>
    </nav>

    <!-- Contenu principal -->
    <div class="container mt-5">

        <h1 class="mb-4">Tableau de bord</h1>

        <div class="row">

            <!-- Carte Employés -->
            <div class="col-md-6 mb-4">
                <div class="card shadow-sm">
                    <div class="card-body text-center">
                        <h5 class="card-title text-muted">Total Employés</h5>
                        <p class="display-4 fw-bold text-primary">
                            {{ $total_employees }}
                        </p>
                    </div>
                </div>
            </div>

            <!-- Carte Départements -->
            <div class="col-md-6 mb-4">
                <div class="card shadow-sm">
                    <div class="card-body text-center">
                        <h5 class="card-title text-muted">Total Départements</h5>
                        <p class="display-4 fw-bold text-success">
                            {{ $total_departments }}
                        </p>
                    </div>
                </div>
            </div>

        </div>

        <div class="alert alert-info mt-3">
            ✅ Système opérationnel — Laravel 12 + Docker
        </div>

    </div>

</body>
</html>
