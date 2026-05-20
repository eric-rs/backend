<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do Cadastro</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 40px 20px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            animation: slideIn 0.5s ease-out;
        }

        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .success-header {
            text-align: center;
            color: white;
            margin-bottom: 40px;
        }

        .success-header h1 {
            font-size: 32px;
            margin-bottom: 10px;
            animation: bounceIn 0.6s ease-out;
        }

        .success-icon {
            font-size: 60px;
            margin-bottom: 15px;
        }

        @keyframes bounceIn {
            0% {
                transform: scale(0.3);
                opacity: 0;
            }
            50% {
                opacity: 1;
            }
            70% {
                transform: scale(1.05);
            }
            100% {
                transform: scale(1);
            }
        }

        .card {
            background: white;
            border-radius: 12px;
            padding: 30px;
            margin-bottom: 25px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            animation: slideUp 0.6s ease-out;
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .card:nth-child(1) { animation-delay: 0.1s; }
        .card:nth-child(2) { animation-delay: 0.2s; }
        .card:nth-child(3) { animation-delay: 0.3s; }
        .card:nth-child(4) { animation-delay: 0.4s; }

        .card-title {
            color: #667eea;
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 20px;
            padding-bottom: 12px;
            border-bottom: 2px solid #f0f0f0;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .info-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin-bottom: 20px;
        }

        .info-item {
            display: flex;
            flex-direction: column;
        }

        .info-label {
            color: #888;
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            font-weight: 600;
            margin-bottom: 6px;
        }

        .info-value {
            color: #333;
            font-size: 18px;
            font-weight: 500;
        }

        .info-grid.full {
            grid-template-columns: 1fr;
        }

        .profile-section {
            text-align: center;
        }

        .profile-image {
            max-width: 200px;
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
            margin: 0 auto 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.15);
            transition: transform 0.3s ease;
        }

        .profile-image:hover {
            transform: scale(1.05);
        }

        .highlight {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 20px;
            border-radius: 8px;
            margin-top: 20px;
        }

        .highlight-item {
            display: flex;
            justify-content: space-between;
            padding: 10px 0;
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
        }

        .highlight-item:last-child {
            border-bottom: none;
        }

        .highlight-label {
            font-weight: 600;
        }

        .highlight-value {
            font-weight: 500;
        }

        .list-items {
            list-style: none;
            padding: 0;
        }

        .list-items li {
            padding: 12px 15px;
            background: #f9f9f9;
            border-left: 4px solid #667eea;
            margin-bottom: 10px;
            border-radius: 4px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .list-items li:before {
            content: "✓";
            color: #667eea;
            font-weight: bold;
            font-size: 18px;
        }

        .back-button {
            display: inline-block;
            background: white;
            color: #667eea;
            padding: 14px 28px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            margin-top: 20px;
            border: 2px solid #667eea;
            text-align: center;
            cursor: pointer;
        }

        .back-button:hover {
            background: #667eea;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 5px 20px rgba(102, 126, 234, 0.4);
        }

        .error-section {
            background: white;
            border-radius: 12px;
            padding: 30px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }

        .error-icon {
            font-size: 50px;
            margin-bottom: 15px;
        }

        .error-section h2 {
            color: #e74c3c;
            margin-bottom: 15px;
        }

        .error-section p {
            color: #666;
            margin-bottom: 20px;
        }

        @media (max-width: 600px) {
            .info-grid {
                grid-template-columns: 1fr;
            }

            .success-header h1 {
                font-size: 24px;
            }

            .card {
                padding: 20px;
            }

            .profile-image {
                max-width: 150px;
                height: 150px;
            }
        }

        .stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 15px;
            margin-top: 20px;
        }

        .stat-box {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 15px;
            border-radius: 8px;
            text-align: center;
        }

        .stat-number {
            font-size: 24px;
            font-weight: bold;
        }

        .stat-label {
            font-size: 12px;
            text-transform: uppercase;
            opacity: 0.9;
            margin-top: 5px;
        }
    </style>
</head>

