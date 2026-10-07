<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Refuge - Liste des animaux</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background: #eef3f8;
        }
        header {
            background: #2c5282;
            color: white;
            padding: 24px 40px;
        }
        h1 { margin: 0; }
        main { padding: 30px 40px; }
        table {
            border-collapse: collapse;
            width: 100%;
            background: white;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }
        th, td {
            padding: 12px 16px;
            text-align: left;
            border-bottom: 1px solid #e2e8f0;
        }
        th {
            background: #3182ce;
            color: white;
        }
        tr:nth-child(even) { background: #f7fafc; }
        tr:hover { background: #ebf8ff; }

        .badge {
            padding: 4px 12px;
            border-radius: 12px;
            color: white;
            font-size: 14px;
            font-weight: bold;
        }
        .disponible { background: #38a169; }
        .adopte { background: #3182ce; }
        .en_soin { background: #dd6b20; }
    </style>
</head>
<body>
<header>
    <h1>Liste des animaux du refuge</h1>
</header>

<main>
    <table>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Catégorie</th>
            <th>Statut</th>
        </tr>
        @foreach ($animaux as $animal)
            <tr>
                <td>{{ $animal->id }}</td>
                <td>{{ $animal->nom }}</td>
                <td>{{ $animal->categorie }}</td>
                <td>
                    <span class="badge {{ strtolower($animal->status) }}">
                        {{ $animal->status }}
                    </span>
                </td>
            </tr>
        @endforeach
    </table>
</main>
</body>
</html>
