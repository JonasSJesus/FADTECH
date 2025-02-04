<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, max-scale=1.0">
    <title>FADTECH</title>
    <link rel="stylesheet" href="./css/styles.css">

</head>

<body>
    <header>
        <nav>
            <h1 id="topo"><a href="">FADTECH</a></h1>

            <ul>
                <li class="projetot"><a href="#projetos">Projetos</a></li>
                <li class="cronogramat"><a href="#cronograma">Cronograma</a></li>
                <li class="contatot"><a href="#contato">Contato</a></li>
                <li class="Saibat"><a href="#Saiba">Saiba mais</a></li>
            </ul>
            <button id="loginBtn">Login</button>
        </nav>
    </header>
    <main>
        <!-- Hero Section -->
        <section class="hero">
            <h1>Transforme seu futuro com programação</h1>
            <p>Participe do maior programa de oportunidades em tecnologia do Rio Grande do sul</p>
        </section>

        <div class="modal" id="loginModal">
            <div class="modal-content">
                <span class="close" id="closeModal">&times;</span>
                <h2>Login</h2>
                <form>
                    <div class="form-group">
                        <label for="email">Usuário</label>
                        <input type="email" id="email" placeholder="Digite seu Usuário" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Senha</label>
                        <input type="password" id="password" placeholder="Digite sua senha" required>
                        <select name="usuario" id="usuario">
                            <option value="aluno">Aluno</option>
                            <option value="cordenação">Coordenação</option>
                            <option value="admin">Admin</option>
                        </select>
                    </div>
                    <button type="submit">Login</button>
                    <h3><a href="/dashboard">Dashboard</a></h3>
                </form>
            </div>
        </div>

        <!-- Informações -->
        <section class="program-info" id="Saiba">
            <h2 class = "Saiba">Observações Gerais</h2>
            <div class="grid">
                <div class="card">
                    <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                        alt="Coding">
                    <h3>Curriculo atualizado</h3>
                    <p>Aprenda as melhores e mais atualizadas tecnologias</p>
                </div>
                <div class="card">
                    <img src="https://images.unsplash.com/photo-1531482615713-2afd69097998?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                        alt="Team">
                    <h3>Instrutores aptos e acesiveis</h3>
                    <p>Aprenda com o suporte necessário</p>
                </div>
                <div class="card">
                    <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80"
                        alt="Collaboration">
                    <h3>Experiências à mão</h3>
                    <p>Construa projetos reais e desenvolva portfólio

                    </p>
                </div>
            </div>
        </section>

        <!-- Projetos -->
        <section class="student-projects" id="projetos">
            <h2 class="Sucesso">Sucessos de nossos alunos</h2>
            <h4 class="linguagem">Python</h4>
            <div class="projects-grid">
                <div class="project-card">
                    <img src="https://www.fiberoficial.com.br/cdn/shop/articles/academia_musculacao.jpg?v=1687444110&width=2048"
                        alt="Project 1">
                    <h3>Sistema de treinos automáticos</h3>
                    <p>Turma de 2024</p>
                </div>
                <div class="project-card">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTTCkOcJNSDZu9f5ToYIW9seIzQ1McfPgU2dg&s"
                        alt="Project 2">
                    <h3>Game em RPG</h3>
                    <p>Turma de 2024</p>
                </div>
                <div class="project-card">
                    <img src="https://www.designi.com.br/images/preview/10679078.jpg"
                        alt="Project 2">
                    <h3>Cardápio de restaurante</h3>
                    <p>Turma de 2024</p>
                </div>
                <div class="project-card">
                    <img src="https://scc10.com.br/wp-content/uploads/2024/09/f2586486-e695-4f11-9b4f-cb849ddfcf1a_11zon.jpg.webp"
                        alt="Project 2">
                    <h3>Jogo do milhão</h3>
                    <p>Turma de 2024</p>
                </div>
            </div>
        </section>

        <!-- cronograma -->
        <section class="schedule" id="cronograma">
            <h2 class="Cronograma">Cronograma atual</h2>
            <div class="timeline">
                <div class="timeline-item">
                    <h3>Primeira fase - Fundamentos</h3>
                    <p>8 semanas - HTML, CSS, JavaScript</p>
                </div>
                <div class="timeline-item">
                    <h3>Segunda fase - Conceitos</h3>
                    <p>8 semanas - React, Node.js</p>
                </div>
                <div class="timeline-item">
                    <h3>Terceira fase - projetos</h3>
                    <p>4 semanas - Aplicações reais</p>
                </div>
            </div>
        </section>
    </main>
    <footer class="footer" id="footer">
        <div class="footer-container">
          <div class="footer-section">
            <h3>Contato</h3>
            <p>Email: contato@fadtech.com</p>
            <p>Telefone: (51) 1234-5678</p>
          </div>
          <div class="footer-section">
            <h3>Endereço</h3>
            <p>Rua Exemplo, 123</p>
            <p>Porto Alegre, RS</p>
          </div>
          <div class="footer-section">
            <h3>Redes Sociais</h3>
            <p><a href="#">Facebook</a></p>
            <p><a href="#">Instagram</a></p>
            <p><a href="#">LinkedIn</a></p>
          </div>
        </div>
      </footer>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js">
    </script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script>
        const loginBtn = document.getElementById('loginBtn');
        const loginModal = document.getElementById('loginModal');
        const closeModal = document.getElementById('closeModal');

        loginBtn.addEventListener('click', () => {
            loginModal.style.display = 'flex';
        });

        closeModal.addEventListener('click', () => {
            loginModal.style.display = 'none';
        });

        window.addEventListener('click', (event) => {
            if (event.target === loginModal) {
                loginModal.style.display = 'none';
            }
        });

        document.querySelector(".projetot a").addEventListener("click", function (event) {
            event.preventDefault();
            document.getElementById("projetos").scrollIntoView({
                behavior: "smooth"
            });
        });

        document.querySelector(".cronogramat a").addEventListener("click", function (event) {
            event.preventDefault();
            document.getElementById("cronograma").scrollIntoView({
                behavior: "smooth"
            });
        });

        document.querySelector(".Saibat a").addEventListener("click", function (event) {
            event.preventDefault();
            document.getElementById("Saiba").scrollIntoView({
                behavior: "smooth"
            });
        });

        document.querySelector(".contatot a").addEventListener("click", function (event) {
            event.preventDefault();
            document.getElementById("footer").scrollIntoView({
                behavior: "smooth"
            });
        });

        document.querySelector("#topo a").addEventListener("click", function (event) {
            event.preventDefault();
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });
        });
        
    </script>

</body>

</html>
