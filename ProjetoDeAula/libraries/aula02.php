<?php 

    // declaração de variáveis simples
    // $pagina_inicial = 'Principal';
    // $pagina_secundaria = 'Clientes';

    // declaração de variável composta (lista | array)

    $menu_gestor = ['Dashboard', 'Pedidos', 'Relatórios', 'Clientes', 'Vendas', 'Contas', 'Configurações', 'Perfil'];
    $menu_atendente = ['Dashboard', 'Pedidos', 'Clientes', 'Vendas', 'Perfil'];

    // $itens_de_menu = rand() % 2 == 0 ? $menu_gestor : $menu_atendente;

    if(rand() % 2 == 0) {
        $itens_de_menu = $menu_gestor;
    }
    else {
        $itens_de_menu = $menu_atendente;
    }

    // variáveis do breadcrumb
    $breadcrumb_title = 'Relatório Mensal';
    $breadcrumb_path = ['Home', 'Vendas', 'Relatórios', 'Mensal'];

?>