# Classes (Orientação a Objetos)

Classes podem ser consideradas a representação de objetos reais. Elas são a base da programação orientada a objetos.
Uma classe é uma estrutura que abstrai um conjunto de objetos com características similares.
Tais características são representadas por atributos e métodos.

Uma classe define um tipo de objeto, mas não é um objeto em si. Para criar um objeto, é necessário instanciar uma classe.

## Pilares da orientação a objetos
O desenvolvimento orientado a objetos é baseado em três pilares:
- Encapsulamento
- Herança
- Polimorfismo

### Encapsulamento
O encapsulamento é a técnica que faz com que os detalhes internos de um objeto permaneçam ocultos para o mundo exterior.
Isso é feito através da definição de métodos e atributos privados.

## Herança
A herança é um mecanismo que permite a criação de uma nova classe a partir de uma classe já existente.

## Polimorfismo
O polimorfismo é a capacidade que um objeto tem de se comportar de diferentes formas.

## Exemplo de uma classe

Classes são declaradas utilizando a palavra reservada `class`.

```php
class Pessoa
{
    // Constantes
    
    // Attributes
    
    // Métodos
}
```

## Instanciando uma classe

Classes podem ser instanciadas utilizando a palavra reservada `new`.

```php
$fulano = new Pessoa();
```

## Atributos

Atributos são as características de um objeto. Eles são representados por variáveis dentro da classe.

```php
class Pessoa
{
      public function __construct(
        protected int $id, 
        public string $nome, 
        public int $cpf){
        $this->id = $id;
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

}
```