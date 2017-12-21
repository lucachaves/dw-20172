# Projeto DW

## Descrição do Projeto

* * *

A disciplina de DW tem como objetivo principal fazer com que os alunos compreendam como se desenvolve uma aplicação Web. Por isso, que em sua trajetória é apresentado inúmeras tecnologias que compõe esse sistema, começando desde a camada Front-end do HTTP, até o Back-end. Contudo, muitas vezes devido a vasta extensão de temas é impraticável expor todos eles em um único projeto ou exercício em sala de aula.

Pensando em solucionar essa questão, e como forma de estimular um ambiente de iteração, com ampliação de conhecimento dos alunos, é que foi idealizado a criação deste projeto.
Então, através desse projeto o aluno vai poder praticar os conceitos vistos em sala de aula, e alguns pontos extras definidos mais adiante, de tal maneira que no final se obtenha uma aplicação Web mais sólida e robusta.

Quanto ao tema é exigido que se escolha alguma adaptação para Web de alguma questão correlacionado aos assuntos do seu curso, onde supostamente seja tratado no cotidiano através de procedimento manuais, ou por meio de alguma interface mais CLI ou Desktop.

Por exemplo, para um futuro profissional de redes o uso de rotinas ou comando de administração de sistemas é algo corriqueiro, e que pode ser acessível através de um sistema Web. Tal cenário já é uma realidade em algumas [aplicações de administração de sistemas](https://github.com/n1trux/awesome-sysadmin) existentes no mercado, tal como [Webmin](http://www.webmin.com/), [Zabbix](http://www.zabbix.com/) ou [Nagios](https://www.nagios.org/).

Mais adiante serão apresentados maiores detalhes do projeto. Agora, quanto ao tema, o mesmo deve ser informado e aceito pelo professor, já em relação aos possíveis propostas de temas poderia ser relacionado ao ato de gerenciar:

* O cron
* O Samba ou o NFS
* As Cotas de Disco
* O Status do computados (disco, memória, cpu, etc)
* O DNS
* O DHCP
* O SNMP
* O Firewall
* A análise dos arquivos de log
* O Roteamento

## Apresentação do Tema do Projeto

* * *

Para ajudar na definição do tema central do projeto, que pode ser feito em dupla, será exigido que cada projeto seja resumidamente apresentado em sala, oralmente, por cada um de seus integrantes, em data a ser definida.

Assim, será exigido que a apresentação possua um tempo máximo de 3 minutos e contemple:

* A ideia e objetivo principal do projeto, através de funcionalidades;
* Alguma seleção de telas de sistemas existentes que façam algo parecido ao que se propõe, ou seja, não precisamos reinventar a roda sempre;
* E apresentar alguns esboços de tela de como a equipe enxerga o protótipo final do projeto, pode ser até mesmo rabiscos no papel, mas o que importa é que fique claro as interações do sistema e sua navegabilidade.

Lembrando que cada projeto deve incluir o arquivo `README.md` no raiz do seu projeto descrevendo:

> &#35; NOME-DO-PROJETO<br>
> &#35;&#35; Descrição<br>
> &#35;&#35; Inspiração<br>
> &#35;&#35; Protótipos<br>
> &#35;&#35; Recursos da API

### Equipes

Para facilitar a listagem dos temas, todos os interessados devem declarar suas propostas [neste documento](https://padlet.com/lucachaves/projetodw20172).

**Equipe 1#**: [Nome](https://github.com/username/repo)

> Membros:
> * Nome do Aluno - Matrícula

## Exigências do Projeto

* * *

Nesta seção será apresentado as exigências do projeto que nortearam os critérios de avaliação que definiram a pontuação final.

Graças a maleabilidade do tema central do projeto é que foi definido que o tema não entraria no critério de avalição dessa atividade, desde que a aplicabilidade do tema seja relacionada a alguma questão cerne do seu curso.

Portanto, para definir os critério de avaliação serão considerados questões de organização e uso de temas abordados na disciplina. Para ser mais pragmático, a seguir, serão listados os critérios de pontuação com as suas devidas proporções:

* Organização do código (10%):
  - O arquivo `README.md` deve ser o guia de seu projeto, e deve possuir: a descrição do projeto, os requisitos mínimos e processo de instalação, getting started, descrição das funcionalidades e contato;
  - Os arquivos e diretórios devem estar bem organizados;
  - E os arquivos devem sempre que possível possuir comentário e boa legibilidade.
* Utilização de temas (90%):
  - HTML & CSS
    - Deve conter listas, tabela e formulário estilizados;
    - O layout deve ser tableless.
  - JS
    - Criação de componentes dinamicamente através de JSON e AJAX;
    - Uso de extensões no JS, contudo, será exigido a utilização de no mínimo duas extensões inéditas.
  - PHP
    - Execução de comandos via Shell;
    - Estrutura alguma Web API;
    - Manipulação de Sessão;
    - Manipulação de e-mail;
    - Uso de persistência de dados em SGBD.
  - Banco de Dados
    - O banco deve conter mais de uma entidade, e deve haver ao menos um relacionamento entre duas entidades.

Para auxiliar no cálculo da nota final do projeto utilize esse checklist:

Critérios (%)  | Projeto 1 | Projeto 2 | ... | Projeto n
-------------- | --------- | --------- | --- | ---------
Funcionamento | | | |
Organização | | | |
List | | | |
Layout | | | |
Dyn | | | |
Extensões* | | | |
Shell | | | |
API | | | |
Sessão | | | |
Email | | | |
PDO | | | |
BD | | | |
Nota** | | | |

*(\*) Será exigido a utilização de no mínimo três extensões.*

*(\*\*) A soma de todos os itens será 10,0.*


Ocorrerão penalizações na falta de usabilidade, domínio do projeto e de cumprimento no prazo estipulado para apresentação e entrega do projeto. Também vale salientar que sua validade é perdida caso:

  * Não seja apresentado na data marcada;
  * Não seja entregue o endereço do repositório contendo todo o código fonte e material exigido.

## Apresentação Final do Projeto

* * *

O projeto deverá ser entregue no último dia de aula da disciplina através de um projeto no github, e cada integrante deverá apresentar individualmente suas implementações no projeto,  de tal forma que a nota final será computada seguindo as exigências do projeto.
