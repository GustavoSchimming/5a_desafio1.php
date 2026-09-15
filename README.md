# 🚀 Desafio PHP: Controle de Acesso por Idade

Este projeto é um exercício prático desenvolvido em **PHP** e **HTML** que valida o acesso de um usuário com base em seu ano de nascimento e registra as entradas permitidas em um arquivo de texto local (`.txt`).

---

## 🛠️ Funcionalidades

- **Formulário Interativo:** Coleta o nome e o ano de nascimento do usuário.
- **Cálculo Automático de Idade:** Processa a idade subtraindo o ano de nascimento do ano atual.
- **Estrutura de Decisão:**
  - **Maior de idade (≥ 18 anos):** Exibe a mensagem `"Acesso permitido, [Nome]!"` e grava o registro no arquivo `log_acessos.txt`.
  - **Menor de idade (< 18 anos):** Exibe a mensagem `"Acesso negado, [Nome]!"` e bloqueia a gravação dos dados.
- **Persistência em Arquivo:** Utiliza manipuladores de arquivo (`fopen`, `fwrite`, `fclose`) para salvar os acessos autorizados.

---

## 💻 Tecnologias Utilizadas

- **HTML5:** Estruturação do formulário.
- **PHP:** Processamento dos dados enviandos por `POST`, cálculo lógico e manipulação do sistema de arquivos.

---

## 📂 Arquivos do Projeto

- `5a_desafio1.php`: Código-fonte principal com a interface e a lógica em PHP.
- `log_acessos.txt`: Arquivo gerado automaticamente para guardar os logs de acessos permitidos.

---

## 🏽‍💻 Como Executar

1. Certifique-se de ter um ambiente servidor PHP configurado (como **XAMPP**, **WAMP** ou o servidor embutido do PHP).
2. Clone este repositório para o diretório de seu servidor local (ex: `htdocs` no XAMPP).
3. Inicie o servidor PHP.
4. Acesse o arquivo no seu navegador pelo endereço local:
   ```bash
   http://localhost/5a_desafio1.php
