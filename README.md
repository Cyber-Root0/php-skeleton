# PHP Skeleton

Este é um **esqueleto de contrato em PHP**, criado para facilitar o desenvolvimento de novos projetos com uma estrutura básica.

## Estrutura do Projeto

O projeto segue o padrão de carregamento automático **PSR-4**, com o namespace principal `CR0\Skeleton`, cujas classes estão localizadas na pasta `Api/`.

## Instalação

Para começar a usar este projeto, você pode clonar o repositório e instalar as dependências (caso existam) usando o **Composer**.

### Passos:

1. Clone o repositório:
    ```bash
    git clone https://github.com/Cyber-root0/php-skeleton.git
    ```

2. Navegue até o diretório do projeto:
    ```bash
    cd php-skeleton
    ```

3. Instale as dependências:
    ```bash
    composer install
    ```

> **Nota**: Atualmente, o projeto não possui dependências externas listadas no `composer.json`, mas isso pode mudar conforme o projeto evolui.

## Autoload

O projeto utiliza o **autoloading** conforme o padrão **PSR-4** definido no `composer.json`:

```json
"psr-4": {
    "CR0\\Skeleton\\": "Api/"
}