<body>
    <div class="container">
        <?php
        date_default_timezone_set('America/Sao_Paulo');

        // Validation check
        $isValid = isset($_POST['nome']) && isset($_POST['sobrenome']) && 
                   isset($_POST['nascimento']) && isset($_POST['altura']) &&
                   isset($_POST['sexo']) && $_POST['sexo'] != "" &&
                   isset($_POST['horario']) && isset($_POST['area']) && 
                   !empty($_POST['area']) && !empty($_FILES['arquivo']['name']);

        if ($isValid) {
            // Process data
            $nome = htmlspecialchars($_POST['nome']);
            $sobrenome = htmlspecialchars($_POST['sobrenome']);
            $altura = floatval($_POST['altura']) / 100;
            $dataSelecionada = $_POST["nascimento"];
            $sexo = htmlspecialchars($_POST['sexo']);
            $horario = htmlspecialchars($_POST['horario']);
            $areas = $_POST['area'];

            // Date calculations
            $date = new DateTime($dataSelecionada);
            $date2 = new DateTime();
            $idade = $date->diff($date2);
            $idadeAnos = intval($idade->format('%Y'));

            // Format date
            $dataBrasileira = $date->format('d/m/Y');
            
            // File upload
            $diretorio_destino = "uploads/";
            $arquivo = $_FILES['arquivo'];
            $caminho = $diretorio_destino . $arquivo['name'];
            $fileUploaded = false;

            if (move_uploaded_file($arquivo['tmp_name'], $caminho)) {
                $fileUploaded = true;
            }
        ?>

        <div class="success-header">
            <div class="success-icon">✅</div>
            <h1>Cadastro Realizado com Sucesso!</h1>
            <p>Seus dados foram registrados</p>
        </div>

        <!-- Personal Information Card -->
        <div class="card">
            <div class="card-title">👤 Informações Pessoais</div>
            <div class="info-grid">
                <div class="info-item">
                    <span class="info-label">Nome Completo</span>
                    <span class="info-value"><?php echo "$nome $sobrenome"; ?></span>
                </div>
                <div class="info-item">
                    <span class="info-label">Gênero</span>
                    <span class="info-value"><?php echo $sexo; ?></span>
                </div>
            </div>
        </div>

        <!-- Birth and Physical Information Card -->
        <div class="card">
            <div class="card-title">📅 Dados Físicos e Idade</div>
            <div class="highlight">
                <div class="highlight-item">
                    <span class="highlight-label">Data de Nascimento:</span>
                    <span class="highlight-value"><?php echo $dataBrasileira; ?></span>
                </div>
                <div class="highlight-item">
                    <span class="highlight-label">Idade:</span>
                    <span class="highlight-value"><?php echo $idadeAnos; ?> anos</span>
                </div>
                <div class="highlight-item">
                    <span class="highlight-label">Altura:</span>
                    <span class="highlight-value"><?php echo number_format($altura, 2, ',', '.'); ?>m</span>
                </div>
            </div>
        </div>

        <!-- Availability and Interests Card -->
        <div class="card">
            <div class="card-title">⏰ Horário e Áreas de Interesse</div>
            <div class="info-grid full">
                <div class="info-item">
                    <span class="info-label">Horário Disponível</span>
                    <span class="info-value"><?php echo $horario; ?></span>
                </div>
            </div>
            <div class="info-label">Áreas de Interesse</div>
            <ul class="list-items">
                <?php
                foreach ($areas as $area) {
                    $icons = [
                        'Front End' => '💻',
                        'Back End' => '⚙️',
                        'Full Stack' => '🚀'
                    ];
                    $icon = $icons[htmlspecialchars($area)] ?? '📌';
                    echo "<li>$icon " . htmlspecialchars($area) . "</li>";
                }
                ?>
            </ul>
        </div>

        <!-- Profile Image Card -->
        <?php if ($fileUploaded) { ?>
        <div class="card profile-section">
            <div class="card-title" style="justify-content: center;">📸 Foto de Perfil</div>
            <img src="<?php echo htmlspecialchars($caminho); ?>" alt="Foto de Perfil" class="profile-image">
        </div>
        <?php } ?>

        <div style="text-align: center;">
            <a href="aula03.php" class="back-button">← Voltar ao Formulário</a>
        </div>

        <?php
        } else {
            // Error message
        ?>

        <div class="error-section">
            <div class="error-icon">⚠️</div>
            <h2>Dados Incompletos</h2>
            <p>Por favor, preencha todos os campos obrigatórios do formulário.</p>
            <a href="aula03.php" class="back-button">← Voltar ao Formulário</a>
        </div>

        <?php } ?>
    </div>
</body>

</html>
