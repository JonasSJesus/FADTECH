<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard do Curso</title>
    <link rel="stylesheet" href="./css/dashboard.css">
</head>
<body>
    <header>
        <nav>
            <div class="logo"><a href='/'>FADTECH</a></div>
            <ul class="dashboard">
                <li><a href="/forum">Fórum</a></li>
                <li><a href="#contatos">Contatos</a></li>
                <li><a href="#calendario">Calendário</a></li>
                <li><a href="#perfil">Meu Perfil</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="progress-section">
            <h2>Progresso do Curso</h2>
            <div class="progress-bar">
                <div class="progress" style="width: 5%;">5%</div>
            </div>
        </section>

        <div class="dashboard-grid">
            <section class="content-section">
                <h2>Conteúdo das Aulas</h2>
                <div class="slides-list">
                    <div class="slide-item">
                        <h3>Módulo 1 - Introdução</h3>
                        <a href="#" class="btn">Ver Slides</a>
                    </div>
                    <div class="slide-item">
                        <h3>Módulo 2 - Fundamentos</h3>
                        <a href="#" class="btn">Ver Slides</a>
                    </div>
                    <div class="slide-item">
                        <h3>Módulo 3- Conceitos Avançados</h3>
                        <a href="#" class="btn">Ver Slides</a>
                    </div>
                </div>
            </section>

            <section class="grades-section">
                <h2>Notas e Frequência</h2>
                <div class="grades-table">
                    <table>
                        <tr>
                            <th>Disciplina</th>
                            <th>Nota</th>
                            <th>Faltas</th>
                        </tr>
                        <tr>
                            <td>HTML e CSS</td>
                            <td>8.5</td>
                            <td>2</td>
                        </tr>
                        <tr>
                            <td>JavaScript</td>
                            <td>9.0</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>PHP e backend</td>
                            <td>7.8</td>
                            <td>3</td>
                        </tr>
                    </table>
                </div>
            </section>
        </div>
    </main>
</body>
</html>
