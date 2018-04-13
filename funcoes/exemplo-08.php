<?php

// Funções - Recursivas
// Exemplo de função exibe() sendo chamada recursivamente para montar a lista de cargos do organograma

$hierarquia =
array(
  array(
    'nome_cargo' => 'CEO',
    'subordinados' => array(
          // Início Diretor comercial
        array(
            'nome_cargo' => 'Diretor Comercial',
            'subordinados' => array(
              // Início Gerente de vendas
              array(
                'nome_cargo' => 'Gerente de Vendas'
              )
            )
        ),
        array(
          // Início Diretor Financeiro
          'nome_cargo' => 'Diretor Financeiro',
          'subordinados' => array(
            // Início Gerente de contas a pagar
           array(
              'nome_cargo' => 'Gerente de contas a pagar',
              'subordinados' => array(
                  // Início Supervisor de pagamentos
                  array(
                  'nome_cargo' => 'Supervisor de pagamentos'
                  )
              )
            ),
            array(
            // Início Gerente de compras
              'nome_cargo' => 'Gerente de compras',
              'subordinados' => array(
            // Início Supervisor de suprimentos
                array(
                    'nome_cargo' => 'Supervisor de suprimentos',
                    'subordinados' => array(
                  // Início Supervisor de suprimentos
                      array(
                          'nome_cargo' => 'Operador',

                      )
                    )
                )
              )
            )
          )
        )
      )
    )
);

function exibe($cargos)
{
    $html = '<ul>';

    foreach ($cargos as $cargo) {
        # code...
        $html .= '<li>';

        $html .= $cargo['nome_cargo'];

        if (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0) {
            # Função exibe() sendo chamada recursivamente para montar a lista de cargos do organograma
            $html .= exibe($cargo['subordinados']);
        }

        $html .= '</li>';
    }
    $html .= '</ul>';

    return $html;
}

echo exibe($hierarquia);
