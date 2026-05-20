<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
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
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .container {
            background: white;
            border-radius: 12px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.2);
            max-width: 600px;
            width: 100%;
            padding: 40px;
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

        h1 {
            color: #333;
            margin-bottom: 30px;
            text-align: center;
            font-size: 28px;
        }

        .form-group {
            margin-bottom: 25px;
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .form-row.full {
            grid-template-columns: 1fr;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
            font-weight: 600;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        input[type="text"],
        input[type="date"],
        input[type="number"],
        select {
            width: 100%;
            padding: 12px 15px;
            border: 2px solid #e0e0e0;
            border-radius: 6px;
            font-size: 14px;
            transition: all 0.3s ease;
            font-family: inherit;
        }

        input[type="text"]:focus,
        input[type="date"]:focus,
        input[type="number"]:focus,
        select:focus {
            outline: none;
            border-color: #667eea;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
        }

        .input-suffix {
            font-size: 12px;
            color: #888;
            margin-left: 8px;
            font-weight: normal;
        }

        .options-group {
            display: grid;
            gap: 12px;
        }

        .radio-group,
        .checkbox-group {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 12px;
            background: #f9f9f9;
            border-radius: 6px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .radio-group:hover,
        .checkbox-group:hover {
            background: #f0f0f0;
        }

        input[type="radio"],
        input[type="checkbox"] {
            width: 18px;
            height: 18px;
            cursor: pointer;
            accent-color: #667eea;
        }

        .radio-label,
        .checkbox-label {
            cursor: pointer;
            margin: 0;
            flex-grow: 1;
        }

        .file-upload {
            position: relative;
            display: inline-block;
            width: 100%;
        }

        .file-upload input[type="file"] {
            display: none;
        }

        .file-upload-label {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            padding: 30px;
            border: 2px dashed #667eea;
            border-radius: 6px;
            background: #f9f7ff;
            cursor: pointer;
            transition: all 0.3s ease;
            text-align: center;
        }

        .file-upload-label:hover {
            background: #f0ebff;
            border-color: #764ba2;
        }

        .file-upload input[type="file"]:focus + .file-upload-label {
            border-color: #667eea;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
        }

        .file-name {
            color: #667eea;
            font-weight: 600;
            margin-top: 8px;
            font-size: 12px;
        }

        .button-group {
            display: flex;
            gap: 15px;
            margin-top: 40px;
        }

        button,
        input[type="submit"] {
            flex: 1;
            padding: 14px 28px;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        input[type="submit"] {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
        }

        input[type="submit"]:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 20px rgba(102, 126, 234, 0.4);
        }

        input[type="submit"]:active {
            transform: translateY(0);
        }

        .reset-btn {
            background: #f0f0f0;
            color: #555;
            border: 2px solid #e0e0e0;
        }

        .reset-btn:hover {
            background: #e8e8e8;
        }

        @media (max-width: 600px) {
            .container {
                padding: 25px;
            }

            .form-row {
                grid-template-columns: 1fr;
            }

            .button-group {
                flex-direction: column;
            }
        }

        .error-message {
            color: #e74c3c;
            font-size: 12px;
            margin-top: 5px;
            display: none;
        }

        .form-group.error input,
        .form-group.error select {
            border-color: #e74c3c;
        }

        .form-group.error .error-message {
            display: block;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>📋 Formulário de Cadastro</h1>
        
        <form id="form" action="receber1.php" method="post" enctype="multipart/form-data" novalidate>
            <!-- Personal Information Section -->
            <div class="form-row">
                <div class="form-group">
                    <label for="nome">Nome *</label>
                    <input type="text" id="nome" name="nome" required>
                    <span class="error-message">Por favor, preenchea o nome</span>
                </div>
                <div class="form-group">
                    <label for="sobrenome">Sobrenome *</label>
                    <input type="text" id="sobrenome" name="sobrenome" required>
                    <span class="error-message">Por favor, preencha o sobrenome</span>
                </div>
            </div>

            <!-- Date and Physical Info -->
            <div class="form-row">
                <div class="form-group">
                    <label for="nascimento">Data de Nascimento *</label>
                    <input type="date" id="nascimento" name="nascimento" required>
                    <span class="error-message">Por favor, selecione a data</span>
                </div>
                <div class="form-group">
                    <label for="altura">Altura *</label>
                    <div style="display: flex; align-items: center;">
                        <input type="number" id="altura" name="altura" required placeholder="180" min="50" max="250">
                        <span class="input-suffix">cm</span>
                    </div>
                    <span class="error-message">Por favor, informe uma altura válida</span>
                </div>
            </div>

            <!-- Gender -->
            <div class="form-group form-row full">
                <label for="sexo">Gênero *</label>
                <select id="sexo" name="sexo" required>
                    <option value="">-- Selecionar --</option>
                    <option value="Masculino">Masculino</option>
                    <option value="Feminino">Feminino</option>
                    <option value="Outro">Outro</option>
                </select>
                <span class="error-message">Por favor, selecione o gênero</span>
            </div>

            <!-- Available Times -->
            <div class="form-group form-row full">
                <label>Horário Disponível *</label>
                <div class="options-group">
                    <label class="radio-group">
                        <input type="radio" name="horario" value="Matutino" required>
                        <span class="radio-label">🌅 Manhã (6h - 12h)</span>
                    </label>
                    <label class="radio-group">
                        <input type="radio" name="horario" value="Vespertino" required>
                        <span class="radio-label">☀️ Tarde (12h - 18h)</span>
                    </label>
                    <label class="radio-group">
                        <input type="radio" name="horario" value="Noturno" required>
                        <span class="radio-label">🌙 Noite (18h - 24h)</span>
                    </label>
                    <label class="radio-group">
                        <input type="radio" name="horario" value="Diurno" required>
                        <span class="radio-label">🌇 Dia Completo</span>
                    </label>
                </div>
                <span class="error-message">Por favor, selecione um horário</span>
            </div>

            <!-- Areas of Interest -->
            <div class="form-group form-row full">
                <label>Área de Interesse *</label>
                <div class="options-group">
                    <label class="checkbox-group">
                        <input type="checkbox" name="area[]" value="Front End">
                        <span class="checkbox-label">💻 Front End</span>
                    </label>
                    <label class="checkbox-group">
                        <input type="checkbox" name="area[]" value="Back End">
                        <span class="checkbox-label">⚙️ Back End</span>
                    </label>
                    <label class="checkbox-group">
                        <input type="checkbox" name="area[]" value="Full Stack">
                        <span class="checkbox-label">🚀 Full Stack</span>
                    </label>
                </div>
                <span class="error-message">Por favor, selecione ao menos uma área</span>
            </div>

            <!-- File Upload -->
            <div class="form-group form-row full">
                <label for="arquivo">Foto de Perfil *</label>
                <div class="file-upload">
                    <input type="file" id="arquivo" name="arquivo" accept="image/*" required>
                    <label for="arquivo" class="file-upload-label">
                        <span>📸 Clique ou arraste uma imagem aqui</span>
                    </label>
                    <div class="file-name" id="fileName"></div>
                </div>
                <span class="error-message">Por favor, selecione uma imagem</span>
            </div>

            <!-- Buttons -->
            <div class="button-group">
                <button type="reset" class="reset-btn">Limpar</button>
                <input type="submit" value="Enviar">
            </div>
        </form>
    </div>

    <script>
        // File input handler
        const fileInput = document.getElementById('arquivo');
        const fileName = document.getElementById('fileName');
        const form = document.getElementById('form');

        fileInput.addEventListener('change', (e) => {
            if (e.target.files && e.target.files[0]) {
                fileName.textContent = `📁 ${e.target.files[0].name}`;
            }
        });

        // Drag and drop support
        const fileLabel = document.querySelector('.file-upload-label');
        ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
            fileLabel.addEventListener(eventName, preventDefaults, false);
        });

        function preventDefaults(e) {
            e.preventDefault();
            e.stopPropagation();
        }

        fileLabel.addEventListener('drop', (e) => {
            const dt = e.dataTransfer;
            const files = dt.files;
            fileInput.files = files;
            const changeEvent = new Event('change', { bubbles: true });
            fileInput.dispatchEvent(changeEvent);
        });

        // Form validation
        form.addEventListener('submit', (e) => {
            let isValid = true;
            const formGroups = form.querySelectorAll('.form-group');

            formGroups.forEach(group => {
                group.classList.remove('error');
            });

            // Check required fields
            const requiredInputs = form.querySelectorAll('input[required], select[required]');
            requiredInputs.forEach(input => {
                if (!input.value.trim()) {
                    input.closest('.form-group').classList.add('error');
                    isValid = false;
                }
            });

            // Check checkboxes
            const checkboxes = form.querySelectorAll('input[type="checkbox"][name="area[]"]');
            const checkedOne = Array.from(checkboxes).some(cb => cb.checked);
            if (!checkedOne) {
                checkboxes[0].closest('.form-group').classList.add('error');
                isValid = false;
            }

            // Check file
            if (!fileInput.files || !fileInput.files[0]) {
                fileInput.closest('.form-group').classList.add('error');
                isValid = false;
            }

            if (!isValid) {
                e.preventDefault();
                alert('Por favor, preencha todos os campos obrigatórios!');
            }
        });
    </script>
</body>

</html>