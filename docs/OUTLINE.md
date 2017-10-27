# Roteiro das Aulas

[\# 01 - Apresentação da Disciplina (22/09/2017)](#-01---apresentação-da-disciplina-22092017)<br>
[\# 02 - Estrutura com HTML (29/09/2017)](#-02---estrutura-com-html-29092017)<br>
[\# 03 - Estilo com CSS (06/10/2017)](#-03---estilo-com-css-06102017)<br>
[\# 04 - Dashboard Admin (13/10/2017)](#-04---dashboard-admin-13102017)<br>
[\# 05 - Dashboard Admin com Bootstrap (14/10/2017 Sábado)](#-05---dashboard-admin-com-bootstrap-14102017-sábado)<br>
[\# 06 - Recursos do Bootstrap (20/10/2017)](#-06---recursos-do-bootstrap-20102017)<br>
[\# 07 - Introdução ao Javascript (21/10/2017 Sábado)](#-07---introdução-ao-javascript-21102017-sábado)<br>
[\# 08 - Geração Dinâmica com JS (24/10/2017 Terça)](#-08---geração-dinâmica-com-js-24102017-terça)<br>
[\# 09 - Pacotes JS e Consumindo JSON (27/10/2017 Sexta)](#-09---pacotes-js-e-consumindo-json-27102017-sexta)<br>
[\# 10 - Avalição de HTML e CSS (03/11/2017)](#-10---avalição-de-html-e-css-03112017)<br>
[\# 11 - Simulado de Javascript (10/11/2017)](#-11---simulado-de-javascript-10112017)<br>

## \# 01 - Apresentação da Disciplina (22/09/2017)

* * *

**Conteúdo:**
- Apresentação da disciplina:
  - Objetivo, conteúdo, avaliação, comunicação, bibliografia e ferramentas
- Fundamento e finalidade do HTML, CSS, JS, PHP, MySQL
- Exibindo a arquitetura da Web (URL, HTTP, HTML)
- Linguagem de Marcação

**Exercício:**
* Analisar o site da disciplina e acesso o slack
* Descreva o que acontece ao acessar uma página da Web
* Pesquisar sobre a evolução da Web

## \# 02 - Estrutura com HTML (29/09/2017)

* * *

**Conteúdo:**
- HTML
  - Tags e atributos

**Exercício:**
* Estruturando o mamual do comando PING em HTML

## \# 03 - Estilo com CSS (06/10/2017)

* * *

**Conteúdo:**
- CSS
  - Propriedades
  - Seletores
  - Funções
  - At-rules
  - Media query

**Exercício:**
* Estilizando o mamual do comando PING em CSS
  * Proposta de [Miguel Cabral](https://github.com/BelarminoM): [codes/css/examples/main-ping/](../codes/css/examples/main-ping/)

## \# 04 - Dashboard Admin (13/10/2017)

* * *

**Conteúdo:**
- CSS
  - Propriedades: `background-color`, `border`, `border-bottom`, `border-left`, `box-shadow`, `color`, `content`, `font-family`, `font-size`, `font-weight`, `height`, `left`, `line-height`, `margin`, `margin-bottom`, `margin-top`, `overflow`, `padding`, `position`, `text-align`, `width`
  - Seletores: `::before`, `:last-child`, `:nth-child()`
  - Media query: `@media (min-width)`

**Exercício:**
* Revisar o Dashboard [Gentelella](https://github.com/puikinsh/gentelella)

## \# 05 - Dashboard Admin com Bootstrap (14/10/2017 Sábado)

* * *

**Conteúdo:**
- CSS
  - Content generated
    - ::before, content
  - Counter increment: counter-reset, counter-increment, counter()
- CSS puro vs Framework CSS
- Ícones
  - [Material Icons](https://material.io/icons/)
  - [Font Awesome](http://fontawesome.io/)
- [Bootstrap](https://getbootstrap.com/)
  - Configuração: [Starter template](https://getbootstrap.com/docs/4.0/getting-started/introduction/#starter-template)
  - Layout: [Grid system](https://getbootstrap.com/docs/4.0/layout/grid/)
    - [Grid Options](https://getbootstrap.com/docs/4.0/layout/grid/#grid-options)
    - [Exemplo](../codes/css/examples/gentellela-dashboard/) de grid em recortes do Gentelella

**Exercício:**
* Revisar o Dashboard Ample Admin [Lite](https://wrappixel.com/templates/ample-admin-lite/) e [Advanced](https://wrappixel.com/ampleadmin/)

## \# 06 - Recursos do Bootstrap (20/10/2017)

* * *

**Conteúdo:**
- [Bootstrap](http://getbootstrap.com/)
  - [Content](https://getbootstrap.com/docs/4.0/content/): Typography, Code, [Table](../codes/css/bootstrap/table/), Figure
  - [Component](https://getbootstrap.com/docs/4.0/components/): [Buttons](../codes/css/bootstrap/table/), [Card](../codes/css/bootstrap/card/)
- Framework CSS:
  - [Top CSS frameworks to follow in 2017](https://medium.com/@thomasmarciniak/top-css-frameworks-to-follow-in-2017-51d283dd00fb)
  [Popular CSS Libraries](http://cssdb.co/)
  - [Bootstrap](http://getbootstrap.com/)
  - [Materialize CSS](http://materializecss.com/)
  - [Bulma](https://bulma.io/)
  - [PureCSS](https://purecss.io/)
  - [Semantic UI](https://semantic-ui.com/)
  - [Foundation](https://foundation.zurb.com/)

**Exercício:**
* Criar esse painel do  Ample Admin [Lite](https://wrappixel.com/templates/ample-admin-lite/)
![Painel Ample Admin](../codes/css/examples/ample-admin/painel-ample-admin.png)

* Revisar o bootstrap do Dashboard Ample Admin [Lite](https://wrappixel.com/templates/ample-admin-lite/) e [Advanced](https://wrappixel.com/ampleadmin/)
  * Proposta de [Walisson Silva](https://github.com/walissonsilva): [codes/css/examples/ample-admin/](../codes/css/examples/ample-admin/)
* [Simulado de HTML e CSS](../exams/simulado-html-css)
  * Proposta de [Walisson Silva](https://github.com/walissonsilva): [exams/simulado-html-css/](../exams/simulado-html-css/site-response/walisson/)

## \# 07 - Introdução ao Javascript (21/10/2017 Sábado)

* * *

**Conteúdo:**
- Formulário em HTML
  - [MDN Doc](https://developer.mozilla.org/en-US/docs/Learn/HTML/Forms)
  - [Elementos do Formulário](../codes/html/form-elements/form-elements.png)
  - Tags: `<form>`, `<input>`, `<textarea>`, `<select>`, `<option>`, `<button>`, `<label>`
  - [Creating Amazing Forms](https://developers.google.com/web/fundamentals/design-and-ux/input/forms/)
    - [HTML5 input types](https://developers.google.com/web/fundamentals/design-and-ux/input/forms/#html5_input_types)
  - [Bootstrap Form Component](http://getbootstrap.com/docs/4.0/components/forms/)
    - Agrupando e estilizando
    - [Exemplo de Login](../codes/html/form-login/)
    - [Formulário para Calcular o IMC](../codes/html/form-imc/)
- Javascript
  - [MDN Doc](https://developer.mozilla.org/en-US/docs/Web/JavaScript), [MDN Guide](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Guide/)
  - Sintaxe
    - Output
      - `console.log()`
    - [Declarando variáveis](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Guide/Grammar_and_types#Declarations)
    - [Operadores](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Operators/)
      - [Arithmetic](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Operators/Arithmetic_Operators)
      - [Operator Precedence](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Operators/Operator_Precedence)
    - [Control_flow](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Guide/Control_flow_and_error_handling): `if...else`
    - [Function](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Guide/Functions)
  - [Document Object Model (DOM)](https://developers.google.com/web/fundamentals/performance/critical-rendering-path/constructing-the-object-model#document_object_model_dom)
    - `document.querySelector()`
  - window Object
    - `window.print()`
  
**Exercício:**
* Criar um formulário usando o Bootstrap
* Gerar um página HTML para calcular o Índice de Massa Corporea (IMC) para ambos os sexos, para mais detalhes veja a [tabela](http://www.calcule.net/imc.calculo.indice.de.massa.corporal.a.php).
  * [Proposta](../codes/js/examples/bmi-simple/)
* Gerar uma calculadora de botões

## \# 08 - Geração Dinâmica com JS (24/10/2017 Terça)

* * *

**Conteúdo:**
- CSS
  - Propriedade
    - [`transition`](https://developer.mozilla.org/en-US/docs/Web/CSS/transition)
  - Bootstrap
    - Component: [`Alert`](http://getbootstrap.com/docs/4.0/components/alerts/)
- Javascript
  - Sintaxe
    - [Loops](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Guide/Loops_and_iteration): `for`, `for...of`, `for...in`
    - [Template String](https://developer.mozilla.org/pt-BR/docs/Web/JavaScript/Reference/template_strings)
    - [JSON](http://json.org)
    - [NaN](https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/NaN)
    - DOM
      - [Element.innerHTML](https://developer.mozilla.org/en-US/docs/Web/API/Element/innerHTML)
      - [Element.className](https://developer.mozilla.org/en-US/docs/Web/API/Element/className)
    - [`setTimeout()`](https://developer.mozilla.org/en-US/docs/Web/API/WindowOrWorkerGlobalScope/setTimeout)
- Web API
  - APIs: [Any  API](https://any-api.com/), [abhishekbanthia/Public-APIs](https://github.com/abhishekbanthia/Public-APIs), [toddmotto/public-apis](https://github.com/toddmotto/public-apis)
  - IP API
    - Reference: [doc](http://ip-api.com/docs/), [json](http://ip-api.com/docs/api:json)
    ```js
    // http://ip-api.com/json/8.8.8.8
    {
      "as":"AS15169 Google Inc.",
      "city":"Mountain View",
      "country":"United States",
      "countryCode":"US",
      "isp":"Google",
      "lat":37.4229,"lon":-122.085,"org":"Google",
      "query":"8.8.8.8",
      "region":"CA",
      "regionName":"California",
      "status":"success",
      "timezone":"America/Los_Angeles",
      "zip":""
    }
    ```
  - Via CEP
    - Reference: [doc](https://viacep.com.br/)
    ```js
    // https://viacep.com.br/ws/01001000/json/
    {
      "cep": "01001-000",
      "logradouro": "Praça da Sé",
      "complemento": "lado ímpar",
      "bairro": "Sé",
      "localidade": "São Paulo",
      "uf": "SP",
      "unidade": "",
      "ibge": "3550308",
      "gia": "1004"
    }
    ```

**Exercício:**
* Gerar o `Top Tiles` do Dashboard [Gentelella](https://github.com/puikinsh/gentelella)
  * [Proposta](../codes/js/examples/gentelella-top-tiles)
* Gerar o `App Version Panel` do Dashboard [Gentelella](https://github.com/puikinsh/gentelella)
  * [Proposta](../codes/js/examples/gentelella-app-versions/)<br>
  ![app version panel](../codes/js/examples/gentelella-app-versions/app-version-panel.png)
* Analisar o `IMC com Validador`
  * [Proposta](../codes/js/examples/bmi-validator/)

## \# 09 - Pacotes JS e Consumindo JSON (27/10/2017 Sexta)

* * *

**Conteúdo:**
- Javascript
  - Pacotes
    - [chart.js](http://www.chartjs.org/docs/latest/): [doughtnut](../codes/js/examples/chart-js-doughnut/)
    - [gauge.js](http://bernii.github.io/gauge.js/): [exemplo](../codes/js/examples/gauge-js/)
    - [jquery sparkline](https://omnipotent.net/jquery.sparkline/#s-docs): [bar](../codes/js/examples/jquery-sparkline-bar/)
  - AJAX & Fetch
    - [Gráfico de linha com Fetch](../codes/js/examples/chart-js-line/)

**Exercício:**
* Habilitar os gráficos do [Gentelella](https://github.com/puikinsh/gentelella) e do Ample Admin [Lite](https://wrappixel.com/templates/ample-admin-lite/) com pacotes do Javascript, e usando dados em JSON requisitados através de arquivos `.json`.

## \# 10 - Avalição de HTML e CSS (03/11/2017)

* * *

> Todos os detalhes da avaliação estão disponíveis nesta [página](../exams/prova-html-css-1/README.md)

> Além da avaliação será divulgado os critérios do [projeto final](../exams/projeto.md)

## \# 11 - Simulado de Javascript (10/11/2017)

* * *

> Todos os detalhes do simulado estão disponíveis nesta [página](../exams/simulado-html-css-1/README.md)

> A ordem de apresentação estará disponível nessa [página](../exams/projeto.md).

## \# 12 - (15/12/2017)

* * *

**Avaliação II: Javascript**

**Conteúdo:**
- PHP

**Exercício:**

## \# 13 - (22/12/2017 Sexta)

* * *

**Conteúdo:**
- PHP

**Exercício:**

## \# 14 - (26/01/2018)

* * *

**Conteúdo:**
- PHP

**Exercício:**

## \# 15 - (29/01/2018 Segunda)

* * *

**Conteúdo:**
- PHP

**Exercício:**

## \# 16 - (02/02/2018)

* * *

**Conteúdo:**
- MySQL

**Exercício:**

## \# 17 - (09/02/2018)

* * *

**Conteúdo:**
- PHP
- MySQL

**Exercício:**

## \# 18 - (16/02/2018)

* * *

**Conteúdo:**
- PHP
- MySQL

**Exercício:**

## \# 19 - (23/02/2018)

* * *

**Conteúdo:**

**Exercício:**

## \# 20 - (24/02/2018 Sábado)

* * *

**Apresentação de Projetos**
