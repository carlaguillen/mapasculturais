# Ativando um novo tema

Os arquivos de tema da aplicação ficam em:

```
/mapasculturais/src/protected/application/themes
```
Lá estão os temas válidos da aplicação. Certifique-se de ter um tema desejavel neste diretorio para que seja ativado. 

Para ativar o tema edite o arquivo config.php. Este arquivo estende o arquivo conf-base.php. Já o arquivo conf-template.php é apenas um exemplo que pode ser usado para elaborar um novo config.php

```
$ vi mapasculturais/src/protected/application/conf/config.php
```
Edite as linhas abaixo:
```
/* configure e descomente as linhas abaixo para habilitar um tema personalizado */
  // 'namespaces' => array_merge( $config['namespaces'], ['SEU-NAME-SPACE' => 'CAMINHO-DO-TEMPLATE']),
  // 'themes.active' => 'SEU-NAME-SPACE',
```
Para algo como isso:

```
        /* configure e descomente as linhas abaixo para habilitar um tema personalizado */
        'namespaces' => array_merge( $config['namespaces'], ['SantoAndre' => THEMES_PATH.'SantoAndre']),
        'themes.active' => 'SantoAndre',

```
Repare que, além de retirar os comentários e inserir os namespaces, acrescentamos, nas linhas acima, o caminho absoluto do tema concatenando uma variável global de caminho (THEMES_PATH) com o nome do diretório onde está o tema customizado ('SantoAndre').

# Parametrizando foco do mapa e zoom

Ainda no arquivo do configuracoes da aplicacao (config.php), voce pode encontrar parametros para latitude, longitude e zoom do mapa. 

Veja: 
```
$ vi mapasculturais/src/protected/application/conf/config.php
```
Busque e altere as linhas abaixo. 

```
  // latitude, longitude
  'maps.center' => [-23.666380211046917, -46.52915954589844],
  
  // zoom do mapa
  'maps.zoom.default' => 12,
```

Rode o script de deploy com o usuario da aplicação. 

## Colocando em modo homologação, produção ou desenvolvimento

Após a instalação da ferramenta, no arquivo mapasculturais/src/protected/application/conf/config.php, encontrei essas linhas: 

```
    // development, staging, production
    'app.mode' => 'production',

    'doctrine.isDev' => false,
    'slim.debug' => false,
    'maps.includeGoogleLayers' => true,
```
Alterando a chave app.mode para development você terá saídas para o modo de desenvolvimento da aplicação. Alterando também a chave slim.debug para true, você poderá ver as saídas de debug da aplicação. Essas duas modificações são extremamente uteis para identificar erros desconhecidos ou ainda para testar saídas e vericar resultados. 
