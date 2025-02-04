// Store topics in localStorage
let topics = JSON.parse(localStorage.getItem('forum-topics')) || [];

// DOM Elements
const newTopicBtn = document.getElementById('newTopicBtn');
const topicForm = document.getElementById('topicForm');
const newTopicForm = document.getElementById('newTopicForm');
const topicsList = document.getElementById('topicsList');

// Event Listeners
newTopicBtn.addEventListener('click', () => {
    topicForm.classList.toggle('hidden');
});

newTopicForm.addEventListener('submit', (e) => {
    e.preventDefault();
    
    const title = document.getElementById('topicTitle').value;
    const content = document.getElementById('topicContent').value;
    
    const newTopic = {
        id: Date.now(),
        title,
        content,
        date: new Date().toLocaleDateString(),
        comments: [],
    };
    
    topics.unshift(newTopic);
    localStorage.setItem('forum-topics', JSON.stringify(topics));
    
    newTopicForm.reset();
    topicForm.classList.add('hidden');
    renderTopics();
});

function deleteTopic(topicId) {
    if (confirm('Tem certeza que deseja excluir esta discussão?')) {
        topics = topics.filter(topic => topic.id !== topicId);
        localStorage.setItem('forum-topics', JSON.stringify(topics));
        renderTopics();
    }
}

function deleteComment(topicId, commentIndex) {
    if (confirm('Tem certeza que deseja excluir este comentário?')) {
        const topicIndex = topics.findIndex(t => t.id === topicId);
        if (topicIndex !== -1) {
            topics[topicIndex].comments.splice(commentIndex, 1);
            localStorage.setItem('forum-topics', JSON.stringify(topics));
            renderTopics();
        }
    }
}

function renderTopics() {
    topicsList.innerHTML = topics.map(topic => `
        <div class="topic" data-id="${topic.id}">
            <div class="topic-header">
                <h3>${topic.title}</h3>
                <button class="delete-btn" onclick="deleteTopic(${topic.id})">Excluir</button>
            </div>
            <div class="topic-meta">Publicado em ${topic.date}</div>
            <div class="topic-content">${topic.content}</div>
            
            <div class="comments">
                <h4>Comentários (${topic.comments.length})</h4>
                ${topic.comments.map((comment, index) => `
                    <div class="comment">
                        <div class="comment-header">
                            <div class="topic-meta">Comentado em ${comment.date}</div>
                            <button class="delete-btn" onclick="deleteComment(${topic.id}, ${index})">Excluir</button>
                        </div>
                        <div class="comment-content">${comment.content}</div>
                    </div>
                `).join('')}
                
                <form class="comment-form" onsubmit="addComment(event, ${topic.id})">
                    <textarea placeholder="Adicione um comentário" required></textarea>
                    <button type="submit">Comentar</button>
                </form>
            </div>
        </div>
    `).join('');
}

function addComment(event, topicId) {
    event.preventDefault();
    const form = event.target;
    const content = form.querySelector('textarea').value;
    
    const topicIndex = topics.findIndex(t => t.id === topicId);
    if (topicIndex !== -1) {
        topics[topicIndex].comments.push({
            content,
            date: new Date().toLocaleDateString()
        });
        
        localStorage.setItem('forum-topics', JSON.stringify(topics));
        renderTopics();
    }
    
    form.reset();
}

// Initial render
renderTopics();