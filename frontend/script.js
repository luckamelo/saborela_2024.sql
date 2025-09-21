const form = document.getElementById('formTarefa');
const listaTarefas = document.getElementById('listaTarefas');

function carregarTarefas() {
    fetch('../back-end/listar_tarefas.php')
    .then(res => res.json())
    .then(data => {
        listaTarefas.innerHTML = '';
        data.forEach(t => {
            const li = document.createElement('li');
            li.textContent = `${t.titulo} - ${t.categoria} - ${t.prioridade}`;
            listaTarefas.appendChild(li);
        });
    });
}

form.addEventListener('submit', e => {
    e.preventDefault();
    const dados = new FormData(form);
    fetch('../back-end/adicionar_tarefa.php', { method: 'POST', body: dados })
    .then(res => res.text())
    .then(msg => {
        alert(msg);
        form.reset();
        carregarTarefas();
    });
});

carregarTarefas();