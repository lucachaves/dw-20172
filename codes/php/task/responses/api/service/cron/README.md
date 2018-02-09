# Crondash

Falar sobre o projeto, requisitos e instalação..

## Serviços

- [Adiconar Tarefa](#adiconar-tarefa)

### Adiconar Tarefa

Esse serviço tem a finalidade...

```
/add-task?time=:time&com=:command
```

Param

| Name | Tipo | Descrição |
|-|-|-|
| :time | String | ... [contrab time](http://url) |
| :command | String | ... |

Exemplo

```
/add-task?time=00+09&com=echo+hello
```

Em caso de suc...

```js
{
  "status": "tarefa adicionada com sucesso."
}
```

Em caso de er...

```js
{
  "status": "tarefa adicionada com sucesso."
}
```

Para executar tal ação é necessário executar o comando:

```
$ crontab <<EOF
00 09 * * 1-5 echo hello
EOF
```

Para validar...
