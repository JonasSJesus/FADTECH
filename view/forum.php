<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fórum Moderno</title>
    <link rel="stylesheet" href="./css/forum.css">
</head>
<body>
    <header>
        <h1>Fórum de Discussões</h1>
        <button><a href="/">Inicio</a></button>
        <button id="newTopicBtn">Nova Discussão</button>
    </header>

    <main>
        <div id="topicForm" class="hidden">
            <h2>Criar Nova Discussão</h2>
            <form id="newTopicForm">
                <input type="text" id="topicTitle" placeholder="Título da discussão" required>
                <textarea id="topicContent" placeholder="Conteúdo da discussão" required></textarea>
                <button type="submit">Publicar</button>
            </form>
        </div>

        <div id="topicsList">
            <!-- Topics will be added here dynamically -->
        </div>
    </main>

    <script src="/js/main.js"></script>
</body>
</html>

