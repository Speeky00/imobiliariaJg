# Sistema de Imobiliária — Projeto Didático em PHP

Este projeto tem como objetivo o desenvolvimento de um **sistema web de imobiliária**, utilizado como base para o ensino de conceitos fundamentais de desenvolvimento com PHP.

Ao longo das aulas, o sistema é construído de forma incremental, permitindo a compreensão prática de boas práticas e padrões utilizados no mercado.

---

## 🎯 Objetivo

Desenvolver um sistema simples para gerenciamento de imóveis, abordando:

- cadastro de cidades  
- cadastro de imóveis  
- listagem e manipulação de dados  
- integração com banco de dados  

---

## 🧱 Tecnologias Utilizadas

- PHP 8  
- MySQL  
- XAMPP  
- HTML  
- Bootstrap  
- Git e GitHub  

---

## 🧠 Conceitos Abordados

Durante o desenvolvimento do projeto, são trabalhados conceitos como:

- Programação Orientada a Objetos (POO)  
- Arquitetura MVC (versão simplificada)  
- Repository Pattern  
- Design Pattern Singleton  
- PDO (acesso a banco de dados)  
- Controllers e fluxo de requisição  
- Formulários (GET e POST)  
- PRG Pattern (Post → Redirect → Get)  
- Versionamento de código com Git  

---

## 📂 Estrutura do Projeto

O projeto está organizado seguindo uma separação de responsabilidades:

- **controllers/** → controle do fluxo da aplicação  
- **models/** → entidades e acesso a dados  
- **views/** → interface do usuário  
- **config/** → configurações do sistema  
- **public/** → ponto de entrada da aplicação  
- **assets/** → arquivos estáticos (CSS, JS, imagens)  
- **uploads/** → arquivos enviados pelos usuários  

---

## 🔄 Fluxo da Aplicação

1. O usuário realiza uma ação (requisição)  
2. O Front Controller recebe a requisição  
3. O Controller processa a ação  
4. O Repository acessa o banco de dados  
5. Os dados retornam para o Controller  
6. A View exibe as informações  

---

## ⚠️ Observações

Este projeto possui caráter **educacional**, com foco na compreensão dos conceitos fundamentais antes da utilização de frameworks.

---

## 📌 Mensagem Final

> O objetivo não é apenas construir um sistema, mas entender como ele funciona internamente.