<?php

namespace App\GraphQL\Mutations;

use GraphQL\Type\Definition\ResolveInfo;
use Nuwave\Lighthouse\Support\Contracts\GraphQLContext;
use App\Contas;

class Sacar
{
    /**
     * Return a value for the field.
     *
     * @param  null  $rootValue Usually contains the result returned from the parent field. In this case, it is always `null`.
     * @param  mixed[]  $args The arguments that were passed into the field.
     * @param  \Nuwave\Lighthouse\Support\Contracts\GraphQLContext  $context Arbitrary data that is shared between all fields of a single query.
     * @param  \GraphQL\Type\Definition\ResolveInfo  $resolveInfo Information about the query itself, such as the execution state, the field name, path to the field from the root, and more.
     * @return mixed
     */

    public function args(): array
    {
        return [
            'conta' => ['name' => 'conta', 'type' => Type::string()],
            'valor' => ['name' => 'valor', 'type' => Type::float()]
        ];
    }

    public function __invoke($rootValue, array $args, GraphQLContext $context, ResolveInfo $resolveInfo)

    {
        $conta = \App\Contas::where('conta', $args['conta'])->first();
        
        if(!$conta){
            return null;
        } 
        $valor1 = $conta->saldo;
        $valor2 = $args['valor'];
        if ($valor2 < 0) {
            return new Error("Nao deu");
        }
        $total = number_format(($valor1 - $valor2), 2, '.','');
        if ($total < 0) {
            throw new Error("email not in proper format");
        }
        $conta->saldo = $total;
        $conta->save();

        return $conta;
    }
}
