# Chat #

### Desctrição ###
Repositório para estudo do desenvolvimento de um Chat em PHP.

## Autor ##

- [Everaldo Matias](https://everaldomatias.github.io/)

## Documentação ##

### Estrutura do Banco de Dados ###

- Banco de Dados: `chat`
- mensagens
```
CREATE TABLE `chat`.`mensagens` ( `id` INT(200) NOT NULL AUTO_INCREMENT ,  `id_de` VARCHAR(200) NOT NULL ,  `id_para` VARCHAR(200) NOT NULL ,  `mensagem` TEXT NOT NULL ,    PRIMARY KEY  (`id`)) ENGINE = InnoDB;
```

- usuarios
```
CREATE TABLE `chat`.`usuarios` ( `id` INT(200) NOT NULL AUTO_INCREMENT , `nome` VARCHAR(200) NOT NULL , `usuario` VARCHAR(200) NOT NULL , `senha` VARCHAR(200) NOT NULL , `foto` VARCHAR(500) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
```

## Referências ##

- [Em breve]()

## Changelog ##

- 0.0.1 - Release inicial
