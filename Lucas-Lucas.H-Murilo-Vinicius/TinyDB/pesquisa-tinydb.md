# Pesquisa – TinyDB (MIT App Inventor)

## Integrantes
Vinicius Moreira Silva
Lucas Marques
Murilo Bertani
Lucas Huberto
---

# 1. O que é o MIT App Inventor?

O MIT App Inventor é uma plataforma gratuita criada pelo MIT para desenvolver aplicativos Android utilizando programação por blocos.

### Para que é utilizado?
É usado para criar aplicativos móveis de forma simples, principalmente para ensino e desenvolvimento de projetos.

### Vantagens
- Fácil de aprender;
- Não exige conhecimento em programação tradicional;
- Interface intuitiva;
- Permite testar aplicativos rapidamente.

> Fonte: MIT App Inventor (2024).

---

# 2. O que é o TinyDB?

O TinyDB é um componente do App Inventor que permite armazenar informações diretamente no dispositivo.

### Finalidade
Guardar dados para que permaneçam salvos mesmo após fechar o aplicativo.

### Onde os dados ficam?
No armazenamento interno do celular.

### Vantagens
- Não precisa de internet;
- Fácil utilização;
- Armazenamento permanente.

### Limitações
- Os dados ficam apenas no aparelho;
- Não permite compartilhamento entre usuários.

---

# 3. Funcionamento do TinyDB

O TinyDB funciona utilizando **Tags (chaves)** e **Valores**.

- **Tag:** identifica o dado.
- **Valor:** informação armazenada.

### Operações

- **Gravar:** salva um valor.
- **Ler:** recupera um valor.
- **Atualizar:** grava novamente usando a mesma Tag.
- **Remover:** exclui uma Tag.

### Exemplo

Tag:
```
nome
```

Valor:
```
João
```

---

# 4. Componentes Relacionados

| Bloco | Função |
|--------|--------|
| StoreValue | Salva um valor. |
| GetValue | Recupera um valor. |
| ClearTag | Remove uma Tag específica. |
| ClearAll | Remove todos os dados armazenados. |

---

# 5. Aplicações Práticas

O TinyDB pode ser utilizado em:

- Lista de tarefas;
- Agenda de contatos;
- Cadastro de clientes;
- Lista de compras;
- Aplicativo de anotações;
- Controle financeiro;
- Jogos com salvamento de pontuação.

Ele é adequado porque armazena informações localmente, sem necessidade de internet.

---

# 6. TinyDB × TinyWebDB

| TinyDB | TinyWebDB |
|---------|-----------|
| Armazena no celular | Armazena em servidor |
| Não precisa de internet | Precisa de internet |
| Dados apenas do aparelho | Dados compartilhados |
| Mais rápido | Permite acesso remoto |

### Quando usar?

**TinyDB**
- Dados pessoais e locais.

**TinyWebDB**
- Aplicativos com vários usuários.

---

# 7. Boas Práticas

- Utilizar nomes claros nas Tags;
- Organizar os dados corretamente;
- Atualizar informações quando necessário;
- Excluir dados desnecessários;
- Fazer testes para evitar perda de informações.

---

# 8. Conclusão

O TinyDB é um componente muito importante do MIT App Inventor, pois permite armazenar informações diretamente no dispositivo de forma simples e rápida.

Ele pode ser utilizado em aplicativos como listas, cadastros, jogos, anotações e controles financeiros. Durante esta pesquisa, o grupo compreendeu como funciona o armazenamento local de dados utilizando Tags e Valores e aprendeu as diferenças entre TinyDB e TinyWebDB.

---

# Referências (ABNT)

MIT APP INVENTOR. *TinyDB*. Disponível em: <https://appinventor.mit.edu/>. Acesso em: 03 jul. 2026.

MIT APP INVENTOR. *Documentation*. Disponível em: <https://ai2.appinventor.mit.edu/reference/components/storage.html>. Acesso em: 03 jul. 2026.
