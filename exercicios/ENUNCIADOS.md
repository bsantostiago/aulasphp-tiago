# Enunciados dos exercícios

## Exercício 06 (na pasta 11-site) - 14/02/2025
 
1. Adicione uma página de **Contato** ao site Exemplo
2. Mostre no rodapé a **data** e **hora atual** usando programação PHP.
3. Adicione livremente alguns recursos básicos do Bootstrap para formatação
 
🔥 **Desafio**: pesquise e programe um código PHP que permita identificar qual página está **aberta no momento** e, a partir disso, personalize o título de acordo com a página. 💡
 
### Exemplos:

- Está na index.php? Então mostre no `title`: Página Inicial - Site PHP
- Está na cursos.php?   Então mostre no `title`: Treinamentos - Site PHP
- Está na duvidas.php?  Então mostre no `title`: Dúvidas - Site PHP
- Está na contato.php?  Então mostre no `title`: Contato - Site PHP



---

## Exercício 05 (Funções) - 11/02/2025
 
- Crie três variáveis para representar as notas de um aluno
- Calcule a média destas notas e verifique a situação do aluno (aprovado ou reprovado) - *o critério é ter média a partir de 7*
 
🍼**Desafios moleza**👵
 
1. Use duas **funções**: uma para isolar a lógica de cálculo da média, e outra para isolar a lógica de verificação da situação do aluno.
2. Use recursos do CSS (ou Bootstrap) para formatar em vermelho caso reprovado, e azul caso aprovado.
 
🔥**Desafio ferradão**😎
 
- Adapte o exercício para que funcione com uma lista (array associativo) de 5 alunos.

---

## Exercício 04 (Loop e Estrutura de Dados) - 06/02/2025
Crie uma estrutura de dados (pode ser um array indexado, ou array associativo, ou array de objetos, ou matriz) com 6 nomes de linguagens e uma pequena descrição para cada.
 
Exemplo:
 
- HTML: Estruturação
- CSS: Estilos
- JS: Comportamentos
- PHP: Back-End
- SQL: Manipulação de dados
- Java: Softwares
 
Em seguida, use loop para iterar sobre esta estrutura de dados e exibir todos os dados em linhas de uma tabela HTML conforme exemplo abaixo:
 
ID  | Linguagem   |   Descrição
--- | ---------   |   --------
1   | HTML        |   Estruturação
2   | CSS         |   Estilos
3   | JS          |   Comportamentos
4   | PHP         |   Back-End
5   | SQL         |   Manipulação de dados
6   | Java        |   Softwares
 
### Desafios:
 
- Pense e implemente uma maneira de exibir um ID (fictício) para cada curso como primeira coluna da tabela.
- Faça uma boa formatação CSS da tabela, usando recursos como linhas de cores alternadas e realce de cor ao passar o mouse em cada linha.

---

## Exercício 03 (Condicionais) - 05/02/2025

Em um novo arquivo **exercicio03.php**, crie um código PHP que permita calcular o valor final de uma compra aplicando descontos. Os critérios são:
 
1. Valor da compra acima de 5000? Deve ter um **desconto de 15%**. 
2. Acima de 3000? Deve ter um **desconto de 10%**.
3. Acima de 1000? Deve ter um **desconto de 5%**.
4. Qualquer outra situação, **não deve ter desconto (portanto, zero)**.
 
Após as avaliações e/ou processos, mostre no HTML uma mensagem informando o valor final da compra.
 
**DESAFIO:** existe uma função nativa do PHP que permite **mudar a forma como números são exibidos na tela**. Descubra qual é esta função e a utilize para exibir o valor final da compra com **"."** para separador de milhar e **","** para separador de casa decimal com duas casas decimais.

---

## Exercício 02 (PHP e HTML: Arrays) - 30/01/2025
 
Em um novo arquivo **exercicio02.php**, crie dois arrays para armazenar os dados fictícios de duas pessoas diferentes: nome de usuario, email, senha, idade, sexo e cidade.
 
Em seguida, mostre os valores de nome de usuario, email, idade e sexo de cada pessoa dentro de tags HTML de conteúdo (como article, section, h2, p etc).
 
**Desafio:** destaque estes dois blocos de conteúdo usando CSS e mostre-os lado a lado usando flexbox.
 
---

## Exercício 01 PHP e HTML - 29/01/2025

Dentro do **aulasphp**, crie uma pasta chamada **exercicios**.

Nela, crie o arquivo **exercicio01.php** e faça as atividades abaixo.

Criar **variáveis** e/ou **constantes** para:

- Data de hoje
- Nome de uma pessoa
- Nome de um curso que esta pessoa faz
- Carga horária deste curso
- Limite de faltas

Coloque dados nestas variáveis e mostre no HTML uma mensagem apresentando o nome da pessoa, o nome do curso, a carga horária do curso e o limite de faltas.
 
Destaque alguns destes dados usando CSS (com classes ou inline).
 